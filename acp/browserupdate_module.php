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

class browserupdate_module
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\log\log */
	protected $log;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var ContainerInterface */
	protected $phpbb_container;

	/** @var string */
	protected $phpbb_root_path;

	/** @var string */
	protected $php_ext;

	/** @var string */
	public $u_action;

	function main($id, $mode)
	{
		global $config, $db, $request, $template, $user, $phpbb_root_path, $phpEx, $phpbb_container;

		$this->config = $config;
		$this->config_text = $phpbb_container->get('config_text');
		$this->db = $db;
		$this->log = $phpbb_container->get('log');
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $phpEx;

		// Add the board announcements ACP lang file
		$this->user->add_lang_ext('holycow/browserupdate', 'browserupdate_acp');

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'browserupdate';

		// Set the page title for our ACP page
		$this->page_title = $this->user->lang('ACP_BROWSERUPDATE_SETTINGS');

		// Define the name of the form for use as a form key
		$form_name = 'holycow/browserupdate';
		add_form_key($form_name);

		if ($this->request->is_set_post('submit'))
		{
			// Test if form key is valid
			if (!check_form_key($form_name))
			{
				trigger_error($this->user->lang('FORM_INVALID'));
			}

			$browserupdate_reminder = $this->request->variable('browserupdate_reminder', '');
			$browserupdate_reminder_closed = $this->request->variable('browserupdate_reminder_closed', '');
			$browserupdate_new_window = $this->request->variable('browserupdate_new_window', 1);

			$this->config->set('browserupdate_reminder', $browserupdate_reminder);
			$this->config->set('browserupdate_reminder_closed', $browserupdate_reminder_closed);
			$this->config->set('browserupdate_new_window', $browserupdate_new_window);

			// Log the updated settings
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'ACP_BROWSERUPDATE_UPDATE_LOG');

			trigger_error($this->user->lang('BROWSERUPDATE_SETTINGS_SAVED') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'BROWSERUPDATE_REMINDER'			=> $this->config['browserupdate_reminder'],
			'BROWSERUPDATE_REMINDER_CLOSED'		=> $this->config['browserupdate_reminder_closed'],
			'BROWSERUPDATE_NEW_WINDOW'			=> (isset($browserupdate_new_window)) ? $browserupdate_new_window : $this->config['browserupdate_new_window'],

			'U_ACTION'	=> $this->u_action
		));
	}
}
