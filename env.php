<?php

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$dotenv->required(['DB_DSN', 'DB_USERNAME', 'DB_PASSWORD']);
$dotenv->required('YII_DEBUG')->allowedValues([true, false]);
$dotenv->required('YII_ENV')->allowedValues(['dev', 'prod', 'test']);

defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG'));
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV'));