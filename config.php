<?php 
require 'environment.php';

global $config;
global $db;

$config = array();

if(ENVIRONMENT == 'development'){
    
    define("BASE_URL", "http://localhost/crudMVC/");
    $config['dbname'] = 'crudoo';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
    
} else {
    
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = 'crudoo';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>