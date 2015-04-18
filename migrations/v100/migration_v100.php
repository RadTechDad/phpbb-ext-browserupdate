<?php
/**
 *
 * @package phpBB Extension - Browser Update
 * @author Darrell Dudics (a.k.a HoLyCoW, a.k.a HoLyCoWzOrZ) me@holycowzorz.com
 * @copyright (c) 2015 Darrell Dudics
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace holycow\browserupdate\migrations\v100;

class migration_v100 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['browserupdate_version']);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('browserupdate_version', '1.0.0')),
			array('config.add', array('browserupdate_reminder', 24)),
			array('config.add', array('browserupdate_reminder_closed', 150)),
			array('config.add', array('browserupdate_new_window', true)),

			array('module.add', array(
				'acp',						// module class (acp, mcp, ucp)
				'ACP_CAT_DOT_MODS',			// parent module
				'ACP_BROWSERUPDATE'	// custom category name
			)),

			array('module.add', array(
				'acp',						// module class (acp, mcp, ucp)
				'ACP_BROWSERUPDATE',	// parent module
				array(
					'module_basename'	=> '\holycow\browserupdate\acp\browserupdate_module',	// which module to add
					'modes'				=> array('settings'),									// which module modes to add
				),
			)),
		);
	}

	public function revert_data()
	{
		return array (
			array('config.remove', array('browserupdate_version')),
			array('config.remove', array('browserupdate_reminder')),
			array('config.remove', array('browserupdate_reminder_closed')),
			array('config.remove', array('browserupdate_new_window')),

			array('module.add', array(
				'acp',						// module class (acp, mcp, ucp)
				'ACP_CAT_DOT_MODS',			// parent module
				'ACP_BROWSERUPDATE'			// custom category name
			)),

			array('module.add', array(
				'acp',						// module class (acp, mcp, ucp)
				'ACP_BROWSERUPDATE',		// parent module
				array(
					'module_basename'	=> '\holycow\browserupdate\acp\browserupdate_module',	// which module to add
				),
			)),
		);
	}
}
