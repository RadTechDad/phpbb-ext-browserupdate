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
	// ACP Module
	'ACP_BROWSERUPDATE'					=> 'Uuenda veebilehitsejat',
	'ACP_BROWSERUPDATE_SETTINGS'		=> 'Teate seaded',
	// ACP Logs
	'ACP_BROWSERUPDATE_UPDATE_LOG'		=> '<strong>Muudetud veebilehitseja uuenduse seadeid</strong>',
));
