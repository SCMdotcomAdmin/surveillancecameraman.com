<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.2.0 Forum Software package.
 * @author Steve <http://www.steven-clark.online/phpBB3-Extensions/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 * 
 */


namespace steve\postreactions\migrations;

use \phpbb\db\migration\container_aware_migration;

/**
* update migration
*/
class mu1_tp_reactions extends container_aware_migration
{
	static public function depends_on()
	{
		return array(
			'\steve\postreactions\migrations\m1_tp_reactions',
		);
	}
	
	public function update_data()
	{
		return array(
			array('config.update', array('reactions_version', '0.5.5-dev')),
			array('config.add', array('reactions_resync_enable', true)),
			array('permission.add', array('u_resync_reactions')),
		);
	}
	
	public function update_schema()
	{
		return array(
			'change_columns'    => array(
				$this->table_prefix . 'posts'	=> array(
					'post_reaction_data'	=> array('TEXT', null),
				),
			),
		);
	}
}
