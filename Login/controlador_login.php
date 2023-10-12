<?php

// Verificar si el formulario de login ha sido enviado
if (isset($_POST['sesion'])) {
    include('conexion.php');
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $contrasena = $_POST['contrasena'];
    // Realizar la consulta a la base de datos para verificar las credenciales
    $query = "SELECT * FROM clientes WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Verificar si se encontró un usuario con el nombre de usuario proporcionado
    if (mysqli_num_rows($result) == 1) {
        // Obtener la información del usuario de la base de datos
        $row = mysqli_fetch_assoc($result);

        // Verificar la contraseña usando password_verify
        if (password_verify($contrasena, $row['contrasena'])) {
            session_start();
            // Guardar la información del usuario en la sesión
            $_SESSION['id_usuario'] = $row['id_cliente'];
            $_SESSION['username'] = $row['nombres'];
            $_SESSION['rol'] = $row['rol'];
            echo $_SESSION['id_usuario'];	    
            if ($row['rol'] == 1) {
                echo '<script>window.location.href = "../assets/admin/admin.php";</script>';
            } else if ($row['rol'] == 2) {
                echo '<script>window.location.href = "../index.php";</script>';
            } else {
                echo '<script>window.location.href = "./index.php";</script>';
            }
            exit();
        }elseif ($contrasena === $row['contrasena']) {
            session_start();
            // Guardar la información del usuario en la sesión
            $_SESSION['id_usuario'] = $row['id_cliente'];
            $_SESSION['username'] = $row['nombres'];
            $_SESSION['rol'] = $row['rol'];
            echo $_SESSION['id_usuario'];	    
            if ($row['rol'] == 1) {
                echo '<script>window.location.href = "../assets/admin/admin.php";</script>';
            } else if ($row['rol'] == 2) {
                echo '<script>window.location.href = "../index.php";</script>';
            } else {
                echo '<script>window.location.href = "./index.php";</script>';
            }
            exit();
        } 
        
        else {
            // Si la contraseña no es válida, mostrar un mensaje de error
            echo "<script>Swal.fire('Contraseña incorrecta, Intentelo nuevamente')</script>";
        }
    } else {
        // Si no se encontró un usuario con el nombre de usuario proporcionado, mostrar un mensaje de error
        echo "Usuario no encontrado, Intentelo nuevamente'";
    }
}
?>