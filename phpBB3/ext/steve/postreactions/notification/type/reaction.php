<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace steve\postreactions\notification\type;

class reaction extends \phpbb\notification\type\base
{
	public function get_type()
	{
		return 'steve.postreactions.notification.type.reaction';
	}
	
	//Thanks rxu = https://www.phpbb.com/community/viewtopic.php?f=461&t=2259916&p=13718356&hilit=notification_option#p13718356
	public static $notification_option = [
		'lang'	=> 'NOTIFICATION_TYPE_STEVE_REACTION',
		'group'	=> 'NOTIFICATION_GROUP_POSTING',
	];
	
	protected $helper;
	protected $user_loader;
	protected $config;
		
	public function set_config(\phpbb\config\config $config)
	{
		$this->config = $config;
	}
	
	public function set_user_loader(\phpbb\user_loader $user_loader)
	{
		$this->user_loader = $user_loader;
	}

	public function set_controller_helper(\phpbb\controller\helper $helper)
	{
		$this->helper = $helper;
	}

	public function is_available()
	{
		//$this->auth->acl_get('u_disable_reactions')
		return (bool) $this->config['reactions_enabled'];
	}
	
	public static function get_item_id($data)
	{
		return (int) $data['reaction_id'];
	}

	public static function get_item_parent_id($data)
	{
		return (int) $data['post_id'];
	}

	public function find_users_for_notification($data, $options = [])
	{
		$options = array_merge([
			'ignore_users'		=> [],
		], $options);
		
		$users = [$data['poster_id']];

		if (empty($users))
		{
			return [];
		}

		return $this->check_user_notification_options($users, $options);
	}

	public function users_to_query()
	{
		return [$this->get_data('user_id')];
	}

 	public function get_avatar()
	{
		return $this->user_loader->get_avatar($this->get_data('user_id'), true, true);
	}

	public function get_title()
	{
		$username = $this->user_loader->get_username($this->get_data('user_id'), 'no_profile');
		$reaction = generate_board_url() . '/' . $this->config['reactions_image_path'] . '/' . $this->get_data('reaction_file_name');
		$alt = $this->get_data('reaction_type_title');
		$title = sprintf($this->language->lang('REACTION_NOTIFICATION', $reaction, $alt, $username, $this->get_data('post_subject')));
		
		return $title;
	}

	public function get_url()
	{
		$post_id = $this->get_data('post_id');
		$post_url = append_sid("{$this->phpbb_root_path}viewtopic.{$this->php_ext}?p=$post_id#p$post_id");
		
		return $post_url;
	}

	public function get_email_template()
	{
		return '@steve_postreactions/reaction_added';
	}

	public function get_email_template_variables()
	{
		$post_id = $this->get_data('post_id');
		$post_url = generate_board_url() . '/' . "viewtopic.{$this->php_ext}?p=$post_id#p$post_id";

		$user_data = $this->user_loader->get_username($this->get_data('user_id'), 'username');
		
		return [
			'POST_SUBJECT'		=> htmlspecialchars_decode(censor_text($this->get_data('post_subject'))),
			'REACTION'			=> htmlspecialchars_decode($this->get_data('reaction_type_title')),
			'REACTION_USER'		=> htmlspecialchars_decode($user_data),		
			'U_VIEW_POST'		=> $post_url,
		];
	}

	public function create_insert_array($data, $pre_create_data = [])
	{
		$this->set_data('post_id', $data['post_id']);
		$this->set_data('poster_id', $data['poster_id']);		
		$this->set_data('post_subject', $data['post_subject']);
		$this->set_data('reaction_file_name', $data['reaction_file_name']);
		$this->set_data('reaction_type_title', $data['reaction_type_title']);
		$this->set_data('user_id', $data['user_id']);

		parent::create_insert_array($data, $pre_create_data);
	}
}
