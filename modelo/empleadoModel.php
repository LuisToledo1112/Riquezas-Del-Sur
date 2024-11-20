<?php

    class EmpleadoModel{
        
        private $listaEmpleados;
    
    public function __construct() {
        $this->listaEmpleados = array();
    }
    
    public function mostrarEmpleado() {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM empleado;";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaEmpleados[] = $filas;
        }
        return $this->listaEmpleados;
    }

    public function guardarEmpleado($nombre, $apellido, $tipo, $fecha_nacimiento, $CURP, $genero, $telefono, $correo, $password) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "INSERT INTO empleado (nombre, apellido, tipo, fecha_nacimiento, CURP, genero, telefono, correo, password)
                         VALUES (:nombre, :apellido, :tipo, :fecha_nacimiento, :CURP, :genero, :telefono, :correo, :password)";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
            $stmt->bindParam(':CURP', $CURP);
            $stmt->bindParam(':genero', $genero);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $password); 
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar empleado: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerEmpleadoId($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM empleado WHERE id_empleado = :id_empleado;";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_empleado', $id, PDO::PARAM_INT);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaEmpleados[] = $filas;
        }
        return $this->listaEmpleados;
    }

    public function editarEmpleado($id, $nombre, $apellido, $tipo, $fecha_nacimiento, $CURP, $genero, $telefono, $correo, $password) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "UPDATE Empleado 
                         SET nombre = :nombre, 
                             apellido = :apellido, 
                             tipo = :tipo, 
                             fecha_nacimiento = :fecha_nacimiento, 
                             CURP = :curp, 
                             genero = :genero, 
                             telefono = :telefono, 
                             correo = :correo, 
                             password = :password 
                         WHERE id_empleado = :id";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
            $stmt->bindParam(':curp', $CURP);
            $stmt->bindParam(':genero', $genero);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $password);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al editar empleado: " . $e->getMessage();
            return false;
        }
    }

    public function eliminarEmpleado($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "DELETE FROM Empleado WHERE id_empleado = :id";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al eliminar el empleado: " . $e->getMessage();
            return false;
        }
    }
    }
?>