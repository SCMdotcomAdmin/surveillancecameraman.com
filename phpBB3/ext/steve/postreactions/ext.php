<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace steve\postreactions;

class ext extends \phpbb\extension\base
{
	const PHPBB_MIN_VERSION = '3.3.5';

	public function is_enableable()
	{
		$config = $this->container->get('config');
		
		return phpbb_version_compare($config['version'], self::PHPBB_MIN_VERSION, '>=');
	}

	public function enable_step($old_state)
	{
		switch ($old_state)
		{
			case '':
				$phpbb_notifications = $this->container->get('notification_manager');
				$phpbb_notifications->enable_notifications('steve.postreactions.notification.type.reaction');
				
				return 'notification';
			break;

			default:
				return parent::enable_step($old_state);
			break;
		}
	}

	public function disable_step($old_state)
	{
		switch ($old_state)
		{
			case '':
				$phpbb_notifications = $this->container->get('notification_manager');
				$phpbb_notifications->disable_notifications('steve.postreactions.notification.type.reaction');
				
				return 'notification';
			break;

			default:
				return parent::disable_step($old_state);
			break;
		}
	}

	public function purge_step($old_state)
	{
		switch ($old_state)
		{
			case '':
				$phpbb_notifications = $this->container->get('notification_manager');
				$phpbb_notifications->purge_notifications('steve.postreactions.notification.type.reaction');
				
				return 'notification';
			break;

			default:
				return parent::purge_step($old_state);
			break;
		}
	}
}
