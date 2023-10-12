<?php
include("conexion.php");

if (isset($_POST['registrarme'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        isset($_POST['mayorDeEdad'])  // Verificar si el checkbox está marcado
    ) {
        $nombres = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellido']);
        $username = trim($_POST['username']);
        $contrasena = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        $fecha_registro = date("Y-m-d H:i:s");
        $rol = 2;

        // Verificar si el nombre de usuario ya existe
        $consulta_existencia = "SELECT * FROM clientes WHERE username = '$username'";
        $resultado_existencia = mysqli_query($conn, $consulta_existencia);

        if (mysqli_num_rows($resultado_existencia) > 0) {
            echo "<script>Swal.fire('Username ya existente, elige otro.');</script>";
        } else {
            // Insertar en la base de datos si el nombre de usuario no existe
            $consulta = "INSERT INTO clientes (nombres, apellidos, username, contrasena, fecha_registro, rol) 
                         VALUES ('$nombres', '$apellidos', '$username', '$contrasena', '$fecha_registro', $rol)";

            $resultado = mysqli_query($conn, $consulta);

            if ($resultado) {
                echo "<script>window.location='index.php'</script>";
            } else {
                echo "<script>Swal.fire('Error al completar el registro')</script>";
            }
        }
    } else {
        echo "<script>Swal.fire('Llene todos los campos y confirme ser mayor de edad')</script>";
    }
}
?>
