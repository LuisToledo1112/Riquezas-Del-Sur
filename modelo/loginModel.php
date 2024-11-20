<?php
class LoginModel {
    private $db;

    public function __construct() {
        include_once('conexion.php');
        $this->db = new Conexion();
    }

    public function verificarUsuario($correo, $password) {
        try {
            // Verificar en la tabla de empleados
            $consultaEmpleado = "SELECT id_empleado, nombre, 'empleado' AS rol FROM Empleado WHERE correo = :correo AND password = :password";
            $stmtEmpleado = $this->db->prepare($consultaEmpleado);
            $stmtEmpleado->bindParam(':correo', $correo);
            $stmtEmpleado->bindParam(':password', $password);
            $stmtEmpleado->execute();

            if ($stmtEmpleado->rowCount() > 0) {
                return $stmtEmpleado->fetch(PDO::FETCH_ASSOC);
            }

            // Verificar en la tabla de clientes
            $consultaCliente = "SELECT id_cliente, nombre, 'cliente' AS rol FROM Cliente WHERE correo = :correo AND password = :password";
            $stmtCliente = $this->db->prepare($consultaCliente);
            $stmtCliente->bindParam(':correo', $correo);
            $stmtCliente->bindParam(':password', $password);
            $stmtCliente->execute();

            if ($stmtCliente->rowCount() > 0) {
                return $stmtCliente->fetch(PDO::FETCH_ASSOC);
            }

            // Si no se encuentra en ninguna tabla, retorna false
            return false;

        } catch (PDOException $e) {
            echo "Error en la autenticación: " . $e->getMessage();
            return false;
        }
    }
}