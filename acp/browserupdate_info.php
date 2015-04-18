<?php
/**
 *
 * @package phpBB Extension - Browser Update
 * @author Darrell Dudics (a.k.a HoLyCoW, a.k.a HoLyCoWzOrZ) me@holycowzorz.com
 * @copyright (c) 2015 Darrell Dudics
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace holycow\browserupdate\acp;

class browserupdate_info
{
	function module()
	{
		return array(
			'filename'	=> '\holycow\browserupdate\acp\browserupdate_module',
			'title'		=> 'ACP_BROWSERUPDATE',
			'modes'		=> array(
				'settings'	=> array(
					'title' => 'ACP_BROWSERUPDATE_SETTINGS',
					'auth' => 'ext_holycow/browserupdate && acl_a_board',
					'cat' => array('')
				),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
