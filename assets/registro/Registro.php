<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="../Estilos/Registro.css">
    <script src="https://kit.fontawesome.com/c3860b92ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="body_registrarse" >




<div class="volver">
    <a id="a_volver" href="../login/index_login.php"  ><i class="fa-solid fa-arrow-right fa-rotate-180" id="volver" ></i></a>
</div>

    <form action="Registro.php" method="post">

    <h1 class="inicio">
    Registrese aqui
    </h1>

    <div class="formulario_registro">

            
   

    
    <label id="title"  for="">Nombres:</label>
    <input id="input_registro" type="text" name="Nombres" placeholder="Ingrese sus nombres">

    <label id="title"  for="">Apellidos:</label>
    <input id="input_registro" type="text" name="Apellidos" placeholder="Ingrese sus apellidos">
    
    <label id="title"  for="">Nombre de Usuario:</label>
    <input id="input_registro" type="text" name="Username" placeholder="Ingrese su Nombre de usuario">

    
    <label id="title"  for="">Contraseña:</label>
    <input id="input_registro" type="password" name="Contrasena" placeholder="Ingrese su contraseña">

    </div>
    
<section class="boton">
<input id="bot" type="submit" name='registrarme' value="Registrarme">
</section>   
                            
    </form>

    <?php
    include("./register.php");
    ?>
</body>

</html>