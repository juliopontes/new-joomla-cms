<?php
opcache_reset();
ini_set("display_errors",true);
error_reporting(E_ALL);

define('JPATH_ROOT', dirname(dirname(__DIR__)).'/installer');
define('JPATH_ADMINISTRATOR', dirname(dirname(__DIR__)).'/administrator');
define('JPATH_SITE', , dirname(dirname(__DIR__)).'/frontend');

require_once '../includes/defines.php';

$container = new \Joomla\DI\Container;
$container->registerServiceProvider(new \App\Service\ConfigurationServiceProvider(JPATH_ROOT . '/installer/etc/config.json'))
    ->registerServiceProvider(new \App\Service\DatabaseServiceProvider);

// Instantiate the application.
$application = new \App\App($container);

// Execute the application.
$application->execute();