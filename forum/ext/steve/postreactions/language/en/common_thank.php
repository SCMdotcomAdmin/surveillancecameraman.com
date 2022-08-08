<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 * “ ”
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
	'UCP_THANKS_TITLE'				=> 'Thanks',
	'UCP_REACTIONS_SETTING'			=> 'Settings',
	'UCP_REACTIONS_TITLE'			=> 'Topic/Post Thanks',
	'REACTIONS'						=> 'Thanks',
	'REACTIONS_TITLE'				=> 'Thanks',
	'REACTIONS_TITLES'				=> 'Thanks &bull; page %d',
	//
//Actions
	'ENABLE_POST_REACTIONS'			=> 'Enable Thanks to this post',
	'ENABLE_TOPIC_REACTIONS'		=> 'Enable Thanks in this topic',
	'EXPLAIN_REACTIONS_POSTING'		=> 'Here you can select options for topic and post Thanks',
	
	'LOG_ACP_REACTION_ADDED'		=> '<strong>Added new topic/post Reactions %1$s</strong>',
	'LOG_ACP_REACTION_EDITED'		=> '<strong>Edited topic/post Reaction %1$s',
	'LOG_ACP_REACTION_DELETED'		=> '<strong>Deleted topic/post Reaction</strong>',

	'ADD_REACTION'					=> 'React to post',
	'DELETE_REACTION'				=> 'Delete Reactions',
	'REACTED'						=> 'Reacted',
	'REACTION_ADDED'				=> 'Reaction added',
	'REACTION_DELETED'				=> 'Reaction deleted',
	'REACTION_DUPLICATE'			=> 'You have already Thanked this post',
	'REACTIONS_LIST_VIEW'			=> 'View All',		
	'REACTION_NOTIFICATION'			=> '<strong>New Reaction</strong> <img src="%1$s" class="reaction-notification" alt="%2$s" /> from: %3$s In post:<br /> “%4$s”',
	'REACTION_PERCENT'				=> '%',
	'REACTION_TYPES'				=> 'Reaction Types',
	'REACTION_TYPE_DUPLICATE'		=> 'Reaction duplicate',
	'REACTION_UPDATED'				=> 'Reaction updated',
	'RESYNC_REACTIONS'				=> 'Re-sync Thanks',
	//'SELECT_REACTION_TYPES'			=> 'Select Reactions users can’t use to react to your posts',
	'UPDATE_REACTION'				=> 'Update Reaction',

//Errors
	'NOT_AUTHORISED_REACTIONS'			=> 'You are not authorised to view topic/post Reactions.',
	'NOTIFICATION_TYPE_STEVE_REACTION' 	=> 'Someone Thanks to your topic/post',
	'REACTIONS_DISABLED'				=> 'This Thanks page is currently disabled',
	'REACTIONS_DISABLED_USER'			=> 'This topic/post Reaction can not be displayed as the user may have disabled reactions or no longer has permissions.',
	'REACTIONS_NOT_FOUND'				=> 'An <strong>Error</strong> has occurred',//?
	'REACTION_ERROR'					=> 'An <strong>Error</strong> has occurred please refresh the page and try again',
	'RESYNC_DISABLED'					=> 'Re-syncing Thanks is currently disabled',

	//quick reply.
	'TOO_FEW_CHARS'					=> 'Your message contains too few characters.',
/* 	
	'USER_REACTION'	=> array(
		1 => 'Reaction',
		2 => 'Reactions',
	),
*/	
	'REACTIONS_GIVEN'				=> 'Given Thanks',
	'REACTIONS_RECIEVED'			=> 'Received Thanks',
	'HR_RECENT_REACTIONS'			=> 'Recent Reactions',
	'RECENT_REACTIONS'				=> 'Showing %d Reactions of %2d',
	'REACTION_COUNT_TOTAL'			=> 'Total post Reactions',
	'REACTIONS_TOTAL'				=> 'Total Reactions',
	
	'USER_REACTION'					=> 'Reaction %d',
	'USER_REACTIONS'				=> 'Thanks %d',
	'VIEW_REACTIONS'				=> 'View Thanks',
	'VIEWING_REACTIONS'				=> 'Viewing Thanks page',
	// 1 there,
	'WELCOME_REACTIONS_PAGE'		=> 'Welcome %1$s, <br />  &nbsp  &nbsp  &nbsp  &nbsp  A total of <strong>%2$s</strong> registered users have received Thanks to their posts, you can click on the <strong>“Image”</strong> to view the received Thank list.',

//Thanks / like
	'REACTIONS_THANK'				=> 'Thank',
	'REACTIONS_THANKOU'				=> 'Thank You',
	'REACTIONS_NO_THANKS'			=> 'Remove',
	'REACTIONS_NO_THANKOU'			=> 'Remove',
	//'REACTIONS_LIKE'				=> 'Like this Post',
	//'REACTIONS_UN_LIKE'				=> 'Remove Like',

//pre populated reactions
	'REACTION_CRY'					=> 'Cry',
	'REACTION_DISLIKE'				=> 'Dislike',
	'REACTION_FUNNY'				=> 'Funny',
	'REACTION_HAPPY'				=> 'Happy',
	'REACTION_LIKE'					=> 'Like',
	'REACTION_LOVE'					=> 'Love',
	'REACTION_MAD'					=> 'Mad',
	'REACTION_NEUTRAL'				=> 'Neutral',
	'REACTION_SAD'					=> 'Sad',
	'REACTION_SURPRISED'			=> 'Surprised',
	'REACTION_UNHAPPY'				=> 'Unhappy',
]);
