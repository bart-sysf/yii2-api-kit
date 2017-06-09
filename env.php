<?php

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$dotenv->required(['DB_DSN', 'DB_USERNAME', 'DB_PASSWORD', 'ENTRY_URL']);
$dotenv->required('YII_DEBUG')->allowedValues([true, false]);
$dotenv->required('YII_ENV')->allowedValues(['dev', 'prod', 'test']);

define('YII_DEBUG', getenv('YII_DEBUG'));
define('YII_ENV', getenv('YII_ENV'));
define('DB_DSN', getenv('DB_DSN'));
define('DB_USERNAME', getenv('DB_USERNAME'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('ENTRY_URL', getenv('ENTRY_URL'));