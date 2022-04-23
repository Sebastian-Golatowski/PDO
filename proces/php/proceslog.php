<?php
include_once "../../connect/connect.php";
include_once "../../prep/prep.php";
session_start();

$select->execute(array($_POST['login'],$_POST['passwd']));
if(sizeof($result = $select->fetch(PDO::FETCH_ASSOC))!=0){
    $_SESSION["log"]=true;
    header("location:../../status.php");
}
else{
    $_SESSION['error']=true;
    header("location:../login.php");
}


?>