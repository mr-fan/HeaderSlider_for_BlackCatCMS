<?php
/**
 * This file is part of an ADDON for use with Black Cat CMS Core.
 * This ADDON is released under the GNU GPL.
 * Additional license terms can be seen in the info.php of this module.
 *
 * @module			cc_header_slider
 * @version			see info.php of this module
 * @author			Matthias Glienke, creativecat
 * @copyright		2013, Black Cat Development
 * @link			http://blackcat-cms.org
 * @license			http://www.gnu.org/licenses/gpl.html
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('CAT_PATH')) {	
	include(CAT_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php


$module_directory		= 'cc_header_slider';
$module_name			= 'Header Slider';
$module_function		= 'page';
$module_version			= '0.1';
$module_platform		= '1.x';
$module_author			= 'Matthias Glienke, creativecat.de';
$module_license			= '<a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>';
$module_description		= 'The add on "HeaderSlider" provides a simple way to integrate a sliding media box on your website. For details see <a href="https://github.com/BlackCatDevelopment/HeaderSlider_for_BlackCatCMS" target="_blank">GitHub</a>.<br/><br/>Done by Matthias Glienke, <a class="icon-creativecat" href="http://creativecat.de"> creativecat</a>';
$module_guid			= '273cc174-604b-489a-9042-6955dc193d4e';

?>