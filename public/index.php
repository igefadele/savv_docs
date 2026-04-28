<?php

// Setup Constants & Autoload
define('PUBLIC_PATH', __DIR__);
define('ROOT_PATH', dirname(__DIR__));

require ROOT_PATH . '/vendor/autoload.php';

// Savv handles the Constants, Dotenv, and Routing internally
$app = \Savv\Core\Application::bootstrap(ROOT_PATH, PUBLIC_PATH);

$app->run();

