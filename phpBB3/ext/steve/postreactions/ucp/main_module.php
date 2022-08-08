<?php
/**
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 */

namespace steve\postreactions\ucp;

class main_module
{
	protected $phpbb_container;
	protected $config;

	public $page_title;
	public $tpl_name;
	public $u_action;
	
	function main($id, $mode)
	{
		global $config, $phpbb_container;
		$this->phpbb_container = $phpbb_container;
		
		$this->language = $this->phpbb_container->get('language');
		$enable_thanks = !empty($config['reactions_enable_thanks_button']) ? true : false;
		$this->tpl_name = 'ucp_reactions_body';
		$this->page_title = !$enable_thanks ? $this->language->lang('UCP_REACTIONS_TITLE') :  $this->language->lang('UCP_THANKS_TITLE');

		$ucp_controller = $this->phpbb_container->get('steve.postreactions.ucp_controller')->ucp_reaction_settings($this->u_action);
	}
}
