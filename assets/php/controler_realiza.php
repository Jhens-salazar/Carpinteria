<?php
// Conexión a la base de datos (actualiza con tus propios detalles)
$servername = "localhost"; // Cambiar al nombre de tu servidor de base de datos
$username = "root"; // Cambiar al nombre de usuario de tu base de datos
$password = ""; // Cambiar a la contraseña de tu base de datos
$dbname = "sistema_pedidos"; // Cambiar al nombre de tu base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y limpiar datos
    $nombre = limpiarEntrada($_POST["nombre"]);
    $apellido = limpiarEntrada($_POST["apellido"]);
    $contacto = limpiarEntrada($_POST["contacto"]);
    $email = limpiarEntrada($_POST["email"]);
    $tipo = limpiarEntrada($_POST["tipo"]);
    $material = limpiarEntrada($_POST["material"]);
    $acabado = limpiarEntrada($_POST["acabado"]);
    $fecha = limpiarEntrada($_POST["fecha"]);
    $ancho = limpiarEntrada($_POST["ancho"]);
    $altura = limpiarEntrada($_POST["altura"]);
    $largo = limpiarEntrada($_POST["largo"]);
    $comentario = limpiarEntrada($_POST["comentario"]);

    // Consulta preparada
    $sql = $conn->prepare("INSERT INTO pedidos (nombre, apellido, contacto, email, tipo, material, acabado, fecha, ancho, altura, largo, comentario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssssssssss", $nombre, $apellido, $contacto, $email, $tipo, $material, $acabado, $fecha, $ancho, $altura, $largo, $comentario);

    if ($sql->execute()) {
        echo "Pedido registrado con éxito";
    } else {
        echo "Error al registrar el pedido: " . $conn->error;
    }

    $sql->close();
}

// Cerrar conexión
$conn->close();

function limpiarEntrada($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
?>
