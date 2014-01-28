<?php
// Defines Paths
define('JPATH_PROJECT', dirname(dirname(__DIR__)));
define('JPATH_APP', JPATH_PROJECT . '/app');
define('JPATH_ETC', JPATH_PROJECT . '/etc');
define('JPATH_VENDOR', JPATH_PROJECT . '/vendor');
define('JPATH_CONFIGURATION', JPATH_ETC);

// autocreate define app path: JPATH_APP_FOLDERNAME
$directories = glob(JPATH_APP.'/*', GLOB_ONLYDIR);
foreach ($directories as $directory) {
	if (!defined('JPATH_APP_'.$directory)) {
		define('JPATH_APP_'.$directory, JPATH_APP . '/' . $directory);
	}
}