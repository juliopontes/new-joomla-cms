<?php
opcache_reset();
ini_set("display_errors",true);
error_reporting(E_ALL);

define('JPATH_ROOT', dirname(dirname(__DIR__)).'/frontend');
define('JPATH_ADMINISTRATOR', dirname(dirname(__DIR__)).'/administrator');
define('JPATH_SITE', JPATH_ROOT);

require_once 'includes/defines.php';

if (is_dir(dirname(__DIR__) . '/installer')) {
	header('location: installation/');
}

echo 'ok';