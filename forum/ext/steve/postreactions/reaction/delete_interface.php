<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace steve\postreactions\reaction;

interface delete_interface
{
	public function update_reaction_counts($user_id);

	public function delete_post_reactions($in_set = '', $ids);
	
	public function check_array_ids($in_set = '', $ids);
}
