<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace steve\postreactions\reaction;

class reaction_types //implements types_interface but back at 0.9.0
{
	protected $auth;
	protected $cache;
	protected $config;
	protected $db;
	protected $helper;
    protected $language;
	protected $template;
	protected $path_helper;

	protected $reactions_table;
	protected $reaction_types_table;

	const TP_CACHE_TIME = 86400;
	const TP_IMAGE_LENGH = 255;

	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\cache\driver\driver_interface $cache,
		\phpbb\config\config $config,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\controller\helper $helper,
		\phpbb\language\language $language,
		\phpbb\template\template $template,
		\phpbb\path_helper $path_helper,

		$reactions_table,
		$reaction_types_table)
	{
		$this->auth = $auth;
		$this->cache = $cache;
		$this->config = $config;
		$this->db = $db;
		$this->helper = $helper;
		$this->language = $language;
		$this->template = $template;
		$this->path_helper = $path_helper;

		$this->reactions_table = $reactions_table;
		$this->reaction_types_table = $reaction_types_table;

		$this->cache_time = isset($this->config['reaction_sql_cache']) ? (int) $this->config['reaction_sql_cache'] : self::TP_CACHE_TIME;
	}

	public function obtain_reaction_types($module_controller = false)
	{
		$reaction_types = [];
		$reaction_types = $this->cache->get('_reaction_types');

		if ($reaction_types === false)
		{
			//$sql_where = ($module_controller) ? "" : " WHERE reaction_type_enable = 1";

			$sql = "SELECT *
				FROM " . $this->reaction_types_table . "
				WHERE reaction_type_enable = 1
					ORDER BY reaction_type_order_id ASC";
			 $result = empty($module_controller) ? $this->db->sql_query($sql) : $this->db->sql_query_limit($sql, (int) $query_limit, $start);

			while ($row = $this->db->sql_fetchrow($result))
			{
				if (empty($row))
				{
					continue;
				}
				$reaction_types[] = $row;
			}
			$this->db->sql_freeresult($result);

			$this->cache->put('_reaction_types', $reaction_types, $this->cache_time);
		}

		return (array) $reaction_types;
	}

	public function obtain_top_reaction_types($switch, $u_action, $query_limit, $start)
	{
		$sql_where = $switch == 'admin' ? "" : " WHERE reaction_type_enable = 1";

		$sql = 'SELECT *
			FROM ' . $this->reaction_types_table . "
			$sql_where
				ORDER BY reaction_type_order_id ASC";
		$result = $switch != 'admin' ? $this->db->sql_query($sql) : $this->db->sql_query_limit($sql, (int) $query_limit, $start);

		$reaction_types = $reaction_type_ids = [];
		$i = 0;
		while ($row = $this->db->sql_fetchrow($result))
		{
			if (empty($row))
			{
				continue;
			}

			$reaction_types[$i] = (array) $row;
			$reaction_type_ids[$i] = (int) $row['reaction_type_id'];
			$i++;
		}
		$this->db->sql_freeresult($result);

		if (count($reaction_type_ids))
		{
			$sql = 'SELECT reaction_type_id
				FROM ' . $this->reactions_table . "
				WHERE " . $this->db->sql_in_set('reaction_type_id', array_unique($reaction_type_ids));
			$result = $this->db->sql_query($sql);

			$count_reaction_types = [];
			while ($rows = $this->db->sql_fetchrow($result))
			{
				if (empty($rows))
				{
					continue;
				}
				$count_reaction_types[(int) $rows['reaction_type_id']][] = (array) $rows;
			}
			$this->db->sql_freeresult($result);
		}

		$reactions_total = $this->db->get_row_count($this->reactions_table);
		//array sort
		if (!empty($reaction_types))
		{
			for ($i = 0, $end = count($reaction_types); $i < $end; ++$i)
			{
				if (!isset($reaction_types[$i]))
				{
					continue;
				}

				$row = $reaction_types[$i];
				$reaction_type_ids = $row['reaction_type_id'];
				$type_count = $percentage = (int) 0;
//bug in thaaaaannnnnks
				if (!empty($count_reaction_types[$reaction_type_ids]))
				{
					$type_count = count($count_reaction_types[$reaction_type_ids]);

					$percent = $type_count / $reactions_total;
					$percentage = number_format($percent * 100, 1) . $this->language->lang('REACTION_PERCENT');
				}

				$vars = [];
				switch($switch)
				{
					case 'page':
						$vars = [
							'COUNT' 		=> $type_count,
							'IMAGE_SRC'		=> $this->get_reaction_file($row['reaction_file_name']),
							'PERCENT'		=> $percentage,
							'TITLE'			=> censor_text($row['reaction_type_title']),

							//'BG_COLOR'		=> isset($row['reaction_type_bg_color']) ? $row['reaction_type_bg_color'] : '',
						];
					break;

					case 'admin':
						$active_lang = (!$row['reaction_type_enable']) ? $this->language->lang('DISABLED') : $this->language->lang('ENABLED');
						$active_value = (!$row['reaction_type_enable']) ? 'activate' : 'deactivate';

						$vars = [
							'COUNT' 				=> $type_count,
							'IMAGE_SRC'				=> $this->reactions_image_path() . $row['reaction_file_name'],
							'PERCENT'				=> $percentage,
							'REACTION_HEIGHT'		=> $row['reaction_type_height'],
							'REACTION_WIDTH'		=> $row['reaction_type_width'],
							'TITLE'					=> $row['reaction_type_title'],

							'L_ACTIVATE_DEACTIVATE'	=> $active_lang,
							'U_ACTIVATE_DEACTIVATE'	=> $u_action . '&amp;action=' . $active_value . '&amp;reaction_type_id=' . $row['reaction_type_id'] . '&amp;hash=' . generate_link_hash('acp_reactions'),
							'U_DELETE'				=> $u_action . '&amp;action=delete_data&amp;reaction_type_id=' . $row['reaction_type_id'] . '&amp;hash=' . generate_link_hash('acp_reactions'),
							'U_EDIT'				=> $u_action . '&amp;action=edit&amp;reaction_type_id=' . $row['reaction_type_id'],
							'U_MOVE_UP'				=> $u_action . '&amp;action=move_up&amp;reaction_type_id=' . $row['reaction_type_id'] . '&amp;hash=' . generate_link_hash('acp_reactions'),
							'U_MOVE_DOWN'			=> $u_action . '&amp;action=move_down&amp;reaction_type_id=' . $row['reaction_type_id'] . '&amp;hash=' . generate_link_hash('acp_reactions'),

							//'BG_COLOR'		=> isset($row['reaction_type_bg_color']) ? $row['reaction_type_bg_color'] : '',for stars
						];
					break;
					//user
					default:
						throw new \phpbb\exception\http_exception(404, 'REACTIONS_DISABLED');
						//add log
					break;
				}

				$this->template->assign_block_vars('reaction_types', $vars);
			}
			unset($reaction_types, $count_reaction_types[$reaction_type_ids]);
		}

		return $this;
	}

	public function obtain_reaction_type($type_id)
	{
		if (empty($type_id))
		{
			return false;
		}

		$sql = 'SELECT *
			FROM ' . $this->reaction_types_table . '
			WHERE reaction_type_id = ' . (int) $type_id;
		$result = $this->db->sql_query($sql);
		$reaction_type = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		return (array) $reaction_type;
	}

	public function obtain_reaction_type_ids()
	{
		$reaction_type_ids = $this->cache->get('_reaction_type_ids');

		if ($reaction_type_ids === false)
		{
			$sql = 'SELECT reaction_type_id
				FROM ' . $this->reaction_types_table . '
				WHERE reaction_type_enable = 1';
			$result = $this->db->sql_query($sql);
			$reaction_type_ids = $this->db->sql_fetchrowset($result);//fecth row
			$this->db->sql_freeresult($result);

			$this->cache->put('_reaction_type_ids', $reaction_type_ids, $this->cache_time);
		}

		if (empty($reaction_type_ids))
		{
			return false;
		}
		// used for storage in 0.9.0
		return (string) implode(',', array_column($reaction_type_ids, 'reaction_type_id'));
	}

	public function disable_all_thanks()
	{
		$sql = 'UPDATE ' . $this->reaction_types_table . '
			SET reaction_type_enable = 0';
		$this->db->sql_query($sql);

		return (bool) $this->db->sql_affectedrows();
	}

	public function reation_type_count_d()
	{
		$sql = 'SELECT COUNT(reaction_type_id) AS count
			FROM ' . $this->reaction_types_table . '
			WHERE reaction_type_enable = 0';
		$result = $this->db->sql_query($sql);
		$type_count = (int) $this->db->sql_fetchfield('count');
		$this->db->sql_freeresult($result);

		return (int) $type_count;
	}

	public function reation_type_count($type_id)
	{
		$sql = 'SELECT COUNT(reaction_type_id) AS count
			FROM ' . $this->reactions_table . '
			WHERE reaction_type_id = ' . (int) $type_id;
		$result = $this->db->sql_query($sql);
		$type_count = (int) $this->db->sql_fetchfield('count');
		$this->db->sql_freeresult($result);

		return (int) $type_count;
	}

	public function display_reaction_types($reaction_types, $post_id, $user_type_id, $disabled_reactions)
	{
		if (empty($reaction_types))
		{
			return false;
		}

		$type_row = [];

		if (!is_array($disabled_reactions))
		{
			$disabled_reactions = [$disabled_reactions];
		}

		foreach ($reaction_types as $reaction_type)
		{
			if (empty($reaction_type))
			{
				continue;
			}

			$disabled_type = (in_array($reaction_type['reaction_type_id'], $disabled_reactions)) ? true : false;

			$type_row = [
				'CHECKED'			=> $disabled_type,
				'ID'				=> $reaction_type['reaction_type_id'],
				'IMAGE_SRC'			=> isset($reaction_type['reaction_file_name']) ? $this->get_reaction_file($reaction_type['reaction_file_name']) : '',//false
				//'BG_COLOR'			=> isset($reaction_type['reaction_type_bg_color']) ? $reaction_type['reaction_type_bg_color'] : '',
				'TITLE'				=> isset($reaction_type['reaction_type_title']) ? $reaction_type['reaction_type_title'] : '',
				'U_REACTED'			=> $user_type_id == $reaction_type['reaction_type_id'] ? true : false,
			];

			if (!empty($post_id))
			{
				$reaction_add_url = $this->helper->route('steve_postreactions_add_reaction_controller', ['post_id' => $post_id, 'type_id' => $reaction_type['reaction_type_id'], 'hash' => generate_link_hash('add_reaction')]);
				$type_row += [
					'U_REACTED'			=> $user_type_id == $reaction_type['reaction_type_id'] ? true : false,
					'U_REACTION_ADD'	=> $this->auth->acl_get('u_add_reactions') ? $reaction_add_url : false,
				];
			}

		 	$this->template->assign_block_vars(empty($post_id) ? 'reaction_types' : 'postrow.reaction_types', $type_row);
		}
		unset($reaction_types);

		return $this;
	}

	public function disabled_reactions($post_disabled_reaction_ids, $user_disabled_reaction_ids)
	{
		// if this type enabled

		if (empty($post_disabled_reaction_ids) && empty($user_disabled_reaction_ids))
		{
			return false;
		}

		$disabled_reaction_ids = '';
		if ($post_disabled_reaction_ids)
		{
			$disabled_reaction_ids .= $post_disabled_reaction_ids;
		}
		if ($user_disabled_reaction_ids)
		{
			$disabled_reaction_ids .= '|' . $user_disabled_reaction_ids;
		}

		$disabled_reaction_ids = array_map('intval', explode('|', $disabled_reaction_ids));

		//$type_ids = explode(',', $this->obtain_reaction_type_ids());

		if (empty($disabled_reaction_ids))
		{
			return false;
		}

		sort($disabled_reaction_ids);

		return array_unique($disabled_reaction_ids);
	}

	public function remove_duplicate_encode($json_data)
	{
		$json_data = array_map("unserialize", array_unique(array_map("serialize", $json_data)));
		$post_data = array_values($json_data);
		$post_data = json_encode($post_data);

		return $post_data;//(string object)
	}

	public function select_reaction_image($image)
	{
		$imglist = filelist($this->reactions_image_path(), '', $this->image_type_ext());

		if (empty($imglist))
		{
			return false;
		}

		$filename_list = '<option value="">' . $this->language->lang('ACP_SELECT_REACTION_IMAGE') . '</option>' . PHP_EOL;

		foreach ($imglist as $path => $img_ary)
		{
			sort($img_ary);
			foreach ($img_ary as $img)
			{
				$img = $path . $img;
				$selected = ($img == $image) ? ' selected="selected"' : '';
				if (strlen($img) > self::TP_IMAGE_LENGH)
				{
					continue;
				}
				$filename_list .= '<option value="' . htmlspecialchars($img) . '"' . $selected . '>' . $img . '</option>' . PHP_EOL;
			}
		}
		unset($imglist, $img_ary);

		return (string) $filename_list;
	}

	public function image_type_ext()
	{
		return (string) 'gif|jpg|jpeg|png|svg';//
	}

	public function image_type($reaction_file_name)
	{
		return preg_match('/.(' . $this->image_type_ext() . ')/', strtolower($reaction_file_name));
	}

	public function get_reaction_file($reaction_file_name)
	{
		if (!$this->image_type($reaction_file_name) || empty($reaction_file_name))
		{
			return false;
		}

		return $this->reactions_image_path() . $reaction_file_name;
	}

	public function list_url($post_id, $value_id)
	{
		return $this->helper->route('steve_postreactions_view_reactions_controller_pages', ['post_id' => $post_id, 'reaction' => $value_id]);
	}

	public function reactions_image_path()
	{
		return $this->path_helper->get_web_root_path() . $this->config['reactions_image_path'] . DIRECTORY_SEPARATOR;
	}

	public function delete_reaction_types_cache()
	{
		$this->cache->destroy('_reaction_type_ids');
		$this->cache->destroy('_reaction_types');

		return $this;
	}

	public function tpr_common_vars($new_vars = [])
	{
		$template_vars = [
			'REACTIONS_ENABLED'				=> !empty($this->config['reactions_enabled']) ? true : false,
			'REACTION_IMAGE_HEIGHT'			=> isset($this->config['reaction_image_height']) ? $this->config['reaction_image_height'] : (int) 40,
			'REACTION_IMAGE_WIDTH'			=> isset($this->config['reaction_image_width']) ? $this->config['reaction_image_width'] : (int) 40,
			'REACTIONS_ENABLE_BADGE'		=> !empty($this->config['reactions_enable_badge']) ? true : false,
			'REACTIONS_ENABLE_PERCENTAGE'	=> !empty($this->config['reactions_enable_percentage']) ? true : false,
			'REACTIONS_ENABLE_THANKS'		=> !empty($this->config['reactions_enable_thanks_button']) ? true : false,
			'REACTIONS_ENABLE_THANKS_TEXT'	=> !empty($this->config['reactions_enable_thanks_text']) ? true : false,
			'REACTION_URL'					=> $this->reactions_image_path(),
			'REACTION_FORM_TIME'			=> time(),
			'REACTIONS_DROPDOWN_WIDTH'		=> isset($this->config['reactions_dropdown_width']) ? $this->config['reactions_dropdown_width'] : (int) 200,
		];

		$template_vars = array_merge($template_vars, $new_vars);

		return $this->template->assign_vars($template_vars);
	}
}
