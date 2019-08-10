<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/mvc/");
    $config['dbname'] = 'contatos';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';

} else {
    define("BASE_URL", "localhost/estudos/mvc/");
    $config['dbname'] = 'mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;

try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";hostname=".$config['host'], $config['dbuser'], $config['dbpass']);  
} catch (PDOException $e) {
    echo "FALHOU: ".$e->getMessage();
}