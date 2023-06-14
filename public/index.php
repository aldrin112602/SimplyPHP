<?php
require_once '../vendor/autoload.php';
require_once '../config/setting.php';
$dotenv = Dotenv\Dotenv::createImmutable( '../' );
$dotenv->load();
$config = require_once '../config/config.php';

echo($config['DEV_ENVIRONMENT']  . '<br>');
echo($config['database']['tests']['hostname']  . '<br>');
echo($config['database']['tests']['username']  . '<br>');

?>