<?php

// Pull in Composer
define('DS', DIRECTORY_SEPARATOR);
require_once(__DIR__.DS.'..'.DS.'vendor'.DS.'autoload.php');

// This simple file serves as the bootstrap and the initialization
// It's the entry point for the IRC server

$config = require_once(__DIR__.DS.'..'.DS.'etc'.DS.'config.php');

$server = new \ElephpantIRCd\Server($config['name'], $config['port'], $config['bind']);
$server->run();

// Woah, what?  This is literally all it takes for a server application.
