<?php
class ClienteModel {
    private $listaClientes;

    public function __construct() {
        $this->listaClientes = array();
    }

    public function mostrarCliente() {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM Cliente;";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaClientes[] = $filas;
        }
        return $this->listaClientes;
    }

    public function guardarCliente($nombre, $apellido, $telefono, $correo, $password) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "INSERT INTO Cliente (nombre, apellido, telefono, correo, password)
                         VALUES (:nombre, :apellido, :telefono, :correo, :password)";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $password); 
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar cliente: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerClienteId($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM Cliente WHERE id_cliente = :id_cliente;";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_cliente', $id, PDO::PARAM_INT);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaClientes[] = $filas;
        }
        return $this->listaClientes;
    }

    public function editarCliente($id, $nombre, $apellido, $telefono, $correo, $password) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "UPDATE Cliente 
                         SET nombre = :nombre, 
                             apellido = :apellido, 
                             telefono = :telefono, 
                             correo = :correo, 
                             password = :password 
                         WHERE id_cliente = :id";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $password);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al editar cliente: " . $e->getMessage();
            return false;
        }
    }

    public function eliminarCliente($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "DELETE FROM Cliente WHERE id_cliente = :id";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al eliminar el cliente: " . $e->getMessage();
            return false;
        }
    }
}
?>