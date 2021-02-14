<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dataBase = 'app_sample';

try{
    $dsn = "mysql:host=$server;dbname=$dataBase";
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e){
    exit($e->getMessage());
}


?>