<?php
/**
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 */


namespace steve\postreactions\migrations;

class mu5_tp_reactions extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\steve\postreactions\migrations\mu4_tp_reactions',
		];
	}
	
	public function update_data()
	{
		return [
			['config.update', ['reactions_version', '0.9.0-dev']],
			['config.add', ['reactions_total', 0]],
			['config.add', ['reactions_enable_toggle_fade', false]],
			['config.add', ['reactions_enable_percentage', false]],
			['config.add', ['reactions_enable_badge', false]],
			['config.add', ['reactions_enable_count', false]],
			['config.add', ['reactions_enable_thanks_button', false]],
			['config.add', ['reactions_enable_thanks_text', false]],
			['config.add', ['reactions_author_react', false]],
			['config.add', ['reactions_dropdown_width', 200]],
			['config.remove', ['post_author_react']],
		];
	}

	public function update_schema()
	{
		return [
			'add_columns'    => [
				$this->table_prefix . 'reaction_types'	=> [
					'reaction_type_bg_color'	=> ['INT:6', 0],
					'reaction_type_height'		=> ['INT:3', $this->config['reaction_image_height']],
					'reaction_type_width'		=> ['INT:3', $this->config['reaction_image_height']],
				],
				$this->table_prefix . 'forums'	=> [
					'forum_reaction_type_ids'	=> ['VCHAR:255', ''],
				],
			]
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns'    => [
				$this->table_prefix . 'reaction_types'	=> [
					'reaction_type_bg_color',
					'reaction_type_height',
					'reaction_type_width',
				],
				$this->table_prefix . 'forums'	=> [
					'forum_reaction_type_ids',
				],
			]
		];
	}
}
