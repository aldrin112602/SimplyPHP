<?php 
require_once '../vendor/autoload.php';
Dotenv\Dotenv::createImmutable('../')->load();
$config = require_once '../config/config.php';

// echo $config['database']['tests']['hostname'];
// echo $config['database']['tests']['username'];
// echo $config['database']['tests']['password'];


?>