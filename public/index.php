<?php 
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

echo $_ENV['database.tests.hostname'] . '<br>';
echo $_ENV['database.tests.username'] . '<br>';
echo $_ENV['database.tests.password'] . '<br>';


?>