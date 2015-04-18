<?php
/**
 *
 * @package phpBB Extension - Browser Update
 * @author Darrell Dudics (a.k.a HoLyCoW, a.k.a HoLyCoWzOrZ) me@holycowzorz.com
 * @copyright (c) 2015 Darrell Dudics
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BROWSERUPDATE_SETTINGS'				=> 'Browser Update Settings',
	'BROWSERUPDATE_SETTINGS_EXPLAIN'		=> 'Change the settings that affect the Browser Update extension',
	'BROWSERUPDATE_SETTINGS_SAVED'			=> 'Settings have been saved successfully.',

	'BROWSERUPDATE_REMINDER'					=> 'How often should the message reappear',
	'BROWSERUPDATE_REMINDER_EXPLAIN'			=> 'The message will show once per this many hours. Set this value to 0 to force the message to show all the time.',
	'BROWSERUPDATE_REMINDER_CLOSED'				=> 'If closed, the message will reappear after how many hours',
	'BROWSERUPDATE_REMINDER_CLOSED_EXPLAIN'		=> 'Users can ignore the message by closing it. This setting will make it reappear after the specified number of hours.',
	'BROWSERUPDATE_NEW_WINDOW'					=> 'Open link in new window/tab',

	'BROWSERUPDATE_SETTING_HOURS'		=> 'Hours',
));
