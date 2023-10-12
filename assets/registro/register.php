<?php
include("conexion.php");

if (isset($_POST['registrarme'])) {
    if (
        strlen($_POST['Nombres']) >= 1 &&
        strlen($_POST['Apellidos']) >= 1 &&
        strlen($_POST['Username']) >= 1 &&
        strlen($_POST['Contrasena']) >= 1 
    ) {

        $nombres = trim($_POST['Nombres']);
        $apellidos = trim($_POST['Apellidos']);
        $username = trim($_POST['Username']);
        $contrasena = password_hash(trim($_POST['Contrasena']), PASSWORD_DEFAULT);
        $fecha_registro = date("Y-m-d H:i:s");  // Cambié el formato a un formato más común
        $rol = 2;

        $consulta = "INSERT INTO clientes (nombres, apellidos, username, contrasena, fecha_registro, rol) 
                     VALUES ('$nombres', '$apellidos', '$username', '$contrasena', '$fecha_registro', $rol)";

        $resultado = mysqli_query($conn, $consulta);

        if ($resultado) {
            echo "<script>window.location='../login/login.php'</script>";
        } else {
            echo "<script>Swal.fire('Error al completar el registro')</script>";
        }
    } else {
        echo "<script>Swal.fire('Llene todos los campos')</script>";
    }
}
?>