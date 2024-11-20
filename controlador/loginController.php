<?php
class LoginController {
    public function login() {
        session_start(); // Iniciar sesión

        if (isset($_POST['correo']) && isset($_POST['password'])) {
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            include_once('modelo/loginModel.php');
            $authModel = new LoginModel();

            // Verificar el usuario en las tablas de empleados y clientes
            $usuario = $authModel->verificarUsuario($correo, $password);

            if ($usuario) {
                // Datos correctos
                $_SESSION['success'] = 'Inicio de sesión exitoso. Bienvenido, ' . htmlspecialchars($usuario['nombre']) . '.';

                // Iniciar sesión con los datos del usuario
                $_SESSION['id'] = $usuario['id_empleado'] ?? $usuario['id_cliente']; // Guardar ID según el tipo de usuario
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['rol'] = $usuario['rol']; // El rol del usuario, que puede ser 'empleado' o 'cliente'

                // No redirigir aún, solo guardar el estado de éxito
                header('Location: ?i=iniciarsesion');
                exit;
            } else {
                // Credenciales incorrectas
                $_SESSION['error'] = 'El correo o la contraseña son incorrectos.';
                // Redirigir a la misma página de inicio de sesión
                header('Location: ?i=iniciarsesion');
                exit;
            }
        }
    }
}
?>