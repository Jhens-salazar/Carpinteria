<?php 

session_start();
error_reporting(0);
$varsesion = $_SESSION['id_usuario'];

if($varsesion == null || $varsesion = '' ){
    echo "<script>window.location='../Login/index.php'</script>";
    die();
}else {
    echo "<script>Swal.fire('No autorizacion')</script>";
}
session_unset();
session_destroy();
header("location: ../index.php");
