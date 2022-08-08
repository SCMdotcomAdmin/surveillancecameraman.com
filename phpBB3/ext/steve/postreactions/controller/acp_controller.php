<?php
/**
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 */

namespace steve\postreactions\controller;

class acp_controller //implements acp_interface put back 0.9.0
{
	protected $config;
	protected $db;
    protected $language;
	protected $log;
	protected $notification_manager;
	protected $pagination;
	protected $request;
	protected $template;
	protected $user;
	protected $root_path;//
	
	protected $tpr_delete_reactions;
	protected $type_operator;
	protected $reactions_table;
	protected $reaction_types_table;	

	const QUERY_LIMIT = 10;

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\language\language $language,
		\phpbb\log\log $log,
		\phpbb\notification\manager $notification_manager,		
		\phpbb\pagination $pagination,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\user $user,
		$root_path,//
		
		\steve\postreactions\reaction\delete_reactions $tpr_delete_reactions,
		\steve\postreactions\reaction\reaction_types $type_operator,
		$reactions_table,
		$reaction_types_table)
	{
		$this->config = $config;
		$this->db = $db;
		$this->language = $language;
		$this->log = $log;
		$this->notification_manager = $notification_manager;		
		$this->pagination = $pagination;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->root_path = $root_path;//
		
		$this->tpr_delete_reactions = $tpr_delete_reactions;
		$this->type_operator = $type_operator;
		$this->reactions_table = $reactions_table;
		$this->reaction_types_table = $reaction_types_table;
	}

	public function get_acp_data($id, $mode, $action, $submit, $u_action)
	{
		$this->id = $id;
		$this->mode = $mode;
		$this->action = $action;
		$this->submit = $submit;
		$this->u_action = $u_action;
		$this->reaction_type_id = $this->request->variable('reaction_type_id', 0);
		$this->reactions_enabled = !empty($this->config['reactions_enabled']) ? true : false;
		$this->const = new \steve\postreactions\reaction\constants;

	}

	public function reaction_settings()
	{
		//$image_path = $this->request->variable('reactions_image_path', '', true);
		//$image_path = trim($image_path, "/");
		if (!@is_dir($this->type_operator->reactions_image_path()))
		{	
			$error = $this->language->lang('ACP_REACTION_PATH_NOT_DIR', $this->config['reactions_image_path']);
		}

		if ($this->submit && !isset($error))
		{
			$enable_thanks = $this->request->variable('reactions_enable_thanks_button', false);
			if (!empty($enable_thanks) && empty($this->config['reactions_enable_thanks_button']))
			{
				$this->type_operator->disable_all_thanks();
			}

			$this->config->set('reactions_enabled', $this->request->variable('reactions_enabled', false));
			$this->config->set('reactions_page_enabled', $this->request->variable('reactions_page_enabled', false));
			$this->config->set('reactions_posts_page_enabled', $this->request->variable('reactions_posts_page_enabled', false));
			$this->config->set('reactions_enable_count', $this->request->variable('reactions_enable_count', false));
			$this->config->set('reaction_type_count_enable', $this->request->variable('reaction_type_count_enable', false));
			$this->config->set('reactions_enable_badge', $this->request->variable('reactions_enable_badge', false));
			$this->config->set('reactions_enable_percentage', $this->request->variable('reactions_enable_percentage', false));
			$this->config->set('reactions_author_react', $this->request->variable('reaction_author_react', false));

			$this->config->set('reactions_resync_enable', $this->request->variable('reactions_resync_enable', false));
			$this->config->set('reactions_enable_toggle_fade', $this->request->variable('reactions_enable_toggle_fade', false));

			$this->config->set('reactions_enable_thanks_button', $enable_thanks);
			$this->config->set('reactions_enable_thanks_text', $this->request->variable('reactions_enable_thanks_text', false));

			//$this->config->set('reactions_image_path', $image_path);
			$this->config->set('reaction_image_height', $this->request->variable('reaction_image_height', 0));//max
			$this->config->set('reaction_image_width', $this->request->variable('reaction_image_width', 0));//max
			$this->config->set('reactions_dropdown_width', $this->request->variable('reactions_dropdown_width', 0));
			$this->config->set('reactions_per_page', $this->request->variable('reactions_per_page', 0));
			$this->config->set('reaction_sql_cache', $this->request->variable('reaction_sql_cache', 0));

			$this->config->set('reactions_resync_batch', $this->request->variable('reactions_resync_batch', 0));
			$this->config->set('reactions_resync_time',  $this->request->variable('reactions_resync_time', 0));
//flood time
			$this->type_operator->delete_reaction_types_cache();

			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'ACP_REACTIONS_SETTING_UPDATED');
			$message = $this->language->lang('ACP_REACTIONS_SETTING_SAVED');
			trigger_error($message . adm_back_link($this->u_action), E_USER_NOTICE);
		}

		$reactions_image_path = $this->type_operator->reactions_image_path();

		$this->template->assign_vars([
			'REACTIONS_ENABLED'				=> $this->reactions_enabled,
			'REACTIONS_VERSION'				=> isset($this->config['reactions_version']) ? $this->config['reactions_version'] : '',
			'S_ERROR'						=> isset($error) ? $error : '',
			'S_SETTINGS_MODE'				=> true,
			'S_REACTIONS_STYLESHEET'		=> true,
			'U_ACTION'						=> $this->u_action,

			'REACTIONS_ENABLE_PAGES'		=> !empty($this->config['reactions_page_enabled']) ? true : false,
			'REACTIONS_ENABLE_POST_PAGES'	=> !empty($this->config['reactions_posts_page_enabled']) ? true : false,
			'REACTIONS_RESYNC_ENABLE'		=> !empty($this->config['reactions_resync_enable']) ? true : false,
			'REACTIONS_ENABLE_COUNT'		=> !empty($this->config['reactions_enable_count']) ? true : false,
			'REACTION_TYPE_COUNT_ENABLE'	=> !empty($this->config['reaction_type_count_enable']) ? true : false,
			'REACTIONS_ENABLE_BADGE'		=> !empty($this->config['reactions_enable_badge']) ? true : false,
			'REACTIONS_ENABLE_PERCENTAGE'	=> !empty($this->config['reactions_enable_percentage']) ? true : false,
			'REACTION_AUTHOR_REACT'			=> !empty($this->config['reactions_author_react']) ? true : false,
			'REACTIONS_ENABLE_TOGGLE_FADE'	=> !empty($this->config['reactions_enable_toggle_fade']) ? true : false,

			'REACTIONS_ENABLE_THANKS'		=> !empty($this->config['reactions_enable_thanks_button']) ? true : false,
			'REACTIONS_ENABLE_THANKS_TEXT'	=> !empty($this->config['reactions_enable_thanks_text']) ? true : false,

			'REACTION_PATHS'				=> $reactions_image_path,
			'REACTION_PATH'					=> isset($this->config['reactions_image_path']) ? $this->config['reactions_image_path'] : '',//
			'REACTION_IMAGE_TYPES_EXT'		=> $this->type_operator->image_type_ext(),
			'REACTIONS_DROPDOWN_WIDTH'		=> isset($this->config['reactions_dropdown_width']) ? $this->config['reactions_dropdown_width'] : $this->const::TP_DROPDOWN,
			'REACTION_HEIGHT'				=> isset($this->config['reaction_image_height']) ? $this->config['reaction_image_height'] : $this->const::TP_DIMENSION,
			'REACTION_WIDTH'				=> isset($this->config['reaction_image_width']) ? $this->config['reaction_image_width'] : $this->const::TP_DIMENSION,
			'REACTIONS_PER_PAGE'			=> isset($this->config['reactions_per_page']) ? $this->config['reactions_per_page'] : $this->const::TP_PER_PAGE ,
			'REACTIONS_IMAGE_CACHE'			=> isset($this->config['reaction_sql_cache']) ? $this->config['reaction_sql_cache'] : $this->const::TP_CACHE_TIME,

			'REACTIONS_RESYNC_BATCH'		=> isset($this->config['reactions_resync_batch']) ? $this->config['reactions_resync_batch'] : $this->const::TP_BATCH,
			'REACTIONS_RESYNC_TIME'			=> isset($this->config['reactions_resync_time']) ? $this->config['reactions_resync_time'] : $this->const::TP_SYNC_TIME,
		]);
	}
	
	public function edit_add()
	{
		if ($this->action == 'edit' && empty($this->reaction_type_id))
		{
			trigger_error($this->language->lang('REACTION_TYPE_ID_EMPTY') . adm_back_link($this->u_action), E_USER_WARNING);
		}

		if ($this->action == 'edit')
		{
			$reaction_type = $this->type_operator->obtain_reaction_type($this->reaction_type_id);
			$total_count = $this->type_operator->reation_type_count($this->reaction_type_id);
		}

		$data = [
			'reaction_file_name' 		=> $this->request->variable('reaction_file_name', '', true),
			'reaction_type_enable'		=> $this->request->variable('reaction_type_enable', false),
			'reaction_type_title'		=> utf8_normalize_nfc($this->request->variable('reaction_type_title', '', true)),
			'reaction_type_bg_color'	=> $this->request->variable('reaction_type_bg_color', '', true),
			'reaction_type_height'		=> $this->request->variable('reaction_type_height', '', true),
			'reaction_type_width'		=> $this->request->variable('reaction_type_width', '', true),
		];
			
		if ($this->submit)
		{
			if (empty($data['reaction_file_name']))
			{
				$error = $this->language->lang('ACP_NO_REACTION_IMAGE_SELECTED');
			}
			
			if (!isset($error))
			{
				$sql_ary = [
					'reaction_file_name'		=> (string) $data['reaction_file_name'],
					'reaction_type_enable'		=> (bool) $data['reaction_type_enable'],
					'reaction_type_title'		=> (string) $data['reaction_type_title'],
					'reaction_type_bg_color'	=> (int) $data['reaction_type_bg_color'],
					'reaction_type_height'		=> (int) $data['reaction_type_height'],
					'reaction_type_width'		=> (int) $data['reaction_type_width'],
				];
				
				if ($this->action == 'add')
				{
					$sql = 'INSERT INTO ' .  $this->reaction_types_table . ' ' . $this->db->sql_build_array('INSERT', $sql_ary);
					$this->db->sql_query($sql);

					$log_lang = 'LOG_ACP_REACTION_ADDED';
					$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, $log_lang, false, [$data['reaction_type_title']]);
					$this->type_operator->delete_reaction_types_cache();

					trigger_error($this->language->lang('ACP_REACTION_ADDED') . adm_back_link($this->u_action), E_USER_NOTICE);
				}
				else if ($this->action == 'edit')
				{
					$sql = 'UPDATE ' .  $this->reaction_types_table . '
						SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
						WHERE reaction_type_id = ' . (int) $this->reaction_type_id;
					$this->db->sql_query($sql);

					if ($reaction_type['reaction_file_name'] !== $data['reaction_file_name'] && !empty($total_count))
					{
						$this->config->set('reactions_old_file', $reaction_type['reaction_file_name']);
						$this->resync_refresh_confirm();
					}
					else
					{
						$log_lang = 'LOG_ACP_REACTION_EDITED';
						$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, $log_lang, false, [$data['reaction_type_title']]);
						$this->type_operator->delete_reaction_types_cache();

						trigger_error($this->language->lang('ACP_REACTION_UPDATED') . adm_back_link($this->u_action), E_USER_NOTICE);
					}
				}
			}
		}

		$reaction_image = isset($reaction_type['reaction_file_name']) ? $reaction_type['reaction_file_name'] : '';
		$reactions_image_path = $this->type_operator->reactions_image_path();

		$this->template->assign_vars([
			'REACTION_COUNT'			=> $this->action == 'edit' && !empty($total_count) ? $this->language->lang('ACP_REACTION_TYPE_COUNT', $total_count) : false,
			'REACTIONS_ENABLED'			=> $this->reactions_enabled,
			'REACTION_PATHS'			=> $reactions_image_path,
			'REACTIONS_VERSION'			=> isset($this->config['reactions_version']) ? $this->config['reactions_version'] : '',
			'S_EDIT'					=> $this->action == 'edit' ? true : false,
			'S_ERROR'					=> isset($error) ? $error : '',
			'S_REACTIONS_STYLESHEET'	=> true,
			'S_FILENAME_LIST'			=> $this->type_operator->select_reaction_image($reaction_image),
			'U_ADD_REACTION'			=> true,
			'U_ACTION'					=> $this->action == 'add' ? $this->u_action . '&amp;action=add' : $this->u_action . '&amp;action=edit&amp;reaction_type_id=' . $this->reaction_type_id,

			'REACTION_ENABLE'			=> $this->action == 'add' ? true : (!empty($reaction_type['reaction_type_enable']) ? true : false),
			'REACTION_IMAGE'			=> $reactions_image_path . $reaction_image,
			'REACTION_HEIGHT'			=> isset($reaction_type['reaction_type_height']) ? $reaction_type['reaction_type_height'] : '',
			'REACTION_WIDTH'			=> isset($reaction_type['reaction_type_width']) ? $reaction_type['reaction_type_width'] : '',
			'REACTION_TITLE'			=> isset($reaction_type['reaction_type_title']) ? $reaction_type['reaction_type_title'] : '',
			//'REACTION_TYPE_BG_COLOR'	=> isset($reaction_type['reaction_type_bg_color']) ? $reaction_type['reaction_type_bg_color'] : '',
		]);
	}

	public function delete_data()
	{
		if (confirm_box(true))
		{
			$this->delete();
		}
		else
		{
			confirm_box(false, $this->language->lang('ACP_REACTION_DELETED_CONFIRM'), build_hidden_fields([
					'i'			=> $this->id,
					'mode'		=> $this->mode,
					'action'	=> 'delete',
			]));
		}
	}

	public function delete()
	{
		@set_time_limit(0);
		//$start_time = time();ini time

		$reaction_id = $this->request->variable('reaction_id', $this->reaction_type_id);

		if (empty($reaction_id))
		{
			trigger_error('REACTION_TYPE_ID_EMPTY' . adm_back_link($this->u_action), E_USER_WARNING);
		}

		$batch_size = $this->config['reactions_resync_batch'];
        $start_count = $this->request->variable('start_count', 0);

		$counted = $this->type_operator->reation_type_count($reaction_id);
		$type_data = $this->type_operator->obtain_reaction_type($reaction_id);
		//if empty trigger
		$sql = 'SELECT reaction_id, post_id, poster_id, reaction_type_id
			FROM ' . $this->reactions_table . "
			WHERE reaction_type_id = " . (int) $reaction_id;
		$result = $this->db->sql_query_limit($sql, $batch_size);

		$post_ids = $poster_ids = $posts = $reaction_ids = [];
		if ($row = $this->db->sql_fetchrow($result))
		{
			do
			{
				$posts[] = (int) $row['post_id'];
				$poster_ids[(int) $row['poster_id']] = !empty($poster_ids[$row['poster_id']]) ? $poster_ids[$row['poster_id']] + 1 : 1;
				$post_ids[(int) $row['post_id']] = !empty($post_ids[$row['post_id']]) ? $post_ids[$row['post_id']] + 1 : 1;
				$reaction_ids[] = (int) $row['reaction_id'];
			}
			while ($row = $this->db->sql_fetchrow($result));

			$this->db->sql_transaction('begin');

			if (!empty($poster_ids))
			{
				foreach ($poster_ids as $poster_id => $count)
				{
					$sql = 'UPDATE ' . USERS_TABLE . '
						SET user_reactions = 0
						WHERE user_id = ' . (int) $poster_id . '
							AND user_reactions < ' . (int) $count;
					$this->db->sql_query($sql);

					$sql = 'UPDATE ' . USERS_TABLE . '
						SET user_reactions = user_reactions - ' . (int) $count . '
						WHERE user_id = ' . (int) $poster_id . '
							AND user_reactions >= ' . (int) $count;
					$this->db->sql_query($sql);
				}
				unset($poster_ids);
			}

			if (!empty($post_ids))
			{
				foreach ($post_ids as $post_id => $count)
				{
					$sql = 'UPDATE ' . POSTS_TABLE . '
						SET post_reactions = 0
						WHERE post_id = ' . (int) $post_id . '
							AND post_reactions < ' . (int) $count;
					$this->db->sql_query($sql);

					$sql = 'UPDATE ' . POSTS_TABLE . '
						SET post_reactions = post_reactions - ' . (int) $count . '
						WHERE post_id = ' . (int) $post_id . '
							AND post_reactions >= ' . (int) $count;
					$this->db->sql_query($sql);
				}
				unset($post_ids);
			}

			if (!empty($posts))
			{
				$sql1 = 'SELECT post_id, post_reaction_data
					FROM ' . POSTS_TABLE . "
					WHERE " . $this->db->sql_in_set('post_id', $posts);
				$results = $this->db->sql_query($sql1);

				$post_data = [];
				while ($row = $this->db->sql_fetchrow($results))
				{
					if (empty($row))
					{
						continue;
					}
					$post_data[] = $row;
				}
				$this->db->sql_freeresult($results);

				if (!empty($post_data))
				{
					foreach ($post_data as $data)
					{
						$json_data = json_decode($data['post_reaction_data']);

						if (!empty($json_data))
						{
							foreach ($json_data as $key => $value)
							{
								if (empty($value))
								{
									continue;
								}

								if ($value->id == $this->reaction_type_id)
								{
									unset($json_data[$key]);
								}
							}
						}

						$new_post_data = $this->type_operator->remove_duplicate_encode($json_data);

						$sql = 'UPDATE ' . POSTS_TABLE . "
							SET post_reaction_data = '" . $this->db->sql_escape($new_post_data) . "'
							WHERE post_id = " . (int) $data['post_id'];
						$this->db->sql_query($sql);
					}
					unset($post_data, $json_data);
				}
			}

			if (!empty($reaction_ids))
			{
				$this->notification_manager->delete_notifications('steve.postreactions.notification.type.reaction', $reaction_ids);
			}

			$sql = 'DELETE FROM ' . $this->reactions_table . '
				WHERE reaction_type_id = ' . (int) $reaction_id . '
					AND ' . $this->db->sql_in_set('post_id', $posts);
			$this->db->sql_query($sql);
			$affected = $this->db->sql_affectedrows();

			$this->db->sql_transaction('commit');

			unset($posts);

			if (!empty($affected))
			{
				$refresh_time = isset($this->config['reactions_resync_time']) ? $this->config['reactions_resync_time'] : (int) 1;
				meta_refresh($refresh_time, $this->u_action . "&amp;action=delete&amp;reaction_id=$reaction_id&amp;start_count=" . ($start_count + $affected));
			}

			$this->template->assign_vars([
				'OLD_IMG'	=> $this->type_operator->get_reaction_file($type_data['reaction_file_name']),
				'START'     => $this->language->lang('ACP_REACTIONS_DELETING', $start_count),
				'SYNC'		=> true,
				'S_REACTIONS_STYLESHEET'	=> true,
			]);

			return $this;
		}
		$this->db->sql_freeresult($result);

		$sql = 'DELETE FROM ' . $this->reaction_types_table . '
			WHERE reaction_type_id = ' . (int) $reaction_id;
		$this->db->sql_query($sql);

		$this->template->assign_vars([
			'DONE'		=> $this->language->lang('ACP_REACTIONS_DELETING_DONE', $start_count),
			'OLD_IMG'	=> $this->type_operator->get_reaction_file($type_data['reaction_file_name']),
			'SYNC'		=> true,
			'S_REACTIONS_STYLESHEET'	=> true,
			'U_BACK'	=> $this->u_action,
		]);
		$this->type_operator->delete_reaction_types_cache();

		$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_ACP_REACTION_DELETED');

		return $this;
	}

	public function resync_refresh_confirm()
	{
		if (confirm_box(true))
		{
			$this->resync_refresh();
		}
		else
		{
			confirm_box(false, $this->language->lang('ACP_REACTIONS_CONFIRM_CHANGE'), build_hidden_fields([
				'i'			=> $this->id,
				'mode'		=> $this->mode,
				'action'	=> 'resync_refresh',
			]));
		}
	}

	public function resync_refresh()
	{
		@set_time_limit(0);
		//$start_time = time();ini time

		$reaction_id = $this->request->variable('reaction_id', $this->reaction_type_id);

		if (empty($reaction_id))
		{
			trigger_error('REACTION_TYPE_ID_EMPTY' . adm_back_link($this->u_action), E_USER_WARNING);
		}

		$batch_size = $this->config['reactions_resync_batch'];
        $start_count = $this->request->variable('start_count', 0);

		$count = $this->type_operator->reation_type_count($reaction_id);
		$type_data = $this->type_operator->obtain_reaction_type($reaction_id);

		$sql = 'SELECT *
			FROM ' . $this->reactions_table . '
			WHERE reaction_type_id = ' . (int) $reaction_id . "
				AND reaction_file_name <> '" . $this->db->sql_escape($type_data['reaction_file_name']) . "'";
		$result = $this->db->sql_query_limit($sql, $batch_size);

		$reaction_ids = $post_ids = $json_data = [];
		if ($row = $this->db->sql_fetchrow($result))
		{
			do
			{
				$reaction_ids[] = (int) $row['reaction_id'];
				$post_ids[] = (int) $row['post_id'];
			}
			while ($row = $this->db->sql_fetchrow($result));

			$this->db->sql_transaction('begin');

			if(count($reaction_ids))
			{
				$sql = 'SELECT post_id, post_reaction_data
					FROM ' . POSTS_TABLE . '
					WHERE ' . $this->db->sql_in_set('post_id', array_unique($post_ids));
				$result = $this->db->sql_query($sql);

				$post_data = [];
				while ($row = $this->db->sql_fetchrow($result))
				{
					$post_data[(int) $row['post_id']] = $row;
				}
				$this->db->sql_freeresult($result);

				if (!empty($post_data))
				{
					foreach ($post_data as $data)
					{
						$json_data = json_decode($data['post_reaction_data']);

						if (!empty($json_data))
						{
							foreach ($json_data as $key => $value)
							{
								if (empty($value))
								{
									continue;
								}
								if ($value->id == $reaction_id)
								{
									$value->src = strval($type_data['reaction_file_name']);
								}
							}
						}

						$new_post_data = $this->type_operator->remove_duplicate_encode($json_data);
						//need to work out how to do this with out foreach
						//array_combine
						$sql = 'UPDATE ' . POSTS_TABLE . "
							SET post_reaction_data = '" . $this->db->sql_escape($new_post_data) . "'
							WHERE post_id = " . (int) $data['post_id'];
						$this->db->sql_query($sql);
					}
					unset($post_data, $json_data);
				}
			}

			$sql = 'UPDATE ' . $this->reactions_table . "
				SET reaction_file_name = '" . $this->db->sql_escape($type_data['reaction_file_name']) . "'
				WHERE " . $this->db->sql_in_set('reaction_id', $reaction_ids);
			$this->db->sql_query($sql);
			$affected = $this->db->sql_affectedrows();

			$this->db->sql_transaction('commit');

			//convert to ajax
			if (!empty($affected))
			{
				$refresh_time = isset($this->config['reactions_resync_time']) ? $this->config['reactions_resync_time'] : (int) 1;
				meta_refresh($refresh_time, $this->u_action . "&amp;action=resync_refresh&amp;reaction_id=$reaction_id&amp;start_count=" . ($start_count + $affected));
			}

			$this->template->assign_vars([
				'NEW_IMG'	=> $this->type_operator->get_reaction_file($type_data['reaction_file_name']),
				'OLD_IMG'	=> $this->type_operator->get_reaction_file($this->config['reactions_old_file']),
				'START'     => !$start_count ? $this->language->lang('ACP_RESYNCING_REACTION') : $this->language->lang('ACP_REACTIONS_RESYNCING', $start_count, $count),
				'SYNC'		=> true,
				'S_REACTIONS_STYLESHEET'	=> true,
			]);

			return $this;
		}
		$this->db->sql_freeresult($result);

		$this->template->assign_vars([
			'DONE'		=> $this->language->lang('ACP_REACTIONS_RESYNC_DONE', $count),
			'NEW_IMG'	=> $this->type_operator->get_reaction_file($type_data['reaction_file_name']),
			'OLD_IMG'	=> $this->type_operator->get_reaction_file($this->config['reactions_old_file']),
			'SYNC'		=> true,
			'S_REACTIONS_STYLESHEET'	=> true,
			'U_BACK'	=> $this->u_action,
		]);

		$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_ACP_REACTION_EDITED', false, [$type_data['reaction_type_title']]);
		$this->type_operator->delete_reaction_types_cache();

		return  $this;
	}

	public function move_up_down()
	{
		if (!check_link_hash($this->request->variable('hash', ''), 'acp_reactions') || !$this->reaction_type_id)
		{
			trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
		} 

		$sql = 'SELECT reaction_type_order_id as current_order
			FROM ' . $this->reaction_types_table . '
			WHERE reaction_type_id = ' . (int) $this->reaction_type_id;
		$result = $this->db->sql_query($sql);
		$current_order = (int) $this->db->sql_fetchfield('current_order');
		$this->db->sql_freeresult($result);

		if ($current_order == 0 && $this->action == 'move_up')
		{
			return;
		}

		$switch_order_id = ($this->action == 'move_down') ? $current_order + 1 : $current_order - 1;

		$sql = 'UPDATE ' . $this->reaction_types_table . '
			SET reaction_type_order_id = ' . (int) $current_order . '
			WHERE reaction_type_order_id = ' . (int) $switch_order_id . '
				AND reaction_type_id <> ' . (int) $this->reaction_type_id;
		$this->db->sql_query($sql);
		
		$move_executed = (bool) $this->db->sql_affectedrows();//

		if ($move_executed)
		{
			$sql = 'UPDATE ' . $this->reaction_types_table . '
				SET reaction_type_order_id = ' . (int) $switch_order_id . '
				WHERE reaction_type_order_id = ' . (int) $current_order . '
					AND reaction_type_id = ' . (int)  $this->reaction_type_id;
			$this->db->sql_query($sql);
			
			$this->type_operator->delete_reaction_types_cache();
		}

		if ($this->request->is_ajax())
		{
			$json_response = new \phpbb\json_response;
			$json_response->send(['success' => $move_executed]);
		}

		return $this;
	}
	
	public function activate_deactivate()
	{			
		if (!check_link_hash($this->request->variable('hash', ''), 'acp_reactions') || !$this->reaction_type_id)
		{
			trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
		}
		
		$activate_deactivate = ($this->action == 'activate') ? 1 : 0;//
		
		$sql = 'UPDATE ' . $this->reaction_types_table . '
			SET reaction_type_enable = ' . $activate_deactivate . '
			WHERE reaction_type_id = ' . (int) $this->reaction_type_id;
		$this->db->sql_query($sql);

		$this->type_operator->delete_reaction_types_cache();
		
		if ($this->request->is_ajax())
		{
			$json_response = new \phpbb\json_response;
			return $json_response->send(['text' => ($this->action == 'activate') ? $this->language->lang('ENABLED') : $this->language->lang('DISABLED')]);
		}
	}

	public function sort_reaction_order()
	{
		$sql = 'SELECT reaction_type_id AS order_id, reaction_type_order_id AS fields_order
			FROM ' .  $this->reaction_types_table . '
			ORDER BY reaction_type_order_id';
		$result = $this->db->sql_query($sql);

		if ($row = $this->db->sql_fetchrow($result))
		{
			$order = (int) 0;
			do
			{
				++$order;
				if ($row['fields_order'] != $order)
				{
					$this->db->sql_query('UPDATE ' . $this->reaction_types_table . '
						SET reaction_type_order_id = ' . $order . '
						WHERE reaction_type_id = ' . (int) $row['order_id']);
				}
			}
			while ($row = $this->db->sql_fetchrow($result));
		}
		$this->db->sql_freeresult($result);

		$this->type_operator->delete_reaction_types_cache();

		return (bool) $this->db->sql_affectedrows();
	}

	public function activate_deactivate_all()
	{
		if (!check_link_hash($this->request->variable('hash', ''), 'acp_activate_all'))
		{
			trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
		}

		$activate_deactivate = ($this->action == 'activate_all') ? 1 : 0;//magic number

		$sql = 'UPDATE ' . $this->reaction_types_table . '
			SET reaction_type_enable = ' . $activate_deactivate;
		$this->db->sql_query($sql);

		$this->type_operator->delete_reaction_types_cache();

		if ($this->request->is_ajax())
		{
			$json_response = new \phpbb\json_response;
			$json_response->send([
				'text' 				=> ($this->action == 'activate_all') ? $this->language->lang('ACP_REACTIONS_ENABLED_ALL') : $this->language->lang('ACP_REACTIONS_DISABLE_ALL'),
				'td_text' 			=> ($this->action == 'activate_all') ? $this->language->lang('ENABLED') : $this->language->lang('DISABLED'),
			]);
		}
	}

	public function acp_reactions_main()
	{
		$query_limit = isset($this->config['reactions_per_page']) ? $this->config['reactions_per_page'] : (int) 10;
		$start = $this->request->variable('start', 0);

		$this->type_operator->obtain_top_reaction_types('admin', $this->u_action, $query_limit, $start);

		$reaction_types_total = $this->db->get_row_count($this->reaction_types_table);
		$reactions_total = $this->db->get_row_count($this->reactions_table);

		$this->pagination->generate_template_pagination($this->u_action, 'pagination', 'start', $reaction_types_total, $query_limit, $start);

		$count_all_enabled = $this->type_operator->reation_type_count_d();//
		$active_lang = !empty($count_all_enabled) ? $this->language->lang('ACP_REACTIONS_ENABLED_ALL') : $this->language->lang('ACP_REACTIONS_DISABLE_ALL');
		$active_value = !empty($count_all_enabled) ? 'activate_all' : 'deactivate_all';
//a-z
		$this->type_operator->tpr_common_vars([
			'REACTIONS_COUNT'       	=> $reaction_types_total,
			'REACTIONS_TOTAL'			=> $reactions_total,
			'REACTIONS_VERSION'			=> isset($this->config['reactions_version']) ? $this->config['reactions_version'] : '',
			'U_ADD'						=> $this->u_action . '&amp;action=add',
			'U_ACTION'					=> $this->u_action,
			//enable/disable all
			'U_ACTIVATE_DEACTIVATE'		=> $this->u_action . '&amp;action=' . $active_value . '&amp;hash=' . generate_link_hash('acp_activate_all'),
			'L_ACTIVATE_DEACTIVATE'		=> $active_lang,
			'U_SYNC'					=> $this->u_action . '&amp;action=resync_refresh',//for 0.9.0
			'S_REACTIONS_STYLESHEET'	=> true,
		]);
	}
}
