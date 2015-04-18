<?php
/**
 *
 * @package phpBB Extension - Browser Update
 * @author Darrell Dudics (a.k.a HoLyCoW, a.k.a HoLyCoWzOrZ) me@holycowzorz.com
 * @copyright (c) 2015 Darrell Dudics
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace holycow\browserupdate\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \phpbb\controller\helper */
	protected $controller_helper;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config        $config             Config object
	 * @param \phpbb\config\db_text       $config_text        DB text object
	 * @param \phpbb\controller\helper    $controller_helper  Controller helper object
	 * @param \phpbb\request\request      $request            Request object
	 * @param \phpbb\template\template    $template           Template object
	 * @param \phpbb\user                 $user               User object
	 * @return \holycow\browserupdate\event\subscriber
	 * @access public
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $controller_helper, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->controller_helper = $controller_helper;
		$this->template = $template;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after'	=> 'set_browserupdate_settings',
		);
	}

	/**
	 * Creates template variables based on database settings.
	 * These variables are made available to the event 'overall_footer_after'
	 */
	public function set_browserupdate_settings()
	{
		$this->template->assign_vars(array(
			'BROWSERUPDATE_REMINDER'			=> $this->config['browserupdate_reminder'],
			'BROWSERUPDATE_REMINDER_CLOSED'		=> $this->config['browserupdate_reminder_closed'],
			'BROWSERUPDATE_NEW_WINDOW'			=> ($this->config['browserupdate_new_window'])? 'true' : 'false',
		));
	}
}
