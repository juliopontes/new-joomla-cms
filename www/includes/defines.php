<?php
if (!defined('JPATH_ROOT')) {
	throw new Exception('define path root');
}

// Root project paths
define('JPATH_ETC', dirname(dirname(__DIR__)) . '/etc');
define('JPATH_VENDOR', dirname(dirname(__DIR__)) . '/vendor');

// Load the Composer autoloader
$vendor_autoload = JPATH_VENDOR . '/autoload.php';
if (!file_exists($vendor_autoload) || (is_dir(basename($vendor_autoload)) && !file_exists(basename($vendor_autoload)) )) {
    throw new Exception('run composer install');
}

require $vendor_autoload;