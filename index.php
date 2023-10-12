<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Carpinteria</title>
    <script src="https://kit.fontawesome.com/c3860b92ff.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./imagenes/logo4.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/Realizar_pedido.css">
</head>

<body>

    <!-- formulario realizar pedido -->
    <!-- Contenedor de la ventana modal -->
    <div class="ventana6" id="vent6">
        <article class="ventana4" id="vent4">
            <div id="cerrar4"><a href="javascript:cerrar6()"><i class="fa-regular fa-rectangle-xmark"></i></a></div>
            <div id="contenido-ventana4">
                <?php
                require_once "assets/php/Realizar_pedido.php";
                ?>
                <!-- Aquí se cargará el contenido del formulario de pedido -->
            </div>


        </article>
    </div>

    <div class="ventana7" id="vent7">
        <article class="ventana5" id="vent5">
            <div id="cerrar5"><a href="javascript:cerrar7()"><i class="fa-regular fa-rectangle-xmark"></i></a></div>
            <div id="contenido-ventana4">
                <?php
                include "assets/php/Realizar_cotizacion.php";
                ?>
                <!-- Aquí se cargará el contenido del formulario de pedido -->
            </div>


        </article>
    </div>




    <article class="ventana" id="vent">
        <div id="cerrar"><a href="javascript:cerrar()"><i class="fa-regular fa-rectangle-xmark"></i></a></div>
        Somos una empresa familiar comprometida con la excelencia en el diseño y la fabricación de muebles y productos
        de madera de alta calidad. Nuestra pasión por la carpintería y la dedicación a nuestros clientes son los pilares
        que nos han permitido crecer y prosperar a lo largo de los años.
    </article>
    <article class="ventana2" id="vent2">
        <div id="cerrar2"><a href="javascript:cerrar2()"><i class="fa-regular fa-rectangle-xmark"></i></a></div>
        Desde entonces, hemos estado sirviendo a nuestra comunidad con orgullo y habilidad. Lo que comenzó como un
        modesto taller de carpintería ha evolucionado hasta convertirse en una empresa respetada y reconocida en el
        mundo de la carpintería.
    </article>
    <article class="ventana3" id="vent3">
        <div id="cerrar3"><a href="javascript:cerrar3()"><i class="fa-regular fa-rectangle-xmark"></i></a></div>
        Cada miembro de nuestro equipo aporta habilidades únicas y experiencia en el mundo de la carpintería, lo que nos
        permite abordar una amplia variedad de proyectos, desde muebles personalizados hasta renovaciones de interiores.
    </article>

    <?php

    if (isset($_SESSION['id_usuario'])) {
        echo '
      
    <header class="header">
        <img src="./imagenes/logo4.png" alt="" class="logo">
        <input type="checkbox" name="" id="chekbox">
        <label for="chekbox" class="mostrar_menu">
            &#8801
        </label>

        <nav class="menu">
            <section class="separadores">
                <a href="/index.php" id="opcion"><i class="fa-solid fa-house"></i>Inicio</a>
            </section>

            <section class="separadores">
                <a href="javascript:abrir6()" >
                    <i class="fa-regular fa-address-book"></i>Realizar Pedido
                </a>
            </section>

            <section class="separadores">
                <a href="javascript:abrir7()">
                    <i class="fa-solid fa-clipboard"></i>Realizar Cotización
                </a>
            </section>

            
            <section class="separadores">
                <a href="./assets/tienda/index.html" id="opcion"><i class="fa-solid fa-shop"></i>Tienda</a>
            </section>

            <section class="separadores">
            <a href="./Login/cerrar.php" id="opcion"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M18 2H6a1 1 0 0 0-1 1v9l5-4v3h6v2h-6v3l-5-4v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"></path></svg> Cerrar sesion</a>
        </section>

            <label for="chekbox" class="esconder_menu">
                &#215
            </label>
        </nav>
        ';
    } else {
        echo '
    <header class="header">
        <img src="./imagenes/logo4.png" alt="" class="logo">
        <input type="checkbox" name="" id="chekbox">
        <label for="chekbox" class="mostrar_menu">
            &#8801
        </label>

        <nav class="menu">
            <section class="separadores">
                <a href="index.php" id="opcion"><i class="fa-solid fa-house"></i>Inicio</a>
            </section>

            <section class="separadores">
                <a href="./Login/index.php">
                    <i class="fa-regular fa-address-book"></i>Realizar Pedido
                </a>
            </section>

            <section class="separadores">
                <a href="./Login/index.php" >
                    <i class="fa-solid fa-clipboard"></i>Realizar Cotización
                </a>
            </section>

            
            <section class="separadores">
                <a href="./Login/index.php" id="opcion"><i class="fa-solid fa-shop"></i>Tienda</a>
            </section>

            <label for="chekbox" class="esconder_menu">
                &#215
            </label>
        </nav>
    ';

    }

    ?>

    </header>

    <section class="baner" id="banner"  >

        <div class="contenido-banner">
            <h2><span>Damos la bienvenida a nuestra carpinteria, aqui podras encontrar soluciones a bajo costo y muy
                    buena calidad"</span>¿Quieres saber mas?, puedes</h2>
            <a href="" class="boton_empezar">Contactanos</a>
        </div>
    </section>

    <div class="contenslia">
        <div class="container">

            <ul class="slider">
                <li id="slide1">
                    <img src="./imagenes/armarios.png" id="imagen_slider" />
                </li>

                <li id="slide2">
                    <img src="./imagenes/casaanimales.png" id="imagen_slider" />
                </li>
                <li id="slide3">
                    <img src="./imagenes/cocinas.png" id="imagen_slider" alt="">
                </li>
                <li id="slide4">
                    <img src="./imagenes/mesasillas.png" id="imagen_slider" alt="">
                </li>
                <li id="slide5">
                    <img src="./imagenes/setups.png" id="imagen_slider" />
                </li>
            </ul>
        </div>

<br>
        <section class="acerca_nosotros">


        <div class="conten_acerca">
            <img src="./imagenes/Acerca de nosotros.png" alt="">

            <p>En nuestra carpinteria, llevamos más de 50 años transformando la madera en obras maestras de artesanía. .
            </p>

            <a href="javascript:abrir()" class="boton-sabermas">Saber mas</a>
        </div>

        <div class="conten_acerca">
            <img src="./imagenes/nuestra historia.png" alt="">

            <p>Llevamos mas de 50 años trabajando para nuestra comunidad caqueteña, entregando a nuestros clientes sus
                sueños tallados en madera.</p>
            <a href="javascript:abrir2()" class="boton-sabermas">Saber mas</a>
        </div>

        <div class="conten_acerca">
            <img src="./imagenes/nuestro equipo.png" alt="">

            <p>Nuestro equipo está formado por un grupo de apasionados artesanos de la madera que comparten nuestra
                visión de la excelencia.</p>
            <a href="javascript:abrir3()" class="boton-sabermas">Saber mas</a>
        </div>
    </section>
    </div>


    


    <div class="containertwo">
    <section class="fabricaciones">
        <div class="image-gallery">
            <div class="imagenPrincipal">
                <img src="./imagenes/Galeria de imagenes/armario.png" alt="Producto" id="main-image1">
            </div>

            <div class="thumbnail-images">
                <img src="./imagenes/Galeria de imagenes/armario2.png" alt="Producto" class="thumbnail active">
                <img src="./imagenes/Galeria de imagenes/armario3.png" alt="Producto" class="thumbnail">
                <img src="./imagenes/Galeria de imagenes/armario4.png" alt="Producto" class="thumbnail">
            </div>
        </div>
    </section>

    <section class="fabricaciones2">
        <div class="image-galleri">
            <div class="imagenPrincipal2">
                <img src="./imagenes/Galeria de imagenes/nochero1.png" alt="Producto" id="main-image2">
            </div>

            <div class="thumbnail-images2">
                <img src="./imagenes/Galeria de imagenes/mesanoche2.png" alt="Producto" class="thumbnail2 active2">
                <img src="./imagenes/Galeria de imagenes/mesanoche3.png" alt="Producto" class="thumbnail2">
                <img src="./imagenes/Galeria de imagenes/mesanoche4.png" alt="Producto" class="thumbnail2">
            </div>
        </div>
    </section>
</div>

    <!-- MODAL ACERCA NOSOTROS -->
    <script>
        function abrir() {
            document.getElementById("vent").style.display = "block";
        }
        function cerrar() {
            document.getElementById("vent").style.display = "none";
        }

        function abrir2() {
            document.getElementById("vent2").style.display = "block";
        }
        function cerrar2() {
            document.getElementById("vent2").style.display = "none";
        }

        function abrir3() {
            document.getElementById("vent3").style.display = "block";
        }
        function cerrar3() {
            document.getElementById("vent3").style.display = "none";
        }

        // MODAL FORMULARIOS

        function abrir6() {
            document.getElementById("vent6").style.display = "block";
            document.body.style.overflow = "hidden"; // Desactiva el scroll en el body
        }

        function cerrar6() {
            document.getElementById("vent6").style.display = "none";
            document.body.style.overflow = "auto"; // Reactiva el scroll en el body
        }

        function abrir7() {
            document.getElementById("vent7").style.display = "block";
            document.body.style.overflow = "hidden"; // Desactiva el scroll en el body
        }

        function cerrar7() {
            document.getElementById("vent7").style.display = "none";
            document.body.style.overflow = "auto"; // Reactiva el scroll en el body
        }


    </script>
    <!-- SLIDER -->
    <script>
        // Selecciona el slider y los elementos de las diapositivas
        var slider = document.querySelector('.slider');
        var slides = slider.getElementsByTagName('li');
        var currentSlide = 0;

        // Función para mostrar la siguiente diapositiva
        function showNextSlide() {
            slides[currentSlide].style.opacity = 0; // Oculta la diapositiva actual
            currentSlide = (currentSlide + 1) % slides.length; // Actualiza el índice de la diapositiva
            slides[currentSlide].style.opacity = 1; // Muestra la siguiente diapositiva
        }

        // Configura el intervalo para cambiar las diapositivas automáticamente cada 5 segundos
        setInterval(showNextSlide, 5000);
    </script>

    <!-- GALERIA IMAGENES -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const thumbnailImages1 = document.querySelectorAll(".thumbnail");
        const mainImage1 = document.querySelector("#main-image1");

        const thumbnailImages2 = document.querySelectorAll(".thumbnail2");
        const mainImage2 = document.querySelector("#main-image2");

        let currentImage1 = mainImage1.src; // Guardar la imagen actual de la primera galería

        thumbnailImages1.forEach(function (thumbnail) {
            thumbnail.addEventListener("click", function () {
                const tempImage = mainImage1.src; // Guardar la imagen actual antes de cambiarla
                mainImage1.src = thumbnail.src;
                thumbnail.src = tempImage; // Mover la imagen actual al contenedor de la miniatura
                thumbnailImages1.forEach(function (thumb) {
                    thumb.classList.remove("active");
                });
                thumbnail.classList.add("active");
            });
        });

        thumbnailImages2.forEach(function (thumbnail) {
            thumbnail.addEventListener("click", function () {
                const tempImage = mainImage2.src;
                mainImage2.src = thumbnail.src;
                thumbnail.src = tempImage;
                thumbnailImages2.forEach(function (thumb) {
                    thumb.classList.remove("active2");
                });
                thumbnail.classList.add("active2");
            });
        });
    });
</script>


    <footer class="index_foo">
    <section class="separador_footer">
    <i class="fa-solid fa-copyright"></i>
    <h3>Copyright© Carpinteria </h3>
    </section>
    <section class="separador_footer">
    <i class="fa-solid fa-location-dot"></i>
    <h3>Florencia-Caqueta</h3>
    </section>
    <section class="separador_footer">
    <i class="fa-solid fa-phone"></i>
    <h3>3124263009</h3>
    </footer>

</body>

</html>