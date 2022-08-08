<?php
/**
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 */

namespace steve\postreactions\acp;

class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\steve\postreactions\acp\main_module',
			'title'		=> 'ACP_REACTIONS_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'		=> 'ACP_REACTIONS_SETTINGS',
					'auth'		=> 'ext_steve/postreactions && acl_a_board',
					'cat'		=> ['ACP_REACTIONS_TITLE']
				],
				'reactions'	=> [
					'title'	 	=> 'ACP_REACTION_TYPES',
					'auth' 		=> 'ext_steve/postreactions && acl_a_board',
					'cat' 		=> ['ACP_REACTIONS_TITLE']
				],
			],
		];
	}
}
