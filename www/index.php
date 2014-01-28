<?php
opcache_reset();
ini_set("display_errors",true);
error_reporting(E_ALL);

define('JPATH_ROOT', dirname(dirname(__DIR__)).'/frontend');

require_once 'includes/defines.php';

if (is_dir(dirname(__DIR__) . '/installer')) {
	header('location: installation/');
}

echo 'ok';