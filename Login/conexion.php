<?php
//    Establecer la conexión a la base de datos
// $servername = "localhost";
// $username = "c1601882_jhens";
// $password = "keGOtude02";
// $dbname = "c1601882_jhens";

$servername = "localhost"; // Cambiar al nombre de tu servidor de base de datos
$username = "root"; // Cambiar al nombre de usuario de tu base de datos
$password = ""; // Cambiar a la contraseña de tu base de datos
$dbname = "sistema_pedidos"; // Cambiar al nombre de tu base de datos

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Fallo en la conexión: " . mysqli_connect_error());
}

?>