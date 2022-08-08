<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 *
 */

namespace steve\postreactions\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class viewtopic_listener implements EventSubscriberInterface
{
	protected $auth;
	protected $config;
	protected $db;
	protected $helper;
	protected $template_context;
	protected $template;
	protected $user;
	
	protected $type_operator;
	protected $reactions_table;

	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\controller\helper $helper,
		\phpbb\template\context $template_context,		
		\phpbb\template\template $template,
		\phpbb\user $user,
		
		\steve\postreactions\reaction\reaction_types $type_operator,
		$reactions_table)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->db = $db;
		$this->helper = $helper;
		$this->template_context = $template_context;
		$this->template = $template;
		$this->user = $user;
		
		$this->type_operator = $type_operator;		
		$this->reactions_table = $reactions_table;
	}
	
	static public function getSubscribedEvents()
	{
		return [
			'core.viewtopic_assign_template_vars_before'	=> 'tpr_template_vars_before',
			'core.viewtopic_post_rowset_data'				=> 'tpr_rowset_data',
			'core.viewtopic_cache_user_data'				=> 'tpr_user_data',
			'core.viewtopic_modify_post_data'				=> 'tpr_modify_post_data',			
			'core.viewtopic_modify_post_row'				=> 'tpr_modify_post_row',
			'core.viewtopic_post_row_after'					=> 'tpr_post_row_after',
			'core.viewtopic_modify_page_title'				=> 'tpr_qr_action',
		];
	}
	
	public function tpr_template_vars_before($event)
	{
		$topic_data = $event['topic_data'];
		
		$this->reactions_enabled = !empty($this->config['reactions_enabled']) ? true : false;
		$this->user_enable_reactions = (!$this->auth->acl_get('u_disable_reactions', $this->user->data['user_id'])) ? true : ($this->user->data['user_enable_reactions'] ? true  : false);				
		$this->forum_enable_reactions = !empty($topic_data['forum_enable_reactions']) ? true : false;
		$this->u_view_reactions = $this->auth->acl_get('u_view_reactions') ? true : false;
		
		$this->topic_post_id = (int) $topic_data['topic_first_post_id'];
		$this->topic_enable_reactions = !empty($topic_data['topic_enable_reactions']) ? true : false;

		$this->type_operator->tpr_common_vars([
			'S_FORUM_ENABLE_REACTIONS'	=> $this->forum_enable_reactions,
			'S_TOPIC_ENABLE_REACTIONS'	=> $this->topic_enable_reactions,
			'S_VIEWTOPIC_REACTIONS'		=> true,
			'TYPE_COUNT_ENABLE'			=> !empty($this->config['reaction_type_count_enable']) ? true : false,
			'REACTIONS_ENABLE_COUNT'	=> !empty($this->config['reactions_enable_count']) ? true : false,
		]);

		$event['topic_data'] = $topic_data;
	}

	public function tpr_rowset_data($event)
	{
		$rowset_data = $event['rowset_data'];
		$rowset_data = array_merge($rowset_data, [
			'post_disabled_reaction_ids'	=> $event['row']['post_disabled_reaction_ids'],//isset
			'post_enable_reactions'			=> $event['row']['post_enable_reactions'],//bool
			'post_reactions' 				=> $event['row']['post_reactions'],//count
			'post_reaction_data'			=> $event['row']['post_reaction_data'],//isset
		]);
		$event['rowset_data'] = $rowset_data;
	}

	public function tpr_user_data($event)
	{
		$user_data = $event['user_cache_data'];
		$user_data = array_merge($user_data, [
			'user_disabled_reaction_ids'	=> $event['row']['user_disabled_reaction_ids'],//isset
			'user_enable_foe_reactions'		=> $event['row']['user_enable_foe_reactions'],//bool
			'user_enable_reactions' 		=> $event['row']['user_enable_reactions'],//bool
			'user_reactions' 				=> $event['row']['user_reactions'],//count
		]);
		$event['user_cache_data'] = $user_data;
	}

	public function tpr_modify_post_data($event)
	{
		$sql_where = $this->db->sql_in_set('post_id', $event['post_list']);

		if (empty($this->topic_enable_reactions))
		{
			$sql_where = "post_id = " . (int) $this->topic_post_id;
		}

		if ($this->reactions_enabled && count($event['post_list']) && $this->forum_enable_reactions && $this->user_enable_reactions && $this->u_view_reactions)
		{
			$this->reaction_types = $this->type_operator->obtain_reaction_types(false);

			$this->type_ids = array_column($this->reaction_types, 'reaction_type_id');

			$sql = 'SELECT reaction_user_id, reaction_type_id, post_id
				FROM ' . $this->reactions_table . "
				WHERE " . $sql_where . "
					AND reaction_user_id = " . (int) $this->user->data['user_id'];
			$result = $this->db->sql_query($sql);

			$this->user_reaction = $user_reaction = [];
			while ($row = $this->db->sql_fetchrow($result))
			{
				$this->user_reaction[(int) $row['post_id']][] = $row;
			}
			$this->db->sql_freeresult($result);
		}
	}

	public function tpr_modify_post_row($event)
	{
		if (empty($this->reactions_enabled) || empty($this->user_enable_reactions) || empty($this->u_view_reactions))
		{
			return;
		}

		$this->guest = $event['row']['user_id'] == ANONYMOUS ? true : false;

		$event['post_row'] = array_merge($event['post_row'], [
			'USER_REACTIONS' 	=> !empty($event['user_poster_data']['user_reactions']) ? $event['user_poster_data']['user_reactions'] : 0,//count
		]);

		$this->post_id = (int) $event['row']['post_id'];
		if (!$this->topic_enable_reactions && $this->post_id !=	$this->topic_post_id)
		{
			return;
		}

		$user_react = true;
		if (empty($this->config['reactions_author_react']))
		{
			$user_react = ($event['row']['user_id'] != $this->user->data['user_id']);//?
		}

		$user_foe = (empty($event['user_poster_data']['user_enable_foe_reactions']) && $event['row']['foe']) ? true : false;

		$post_visible = $event['row']['post_visibility'] == ITEM_APPROVED ? true : false;

		if ($this->guest)
		{
			return;
		}

		$this->user_type_id = (int) 0;
		$this->user_reacted = false;
		if (!empty($this->user_reaction[$this->post_id]))
		{
			foreach ($this->user_reaction[$this->post_id] as $reacted)
			{
				if ($reacted['reaction_user_id'] != $this->user->data['user_id'])
				{
					continue;
				}

				$this->user_type_id = (int) $reacted['reaction_type_id'];
				if (!in_array($this->user_type_id, $this->type_ids))
				{
					continue;
				}
				$this->user_reacted = true;
			}
		}

		$this->post_reaction_data = isset($event['row']['post_reaction_data']) ? $event['row']['post_reaction_data'] : '';
		$this->post_reactions = $event['row']['post_reactions'];//
		$this->post_disabled_reactions = $this->type_operator->disabled_reactions($event['row']['post_disabled_reaction_ids'], $event['user_poster_data']['user_disabled_reaction_ids']);

		$type_ids_post_row = (int) 0;
		if ($this->post_reaction_data && !empty($this->post_reactions))
		{
			$json_data = json_decode($this->post_reaction_data);
			if (!empty($json_data))
			{
				foreach ($json_data as $key => $value)
				{
					if (!is_object($value) || (!empty($this->post_disabled_reactions) && in_array($value->id, $this->post_disabled_reactions)))
					{
						continue;
					}
					$type_ids_post_row = $key + 1;//
					//$value->count add all these up for reaction count
				}
			}
			unset($json_data);
		}

		$reaction_delete_url = $this->helper->route('steve_postreactions_delete_reaction_controller', ['post_id' => $this->post_id, 'user_id' => $this->user->data['user_id'], 'hash' => generate_link_hash('delete_reaction')]);
		$resync_url = $this->helper->route('steve_postreactions_resync_reaction_controller', ['post_id' => $this->post_id, 'user_id' => $this->user->data['user_id'], 'hash' => generate_link_hash('resync_reaction')]);

		$view_list_url = $this->helper->route('steve_postreactions_view_reactions_controller_pages', ['post_id' => $this->post_id]);

		$refresh = (!$this->post_reaction_data && !empty($this->post_reactions)) ? true : false;

		$event['post_row'] = array_merge($event['post_row'], [
			'REFRESH'				=> $refresh,
			'RESYNC'				=> !empty($this->config['reactions_resync_enable']) ? $resync_url : false,
			'GUEST'					=> $this->guest,
			'POST_REACTIONS' 		=> $type_ids_post_row > (int) 1 ? $this->post_reactions : (int) 0,
			'POST_REACTION_ENABLE' 	=> !empty($event['row']['post_enable_reactions']) ? true : false,
			'REACTION_DELETE'		=> ($this->auth->acl_get('u_delete_reactions') && $this->user_reacted) ? $reaction_delete_url : false,
			'USER_REACTIONS' 		=> !$this->guest ? $event['user_poster_data']['user_reactions'] : false,
			'U_POSTER_ADD'			=> ($user_react && $post_visible && !$user_foe && $this->auth->acl_get('u_add_reactions')) ? true : false,
			'U_REACTION_DELETE'		=> $this->auth->acl_get('u_delete_reactions') ? true : false,
			'U_REFRESH'				=> ($this->auth->acl_get('u_resync_reactions') && ($event['row']['user_id'] == $this->user->data['user_id'] || $this->auth->acl_get('a_', 'm_'))) ? true : false,
			'U_VIEW_LIST'			=> ($this->auth->acl_get('u_view_post_reactions_page') && !empty($this->config['reactions_posts_page_enabled'])) ? $view_list_url : false,
		]);
	}

	public function tpr_post_row_after($event)
	{
		if (empty($this->reactions_enabled) || empty($this->user_enable_reactions) || empty($this->u_view_reactions) || $this->guest)
		{
			return;
		}

		if (!empty($this->reaction_types))
		{
			$this->type_operator->display_reaction_types($this->reaction_types, $this->post_id, $this->user_type_id, $this->post_disabled_reactions);
		}

		if ($this->post_reaction_data && !empty($this->post_reactions))
		{
			$json_data = json_decode($this->post_reaction_data);
			if (!empty($json_data))
			{

				foreach ($json_data as $key => $value)
				{
					if (!is_object($value) || (!empty($this->post_disabled_reactions) && in_array($value->id, $this->post_disabled_reactions)))
					{
						continue;
					}
					//combine ^^
					if (!in_array($value->id, $this->type_ids))
					{
						continue;
					}
					$view_list_url = $this->helper->route('steve_postreactions_view_reactions_controller_pages', ['post_id' => $this->post_id, 'reaction' => $value->id]);

					$reactions_row = [
						'ID'				=> $value->id,
						'U_REACTED'			=> $this->user_type_id == $value->id ? true : false,
						'COUNT'				=> !empty($value->count) ? $value->count : (int) 0,
						'IMAGE_SRC'			=> $this->type_operator->get_reaction_file($value->src),
						'U_VIEW_LIST'		=> $this->auth->acl_get('u_view_post_reactions_page') && !empty($this->config['reactions_posts_page_enabled']) ? $view_list_url : false,
					];

					$this->template->assign_block_vars('postrow.reactions', $reactions_row);
				}
			}
			unset($json_data, $this->user_reaction[$this->post_id]);
		}
	}

	public function tpr_qr_action($event)
	{
		if (!$this->forum_enable_reactions && !$this->user->data['is_registered'] && !$this->config['allow_quick_reply'] 
			&& (!$event['topic_data']['forum_flags'] & FORUM_FLAG_QUICK_REPLY) && !$this->auth->acl_get('f_reply', $event['forum_id']))
		{	
			return;
		}
		//flood limit warning!
		$root_ref = $this->template_context->get_root_ref();
		$this->template->assign_var('U_QR_ACTION', isset($root_ref['U_QR_ACTION']) ? $root_ref['U_QR_ACTION'] . '&amp;qr_action=full' : '');
		$this->template->assign_var('TPR_QR_ACTION', isset($root_ref['U_QR_ACTION']) ? html_entity_decode($root_ref['U_QR_ACTION'] . '&amp;qr_action=submit') : '');
	}		
}
