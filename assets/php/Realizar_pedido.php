<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido</title>
    <link rel="stylesheet" href="./assets/css/Realizar_pedidos.css">
</head>

<body>


    <div class="cont">
        <h1>Realiza tu pedido</h1>

        <form action="/controler_realiza.php" method="post" enctype="multipart/form-data" class="formulario">
            <!-- Información del Cliente -->

            <div class="conten1">


                    <article class="space">
                        <label for="contacto">Contacto:</label>
                        <input type="tel" id="contacto" name="contacto" required>

                    </article>


                    <article class="space">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </article>

            </div>


            <div class="conten2">
                <div class="conten_int">
                <h3>Detalles del Producto:</h3>
               
                    
                    <article class="space2">
                        <label for="tipo">Tipo de Producto:</label>
                        <input type="text" id="tipo" name="tipo" required>
                    </article>
                    <article class="space2">
                        <label for="material">Material:</label>
                        <input type="text" id="material" name="material" required>

                    </article>
                    <article class="space2">
                        <label for="acabado">Acabado Deseado:</label>
                        <input type="text" id="acabado" name="acabado" required>
                    </article>
                    <article class="space2">
                        <label for="fecha">Fecha de Entrega Deseada:</label>
                        <input type="date" id="fecha" name="fecha" required>
                    </article>
                



                </div>

                <div class="conten_int2">
                    <h3>Medidas</h3>
                    <article class="space3">
                        <label for="ancho">Ancho:</label>
                        <input type="text" id="ancho" name="ancho" required>

                    </article>
                    <article class="space3">
                        <label for="altura">Altura:</label>
                        <input type="text" id="altura" name="altura" required>
                    </article>
                    <article class="space3">
                        <label for="largo">Largo:</label>
                        <input type="text" id="largo" name="largo" required>

                    </article>
                    <article class="space3">
                            <label for="comentario">Comentario:</label>
                            <textarea id="comentario" name="comentario" rows="4"></textarea>
                        </article>
                    
                </div>
            
            </div>

            <div class="conten3">

                        <article class="space4">
                            <label for="imagen">Imagen de Referencia:</label>
                            <input type="file" id="imagen" name="imagen" accept="image/*">
                        </article>
                        <article class="space4">
                        <input type="submit" value="Enviar Pedido">
                        </article>
                       
                </div>


                
            
        </form>

    </div>

</body>

</html>