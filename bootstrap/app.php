<?php

define('APP_ENV', 'development');

/**
 * Register The Auto Loader
 */
require __DIR__ . '/autoload.php';

/**
 * Read the configuration
 */
$config = new \Phalcon\Config\Adapter\Php(__DIR__ . '/../config/config.php');

/**
 * Creating the application
 */
return new \Neutrino\Foundation\Bootstrap($config);
