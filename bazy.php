<?php
// $dsn = 'mysql:dbname=;host=127.0.0.1';
$dsn = 'sqlite:exercise.db';
$username = "root";
$password = "";
$options = NULL;
try{
    $pdo = new PDO($dsn,$username,$password,$options);
} catch(PDOException $error){
    echo $error->getMessage();
    die();
}

if($name = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME)=='mysql'){
    $databse = "CREATE DATABASE IF NOT EXISTS exercise";
    $pdo->query($databse);

    $use = "USE exercise";
    $pdo->query($use);

    $create = "CREATE TABLE IF NOT EXISTS users (
        id int(11) PRIMARY KEY AUTO_INCREMENT,
        `login` varchar(255) NOT NULL,
        passwd varchar(255) NOT NULL,
        `name` varchar(255) NOT NULL
    );";
    $pdo->query($create);
}
elseif($name='sqlite'){
    $create = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY,
        `login` varchar(255) NOT NULL,
        passwd varchar(255) NOT NULL,
        `name` varchar(255) NOT NULL
    );";
    $pdo->query($create);
}
?>