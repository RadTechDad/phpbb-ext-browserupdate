<?php
/**
 *
 * @package phpBB Extension - Browser Update
 * @author Darrell Dudics (a.k.a HoLyCoW, a.k.a HoLyCoWzOrZ) me@holycowzorz.com
 * @copyright (c) 2015 Darrell Dudics; Estonian translation by phpBBeesti.com 05/2015
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
	'BROWSERUPDATE_SETTINGS'				=> 'Uuenda veebilehitsejat seaded',
	'BROWSERUPDATE_SETTINGS_EXPLAIN'		=> 'Siin saad muuta laienduse "Uuenda veebilehitsejat" seadeid',
	'BROWSERUPDATE_SETTINGS_SAVED'			=> 'Seaded on edukalt salvestatud.',

	'BROWSERUPDATE_REMINDER'					=> 'Kui tihedasti peaks seda teadet kordama',
	'BROWSERUPDATE_REMINDER_EXPLAIN'			=> 'Antud teadet näidatakse ühe korra iga antud tunni tagant. Seadista väärtuseks 0 kui soovid, et teadet näidatakse alati igal ajal.',
	'BROWSERUPDATE_REMINDER_CLOSED'				=> 'Kui kasutaja sulgeb teate, siis millal teade peaks uuesti esile tulema',
	'BROWSERUPDATE_REMINDER_CLOSED_EXPLAIN'		=> 'Kasutajad saavad antud teadet ignoreerida sulgedes selle. See seade toob teate taas esile peale ära määratud tundi.',
	'BROWSERUPDATE_NEW_WINDOW'					=> 'Ava link uues aknas / vahelehes',

	'BROWSERUPDATE_SETTING_HOURS'		=> 'Tundi',
));
