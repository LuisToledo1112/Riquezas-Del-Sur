<?php session_start(); ?> <!-- Siempre al inicio del archivo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="vista/css/styleSecure.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- Mostrar alerta si hay un error -->
                <?php if (isset($_SESSION['error'])): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: '<?php echo $_SESSION['error']; ?>',
                                confirmButtonText: 'Aceptar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = '?i=iniciarsesion'; // Redirigir a la misma página
                                }
                            });
                        });
                    </script>
                    <?php unset($_SESSION['error']); // Limpiar el mensaje de error ?>
                <?php endif; ?>

                <!-- Mostrar alerta si hay un inicio de sesión exitoso -->
                <?php if (isset($_SESSION['success'])): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: '<?php echo $_SESSION['success']; ?>',
                                confirmButtonText: 'Aceptar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Redirigir según el rol
                                    <?php if ($_SESSION['rol'] === 'empleado'): ?>
                                        window.location.href = '?i=worker'; // Redirigir a la vista de empleado
                                    <?php else: ?>
                                        window.location.href = '?i=index2'; // Redirigir a la vista de cliente
                                    <?php endif; ?>
                                }
                            });
                        });
                    </script>
                    <?php unset($_SESSION['success']); // Limpiar el mensaje de éxito ?>
                <?php endif; ?>
                <div class="form">
                    <ul class="tab-group">
                        <li class="tab active"><a href="?i=registro">Registro</a></li>
                        <li class="tab"><a href="?i=iniciarSesion" onclick="toggleLogin()">Iniciar Sesión</a></li>
                    </ul>
                    <div id="signup">
                        <h1 style="color:beige">¡Inicia Tu Registro Para La Aventura!</h1>
                        <form method="POST" action="?l=login">
                                <div class="mb-3">
                                    <input type="email" id="correo" name="correo" required placeholder="Ingresa tu correo">
                                </div>
                                <div class="mb-3">
                                    <input type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                            </form>
                        </div>
                </div>
        </div>
</body>
</html>