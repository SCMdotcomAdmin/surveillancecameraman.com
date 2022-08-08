<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
 
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'SELECT_REACTION_TYPES'				=> 'Select Reactions users can’t use to react to your posts',
	'UCP_ENABLE_REACTIONS'				=> 'Enable Topic/Post Reactions',
	'UCP_ENABLE_REACTIONS_EXPLAIN'		=> 'Selecting no: Will remove your ability to React to posts, users ability to react to your posts, your Reactions page, counts &amp; notifications',
	'UCP_REACTIONS_DEFAULT_POST_SETTINGS'		=> 'Edit Default Topic/Post Reactions settings',
	'UCP_REACTIONS_SAVED'				=> 'Topic/Post Reactions settings have been saved successfully!',
	'UCP_REACTIONS_SETTING'				=> 'Settings',
	'UCP_REACTIONS_TITLE'				=> 'Topic/Post Reactions',		
	'UCP_FOE_REACTIONS_ENABLE'			=> 'Enable Foe reactions',
	'UCP_FOE_REACTIONS_EXPLAIN'			=> 'Allow users who currently have you on their Foes list to react to your posts?',
	'UCP_POST_REACTIONS_ENABLE'			=> 'Enable post Reactions by default',
	'UCP_POST_REACTIONS_EXPLAIN'		=> 'Allow users to react to your posts?',
	'UCP_TOPIC_REACTIONS_ENABLE'		=> 'Enable topic Reactions by default',
	'UCP_TOPIC_REACTIONS_EXPLAIN'		=> 'Allow Reactions in your topics?',
]);
