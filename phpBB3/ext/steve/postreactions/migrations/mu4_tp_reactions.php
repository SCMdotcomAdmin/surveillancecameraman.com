<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * @license GNU General Public License, version 2 (GPL-2.0)
 * 
 */


namespace steve\postreactions\migrations;

/**
* update migration
*/

class mu4_tp_reactions extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\steve\postreactions\migrations\mu3_tp_reactions',
		];
	}
	
	public function update_data()
	{
		return [
			['config.update', ['reactions_version', '0.8.0-dev']],
			['config.add', ['reactions_resync_batch', 5]],
			['config.add', ['reactions_resync_time', 1]],
			['config.add', ['reactions_old_file', '']],
			['config.remove', ['rec_reactions_limit']],
		];
	}
}
