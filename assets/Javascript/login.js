document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("mostrarBtn").classList.add("boton-activo");
  });
  document.addEventListener("DOMContentLoaded", function() {
    // Oculta la sección de registro
    document.getElementById("informacionRegistro").style.display = "none";

    // Muestra la sección de inicio de sesión
    document.getElementById("informacionIniciarSesion").style.display = "block";

    // Activa el botón "Iniciar Sesión"
    document.getElementById("mostrarBtn").classList.add("boton-activo");
  });




document.getElementById("mostrarBtn").addEventListener("click", function () {
    var informacionIniciarSesion = document.getElementById("informacionIniciarSesion");
    var informacionRegistro = document.getElementById("informacionRegistro");

    // Oculta la sección de Registro y muestra la de Iniciar Sesión
    informacionIniciarSesion.style.display = "block";
    informacionRegistro.style.display = "none";
});

document.getElementById("mostrarRegistro").addEventListener("click", function () {
    var informacionIniciarSesion = document.getElementById("informacionIniciarSesion");
    var informacionRegistro = document.getElementById("informacionRegistro");

    // Oculta la sección de Iniciar Sesión y muestra la de Registro
    informacionIniciarSesion.style.display = "none";
    informacionRegistro.style.display = "block";
});





var btnIniciarSesion = document.getElementById("mostrarBtn");
var btnRegistro = document.getElementById("mostrarRegistro");

// Agrega manejadores de eventos a los botones
btnIniciarSesion.addEventListener("click", function () {
    // Agrega la clase "activo" al botón activo
    btnIniciarSesion.classList.add("activo");
    btnRegistro.classList.remove("activo");
    
    // Cambia los estilos de los botones
    btnIniciarSesion.classList.add("boton-activo");
    btnRegistro.classList.remove("boton-activo");
});

btnRegistro.addEventListener("click", function () {
    // Agrega la clase "activo" al botón activo
    btnRegistro.classList.add("activo");
    btnIniciarSesion.classList.remove("activo");
    
    // Cambia los estilos de los botones
    btnRegistro.classList.add("boton-activo");
    btnIniciarSesion.classList.remove("boton-activo");
});




   const passwordInput = document.getElementById("password");
    const showPasswordButton = document.getElementById("verContraseña");

    showPasswordButton.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            passwordInput.type = "password";
            showPasswordButton.innerHTML = '<i class="fas fa-eye"></i>';
        }
    });


 