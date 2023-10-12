<?php

// Iniciar la sesión
session_start();

// Verificar si el formulario de login ha sido enviado
if (isset($_POST['sesion'])) {
    include('../registro/conexion.php');
    // Obtener los datos del formulario
    $Username = $_POST['username'];
    $Contrasena = $_POST['contrasena'];

    // Realizar la consulta a la base de datos para verificar las credenciales
    // (Aquí deberías tener tu propia lógica de consulta a la base de datos)
    // En este ejemplo, asumimos que la tabla de usuarios se llama 'usuarios'
    $query = "SELECT * FROM clientes WHERE username = '$Username' AND contrasena = '$Contrasena'";
    $result = mysqli_query($conn, $query);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($result) == 1) {
        // Obtener la información del usuario de la base de datos
        $row = mysqli_fetch_assoc($result);

        // Guardar la información del usuario en la sesión
        $_SESSION['id_usuario'] = $row['id_cliente'];
        $_SESSION['username'] = $row['nombres'];
        $_SESSION['rol'] = $row['rol'];


        if ($row['rol'] == 1) {
            echo '<script>window.location.href = "../php/admin.php";</script>';
        } else if ($row['rol'] == 2) {
            echo '<script>window.location.href = "../../index.php";</script>';
        } else {
            echo '<script>window.location.href = "../login/index_login.php";</script>';
        }
        exit();
    } else {
        // Si no se encontró un usuario con las credenciales proporcionadas, mostrar un mensaje de error
        echo "<script>Swal.fire('Credenciales invalidas, Intentelo nuevamente')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Estilos/login.css">
    <script src="https://kit.fontawesome.com/c3860b92ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
  

</head>
<body class="body_iniciosesion" >
<div class="volver">
<a id=a_volver href="./index_login.php"><i class="fa-solid fa-arrow-right fa-rotate-180" id="volver" ></i></a>
</div>

<div class="loginn">
<h1 class="inicio">
    Inicio de Sesion
</h1>
<form class="form_login" method="post" action="">
  <label for="usuario">Username:</label>
  <input class="inputt" type="text"  name="username" placeholder="Ingrese su Username" ><br>
  <label for="contraseña">Contraseña:</label>
  <input class="inputt" type="password"  name="contrasena" placeholder="Ingrese su contraseña" ><br>
  <input type="submit" name="sesion" value="Iniciar sesión" >
</form>
    </div>
</body>
</html>

