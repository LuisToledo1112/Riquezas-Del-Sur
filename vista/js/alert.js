document.addEventListener("DOMContentLoaded", () => {
    // Selecciona todos los elementos con la clase "boton-alerta"
    const botones = document.querySelectorAll(".boton-alerta");

    // Itera sobre cada botón y agrega un evento click
    botones.forEach((boton) => {
        boton.addEventListener("click", () => {
            // Muestra la alerta SweetAlert
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "No has iniciado sesión o registrado!!!!!!",
                footer: '<a href="./?i=registro">Por favor Inicia o Registrate aqui</a>'
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    // Selecciona todos los elementos con la clase "BotonesAccion2"
    const botones = document.querySelectorAll(".BotonesAccion2");

    // Itera sobre cada botón y agrega un evento click
    botones.forEach((boton) => {
        boton.addEventListener("click", (event) => {
            // Previene la acción predeterminada del enlace
            event.preventDefault();

            // Almacena la URL del enlace
            const url = boton.getAttribute("href");

            // Muestra la alerta de SweetAlert
            Swal.fire({
                title: "¿Estás seguro de eliminar este elemento?",
                text: "No podrás deshacer esta acción",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, redirige a la URL
                    window.location.href = url;
                } else {
                    Swal.fire("Acción cancelada", "El elemento no fue eliminado", "info");
                }
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", () => {
    // Selecciona todos los elementos con la clase "boton-alerta"
    const boton = document.querySelectorAll(".guardarCambios");

    // Itera sobre cada botón y agrega un evento click
    botones.forEach((boton) => {
        boton.addEventListener("click", () => {
            // Muestra la alerta SweetAlert
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
              });
            
        });
    });
});
