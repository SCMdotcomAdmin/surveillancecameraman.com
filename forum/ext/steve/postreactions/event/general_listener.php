<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 *
 */

namespace steve\postreactions\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class general_listener implements EventSubscriberInterface
{
	protected $auth;
	protected $config;
	protected $helper;
	protected $language;
	protected $template;
	protected $user;
	protected $php_ext;

	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\controller\helper $helper,
		\phpbb\language\language $language,
		\phpbb\template\template $template,
		\phpbb\user $user,
		$php_ext)
	{		
		$this->auth = $auth;
		$this->config = $config;
		$this->helper = $helper;
		$this->language = $language;
		$this->template = $template;
		$this->user = $user;
		$this->php_ext = $php_ext;
		
		$this->user_enable_reactions = (!$this->auth->acl_get('u_disable_reactions', $this->user->data['user_id'])) ? true : ($this->user->data['user_enable_reactions'] ? true  : false);
	}
	
	static public function getSubscribedEvents()
	{
		return [
			'core.user_setup'							=> 'tpr_load_language_on_setup',
			'core.page_header'							=> 'tpr_add_page_header_link',
			'core.page_footer'							=> 'tpr_add_page_footer_link',			
			'core.viewonline_overwrite_location'		=> 'tpr_viewonline_page',
		];
	}
	
	public function tpr_load_language_on_setup($event)
	{
		$enable_thanks = !empty($this->config['reactions_enable_thanks_button']) ? true : false;
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name' => 'steve/postreactions',
			'lang_set' => !$enable_thanks ? 'common' : 'common_thank',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function tpr_add_page_header_link()
	{
		$reactions_enabled = !empty($this->config['reactions_enabled'] && !empty($this->config['reactions_page_enabled'])) ? true : false;

		$this->template->assign_vars([
			'REACTIONS_ENABLE_THANKS'	=> !empty($this->config['reactions_enable_thanks_button']) ? true : false,
			'REACTIONS_ENABLED' => !empty($this->config['reactions_enabled']) ? true : false,
			'U_VIEW_REACTIONS'	=> ($this->auth->acl_get('u_view_reactions_pages') && $reactions_enabled && $this->user_enable_reactions) ? $this->helper->route('steve_postreactions_view_reactions_controller_page') : false,
		]);
	}
	
	public function tpr_add_page_footer_link()
	{
		if (!empty($this->config['reactions_enabled']))
		{
			$this->template->assign_var('REACTION_COPY', $this->language->lang('REACTION_COPY'));
		}
	}
	
	public function tpr_viewonline_page($event)
	{
		if (empty($this->config['reactions_enabled']) && empty($this->config['reactions_page_enabled']) 
			|| !$this->auth->acl_get('u_view_reactions_pages') || !$this->user_enable_reactions)
		{
			return;
		}

		if ($event['on_page'][1] === 'app' && strrpos($event['row']['session_page'], 'app.' . $this->php_ext . '/' . 'reactions') === 0)
		{
			$event['location'] = $this->language->lang('VIEWING_REACTIONS');
			$event['location_url'] = $this->helper->route('steve_postreactions_view_reactions_controller_page');
		}
	}
}
