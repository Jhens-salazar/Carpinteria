<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="assets/img/logoFarmadso.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inicia sesion o Registrate</title>
</head>

<body class="body">


    <main class="containerr">
        <div class="cont">
            <section class="botones">
                <button id="mostrarBtn" class="boton boton-inactivo">Iniciar Sesión</button>
                <button id="mostrarRegistro" class="boton boton-inactivo">Registro</button>

            </section>

            <section class="iniciar-session">

                <form class="ventana-activa" id="informacionIniciarSesion" action="controlador_login.php" method="post" >
                    <div class="inicio">
                        <div class="email">
                            <label for="username">Username:</label>
                            <input type="text" id="email" name="username" placeholder="Ingresa tu Username" required><br><br>
                        </div>
                        <div class="pass">

                            <label for="password">Contraseña:</label>
                            <div class="password-input-container">
                                <input type="password" id="password" name="contrasena" required>
                                <button type="button" id="verContraseña" class="password-toggle-button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="iniciar">
                        <a href="#" id="olvideContrasena">¿Olvidaste tu contraseña?</a>
                        <button class="botonn"  name="sesion" >Iniciar Session</button>
                    </div>
                    <div class="linea">
                        O ingresa con
                    </div>
                    <div class="iconos">
                        <section><i class="fa-brands fa-facebook"></i><span>facebook</span></section>
                        <section><i class="fa-brands fa-google"></i><span>Google</span></section>
                        <section><i class="fa-brands fa-apple"></i><span>Mac</span></section>
                    </div>
                </form>

                <form class="ventana-inactiva" id="informacionRegistro" style="display: none;" action="controlador_registro.php" method="post" >
                    <div class="ventana">
                        <div class="name">
                            <section>
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required><br><br>
                            </section>
                            <section>
                                <label for="apellido">Apellido:</label>
                                <input type="text" id="apellido" name="apellido" required><br><br>
                            </section>
                        </div>
                        <div class="seguridad">
                            <section>
                                <label for="emailRegistro">Username:
                                    <input type="text" id="username" name="username" required><br><br>
                            </section>
                            <section>
                                <label for="contraseñaRegistro">Contraseña:</label>
                                <div class="password-input-container">
                                    <input type="password" id="password" name="password" required>
                                    <button type="button" id="verContraseña" class="password-toggle-button" name="sesion" >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="terminos">

                        <!-- Segundo checkbox para confirmar que eres mayor de edad -->
                        <div class="campo-checkbox">

                            <input type="checkbox" id="mayorDeEdad" name="mayorDeEdad" class="checkbox" required>
                            <label> Confirmo que soy mayor de edad
                            </label>
                        </div>
                        <button class="butonn" name="registrarme" >Completar Registro</button>
                    </div>
                    <div class="linea">
                        O ingresa con
                    </div>
                    <div class="icono">
                        <section><i class="fa-brands fa-facebook"></i><span>facebook</span></section>
                        <section><i class="fa-brands fa-google"></i><span>Google</span></section>
                        <section><i class="fa-brands fa-apple"></i><span>Mac</span></section>
                    </div>
                </form>

            </section>
        </div>
    </main>
   
    <script src="../assets/Javascript/login.js"></script>
    <?php
    include("./controlador_login.php");
    
    ?>
    <?php
    include("./controlador_registro.php")
    ?>

</body>

</html>