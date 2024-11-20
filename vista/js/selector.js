function verificarRol(event) {
    event.preventDefault(); // Prevenir el envío del formulario
    const correo = document.getElementById("correo").value; // Obtener el correo ingresado
    let urlDestino;

    // Verificar el rol según el correo
    if (correo.endsWith("@Empleado.com")) {
        urlDestino = "./?i=worker"; // Redirige a la interfaz de empleado
    } else if (correo.endsWith("@Admin.com")) {
        urlDestino = "./?i=administrador"; // Redirige a la interfaz de administrador
    } else {
        urlDestino = "./?i=index2"; // Redirige a la interfaz de cliente
    }

    setTimeout(() => {
        window.location.href = urlDestino; // Realiza la redirección
    }, 2000); // 2000 milisegundos = 2 segundos
}
