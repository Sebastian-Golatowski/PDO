<?php
include_once "../../connect/connect.php";
include_once "../../prep/prep.php";
session_start();

$insert->execute(array($_POST['login'],$_POST['passwd'],$_POST['name']));
$_SESSION['status']="account successfully created";

header("location:../../index.php");

?>