<?php
include('../../Login/conexion.php');
session_start();
$varsesion = $_SESSION['id_usuario'];
$name = $_SESSION['username'];
if (!isset($varsesion)) {
    header('location: ../../Login/controlador_login.php');
}

$consulta = "SELECT * FROM clientes WHERE id_cliente = '$varsesion'";
$ejecuta = $conn->query($consulta);
$row = $ejecuta->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Panel de Administrador</title>
</head>

<body>

    <header>
        <h1>Panel de Administrador</h1>
    </header>

    <aside>
        <ul>
            <li><a href="#">Administrar Contenido</a>
                <ul>
                    <li><a href="#">Administrar Inicio</a></li>
                    <li><a href="#">Administrar Tienda</a></li>
                </ul>
            </li>
            <li><a href="#">Pedidos Realizados</a></li>
            <li><a href="#">Cotizaciones Realizadas</a></li>
        </ul>
    </aside>

    <main>
        <!-- Aquí irá el contenido específico del panel de administrador -->
    </main>

</body>

</html>
