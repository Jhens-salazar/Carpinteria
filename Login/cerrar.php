<?php 

session_start();
error_reporting(0);
$rol=$_SESSION['rol'];
if($rol==1){
    session_unset();
    session_destroy();
    header("location: ../Login/index.php");
}else{
    session_unset();
session_destroy();
header("location: ../index.php");
}

