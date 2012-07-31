<?php
/**
* @version		$Id: mod_newsflash.php 10381 2008-06-01 03:35:53Z pasamio $
* @package		mod_pingbox
* @copyright	Copyright (C) 2009 Lehmoine.org. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$layout = 'default';
$path = JModuleHelper::getLayoutPath('mod_pingbox', $layout);
if (file_exists($path)) {
	require($path);
}
