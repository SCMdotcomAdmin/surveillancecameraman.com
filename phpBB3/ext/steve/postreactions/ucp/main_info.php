<?php
/**
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 */

namespace steve\postreactions\ucp;

class main_info
{
	function module()
	{
		return [
			'filename'	=> '\steve\postreactions\ucp\reactions_module',
			'title'		=> 'UCP_REACTIONS_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'UCP_REACTIONS_SETTING',
					'auth'	=> 'ext_steve/postreactions && acl_u_manage_reactions_settings',
					'cat'	=> ['UCP_REACTIONS_SETTING']
				],
			],
		];
	}
}
