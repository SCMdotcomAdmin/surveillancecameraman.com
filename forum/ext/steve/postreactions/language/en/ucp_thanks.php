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
	'UCP_THANKS_TITLE'					=> 'Thanks',
	'UCP_REACTIONS_TITLE'				=> 'Topic/Post Thanks',
	'UCP_ENABLE_REACTIONS'				=> 'Enable Topic/Post Thanks',
	'UCP_ENABLE_REACTIONS_EXPLAIN'		=> 'Selecting no: Will remove your ability to Thank posts, users ability to Thank your posts, your Thanks page, counts &amp; notifications',
	'UCP_REACTIONS_DEFAULT_POST_SETTINGS'	=> 'Edit Default Topic/Post Thanks settings',
	'UCP_REACTIONS_SAVED'				=> 'Topic/Post Thanks settings have been saved successfully!',
	'UCP_REACTIONS_SETTING'				=> 'Settings',
	'UCP_REACTIONS_TITLE'				=> 'Topic/Post Thanks',
	'UCP_FOE_REACTIONS_ENABLE'			=> 'Enable Foe Thanks',
	'UCP_FOE_REACTIONS_EXPLAIN'			=> 'Allow users who currently have you on their Foes list to Thank your posts?',
	'UCP_POST_REACTIONS_ENABLE'			=> 'Enable post Thanks by default',
	'UCP_POST_REACTIONS_EXPLAIN'		=> 'Allow users to Thank your posts?',
	'UCP_TOPIC_REACTIONS_ENABLE'		=> 'Enable topic Thanks by default',
	'UCP_TOPIC_REACTIONS_EXPLAIN'		=> 'Allow Thanks in your topics?',
]);
