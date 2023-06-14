<?php 
require_once '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$config = require_once '../config/config.php';

echo $config['database']['tests']['hostname'];
echo $config['database']['tests']['username'];
echo $config['database']['tests']['password'];


?>