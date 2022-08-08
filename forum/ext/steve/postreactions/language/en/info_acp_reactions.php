<?php
/**
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * Some characters you may want to copy&paste:
 * ’ » “ ” …
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
//Top
	'ACP_TPR_DONATE'					=> 'Donate',
	'ACP_REACTIONS_SETTINGS'			=> 'Settings',
	'ACP_REACTIONS_VERSION'				=> 'Version: ',
	'ACP_REACTIONS_SETTINGS_EXPLAIN'	=> 'Here you can adjust the general settings for Topic/Post Reactions extension.',
	'ACP_REACTIONS_EXPLAIN'				=> 'Here you can add, edit, delete, enable, disable and re-order Reaction types.',
	'ACP_REACTIONS_TITLE'				=> 'Topic/Post Reactions',

//bool
	'ACP_REACTIONS_ENABLE'				=> 'Enable Topic/Post Reactions',
	'ACP_REACTION_ENABLE_PAGE'			=> 'Enable view Reactions page',
	'ACP_REACTION_ENABLE_PAGES'			=> 'Enable view post Reactions page',
	'ACP_REACTIONS_ENABLE_COUNT'		=> 'Enable total Reaction type count in posts',
	'ACP_REACTION_TYPE_COUNT_ENABLE'	=> 'Enable Reaction type count in posts',
	'ACP_REACTIONS_ENABLE_BADGE'		=> 'Enable badge around type count',
	'ACP_REACTIONS_ENABLE_PERCENTAGE'	=> 'Enable statistics percent in Reactions page',
	'ACP_REACTIONS_POST_AUTHOR_REACT'	=> 'Enable post authors to react to there Posts',
	'ACP_REACTIONS_RESYNC_ENABLE'		=> 'Enable post Reactions re-sync',
	'ACP_REACTIONS_ENABLE_TOGGLE_FADE' 	=> 'Enabled toggle effect',

//thank/like
	'ACP_REACTIONS_ENABLE_THANKS'		=> 'Enable Thank/Like button',
	'ACP_REACTIONS_ENABLE_THANKS_EXP'	=> 'Enabling this will disable all reactions, you have to choose one Reaction type image to enable this feature.',
	'ACP_REACTIONS_ENABLE_THANKS_TEXT'	=> 'Enable Thank/Like text in button',

//input
	'ACP_REACTION_PATH'				=> 'Reactions image storage path(disabled)',
	'ACP_REACTION_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. images/emoji',
	'ACP_REACTION_IMAGE_TYPES_EXT'	=> 'Reaction image extension types(disabled)',
	'ACP_REACTIONS_DIMENSIONS'		=> 'Reaction image dimensions',
	'ACP_REACTIONS_HEIGHT'			=> 'Height',
	'ACP_REACTIONS_WIDTH'			=> 'x Width',
	'ACP_REACTIONS_PER_PAGE'		=> 'Reactions per page',
	'ACP_REACTIONS_DROPDOWN_WIDTH'	=> 'Drop-down menu width',
	'ACP_REACTIONS_CACHE'			=> 'Reactions image cache time',
	'ACP_REACTIONS_CACHE_EXPLAIN'	=> 'Min: <strong>300</strong> Seconds (5 minutes) Max: <strong>86400</strong> Seconds (1 Day)',

//re-sync
	'ACP_REACTIONS_RESYNC_BATCH'			=> 'Amount of posts to re-sync',
	'ACP_REACTIONS_RESYNC_BATCH_EXPLAIN'	=> 'The number of posts to be re-synced per page load when changing the reaction image, reduce the number to prevent a heavy load on the server.',

//th
	'CAT_REACTION_COUNT'			=> 'Count',
	'CAT_REACTION_DELETE'			=> 'Delete',
	'CAT_REACTION_EDIT'				=> 'Edit',
	'CAT_REACTION_ENABLED'			=> 'Status',
	'CAT_REACTION_IMAGE'			=> 'Image',
	'CAT_REACTION_ORDER'			=> 'Order',
	'CAT_REACTION_PERCENTAGE'		=> '%',
	'CAT_REACTION_RESYNC'			=> 'Re-sync',
	'CAT_REACTION_RESYNC_ALL'		=> 'Re-sync All',
	'CAT_REACTION_TITLE'			=> 'Title',
	'CAT_REACTION_URL'				=> 'URL',

//add/edit
	'ACP_REACTION_ENABLE'			=> 'Enable Topic/Post Reaction',
	'ACP_REACTION_IMAGE'			=> 'Topic/Post Reaction image',
	'ACP_REACTION_TITLE'			=> 'Topic/Post Reaction title',
	'ACP_REACTION_TYPE'				=> 'Topic/Post type',
	'ACP_REACTION_TYPES'			=> 'Reaction types',
	'ACP_SELECT_REACTION_IMAGE'		=> 'Select Reaction image',
	'ACP_SELECT_REACTION_IMAGE_ALT' => 'Image preview',

//actions/errors
	'ACP_DELETED_REACTION'				=> 'Deleted Reaction',
	'ACP_DELETING_REACTION'				=> 'Deleting Reaction',

	'ACP_NO_REACTION_IMAGE_SELECTED'	=> 'No image selected for the Topic/Post Reaction.',

	'ACP_REACTION_ADD'					=> 'Add new Topic/Post Reaction',
	'ACP_REACTION_ADDED'				=> 'New Topic/Post Reaction added',

	'ACP_REACTION_CHANGE'				=> 'Changing Reaction to... ',
	'ACP_REACTION_CHANGED'				=> 'Reaction image changed successfully!',
	'ACP_REACTION_CHANGED_TO'			=> 'Changed Reaction to...',
	'ACP_REACTION_CHANGE_WARN'			=> 'Changing the Reaction image will require re-syncing posts, you will be automagically be redirected after confirming. <br /><br /> Please do not close or refresh the page once the re-syncing has started.',
	'ACP_REACTION_CHANGE_WARN_TOP'		=> 'Please do not close or refresh the page',

	'ACP_REACTION_DELETED_CONFIRM'		=> 'Are you sure that you wish to delete the data associated with this Reaction type?',

	'ACP_REACTION_EDIT'					=> 'Edit Topic/Post Reaction',

	'ACP_REACTION_TYPE_COUNT'			=> 'This Reaction is used in %1$s posts',
	'ACP_REACTION_TYPE_ID_EMPTY'		=> 'The requested Reaction type does not exist',

	'ACP_REACTION_PATH_NOT_DIR'			=> 'The image storage path you specified does not appear to be a directory. <br /> %1s',

	'ACP_REACTION_UPDATED'				=> 'Topic/Post Reaction updated',

	'ACP_REACTIONS_CONFIRM_CHANGE'		=> 'Confirm change of reaction image',
	'ACP_REACTIONS_CURRENTLY_DISABLED'	=> 'Topic/Post Reactions is currently disabled.',

	'ACP_REACTIONS_DELETING'			=> 'Deleted... %1$s posts',
	'ACP_REACTIONS_DELETING_DONE'		=> 'Deleting Reaction done ... updated %1$s posts',
	'ACP_REACTIONS_DISABLE_ALL'			=> 'Disable all',

	'ACP_REACTIONS_ENABLED_ALL'			=> 'Enable all',

	'ACP_REACTIONS_RESYNCING'				=> 'Updated... %1$s of %2$s posts',
	'ACP_REACTIONS_RESYNC_DONE'				=> 'Re-syncing done ... updated %1$s posts',
	'ACP_REACTIONS_RESYNC_ENABLE_EXPLAIN'	=> 'If enabled, will re-sync reaction types and count',
	'ACP_REACTIONS_RESYNC_TIME'				=> 'Re-syncing page load time',
	'ACP_REACTIONS_RESYNC_TIME_EXPLAIN'		=> 'Amount of seconds before re-syncing restarts when changing reaction image, this may also help reduce a heavy load on the server.',

	'ACP_REACTIONS_SETTING_SAVED'		=> 'Settings have been saved successfully!',
	'ACP_REACTIONS_SETTING_UPDATED'		=> 'Updated Topic/Post Reactions Settings',

	'ACP_RESYNCING_REACTION'			=> 'Re-syncing Reaction',
]);
