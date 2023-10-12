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
    
    // Subir la imagen
    $target_dir = "../../imagenes/"; // Carpeta donde se guardará la imagen
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Verificar si el archivo es una imagen real
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
        if($check !== false) {
            echo "El archivo es una imagen - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "El archivo no es una imagen.";
            $uploadOk = 0;
        }
    }
    
    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }
    
    // Verificar el tamaño del archivo
    if ($_FILES["imagen"]["size"] > 500000) {
        echo "Lo siento, el archivo es demasiado grande.";
        $uploadOk = 0;
    }
    
    // Permitir ciertos formatos de archivo
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }
    
    // Verificar si $uploadOk está establecido en 0 por un error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    // Si todo está bien, intentar subir el archivo
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            echo "El archivo ". htmlspecialchars( basename( $_FILES["imagen"]["name"])). " ha sido subido.";

            // Solo almacenar el nombre del archivo en la base de datos
            $nombreArchivo = htmlspecialchars(basename($_FILES["imagen"]["name"]));

            // Consulta preparada
            $sql = $conn->prepare("INSERT INTO pedidos (nombre, apellido, contacto, email, tipo, material, acabado, fecha, ancho, altura, largo, comentario, imagen_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->bind_param("sssssssssssss", $nombre, $apellido, $contacto, $email, $tipo, $material, $acabado, $fecha, $ancho, $altura, $largo, $comentario, $nombreArchivo);

            if ($sql->execute()) {
                echo '<script>alert("Pedido realizado con éxito");window.location.href = "../../index.php";</script>';
            } else {
                echo "Error al registrar el pedido: " . $conn->error;
            }

            $sql->close();
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
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
