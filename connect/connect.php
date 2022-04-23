<?php
// $dsn = 'mysql:dbname=exercise;host=127.0.0.1';
$dsn = 'sqlite:../../exercise.db';
$username = "root";
$password = "";
$options = NULL;
try{
    $pdo = new PDO($dsn,$username,$password,$options);
} catch(PDOException $error){
    echo $error->getMessage();
    die();
}
?>