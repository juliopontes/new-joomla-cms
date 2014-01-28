<?php
opcache_reset();
ini_set("display_errors",true);
error_reporting(E_ALL);

require_once 'includes/defines.php';
require_once 'includes/autoload.php';

define('JPATH_ROOT', JPATH_FORNTEND);

if (!is_file(JPATH_CONFIGURATION.'/configuration.php')) {
	header('location: installation/');
}

echo 'Site application soon';