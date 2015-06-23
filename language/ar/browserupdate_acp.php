<?php
/**
 *
 * @package phpBB Extension - Browser Update
 * @author Darrell Dudics (a.k.a HoLyCoW, a.k.a HoLyCoWzOrZ) me@holycowzorz.com
 * @copyright (c) 2015 Darrell Dudics
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'BROWSERUPDATE_SETTINGS'				=> 'إعدادات تحديث المتصفحات',
	'BROWSERUPDATE_SETTINGS_EXPLAIN'		=> 'تستطيع من هنا تغيير الإعدادات التي تريدها للإضافة : تحديث المتصفحات',
	'BROWSERUPDATE_SETTINGS_SAVED'			=> 'تم حفظ الإعدادات بنجاح.',

	'BROWSERUPDATE_REMINDER'					=> 'توقيت إعادة ظهور الرسالة ',
	'BROWSERUPDATE_REMINDER_EXPLAIN'			=> 'سيتم عرض رسالة تحديث المتصفحات مرة واحدة في التوقيت التي حددتها هنا بالساعات. القيمة صفر يعني عرض الرسالة بصورة دائمة.',
	'BROWSERUPDATE_REMINDER_CLOSED'				=> 'توقيت إعادة ظهور الرسالة عند إغلاقها ',
	'BROWSERUPDATE_REMINDER_CLOSED_EXPLAIN'		=> 'تستطيع هنا تحديد الوقت بالساعات لإعادة ظهور الرسالة بعد إغلاقها بواسطة الأعضاء.',
	'BROWSERUPDATE_NEW_WINDOW'					=> 'فتح الرابط في نافذة / تبويب جديدة ',

	'BROWSERUPDATE_SETTING_HOURS'		=> 'ساعات',
));
