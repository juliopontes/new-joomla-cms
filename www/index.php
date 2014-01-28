<?php
opcache_reset();
ini_set("display_errors",true);
error_reporting(E_ALL);

require_once 'includes/defines.php';

if (is_dir(JPATH_ROOT . '/installer')) {
	header('location: installation/');
}

echo 'ok';