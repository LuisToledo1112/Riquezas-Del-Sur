<?php

    class PaqueteModel{
        
        private $listaPaquetes;
    
    public function __construct() {
        $this->listaPaquetes = array();
    }
    
    public function mostrarPaquetes() {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM Paquete;";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaPaquetes[] = $filas;
        }
        return $this->listaPaquetes;
    }

    public function guardarPaquete($nombre, $descripcion, $fecha_viaje, $precio, $hora_salida, $hora_llegada) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "INSERT INTO Paquete (Nombre, Descripcion, Fecha_viaje, Precio_paquete, hora_salida, hora_llegada)
                         VALUES (:Nombre, :Descripcion, :Fecha_viaje, :Precio_paquete, :hora_salida, :hora_llegada)";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':Nombre', $nombre);
            $stmt->bindParam(':Descripcion', $descripcion);
            $stmt->bindParam(':Fecha_viaje', $fecha_viaje);
            $stmt->bindParam(':Precio_paquete', $precio);
            $stmt->bindParam(':hora_salida', $hora_salida);
            $stmt->bindParam(':hora_llegada', $hora_llegada);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar el paquete: " . $e->getMessage();
            return false;
        }
    }
    

    public function obtenerPaqueteId($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM Paquete WHERE id_paquete = :id_paquete;";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_paquete', $id, PDO::PARAM_INT);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaPaquetes[] = $filas;
        }
        return $this->listaPaquetes;
    }

    public function editarPaquete($id, $nombre, $descripcion, $fecha_viaje, $precio, $hora_salida, $hora_llegada) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "UPDATE Paquete
                         SET Nombre = :Nombre, 
                             Descripcion = :Descripcion, 
                             Fecha_viaje = :Fecha_viaje, 
                             Precio_paquete = :Precio_paquete, 
                             hora_salida = :hora_salida, 
                             hora_llegada = :hora_llegada
                         WHERE id_paquete = :id_paquete"; 
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id_paquete', $id, PDO::PARAM_INT);
            $stmt->bindParam(':Nombre', $nombre);
            $stmt->bindParam(':Descripcion', $descripcion);
            $stmt->bindParam(':Fecha_viaje', $fecha_viaje);
            $stmt->bindParam(':Precio_paquete', $precio);
            $stmt->bindParam(':hora_salida', $hora_salida);
            $stmt->bindParam(':hora_llegada', $hora_llegada);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al editar el paquete: " . $e->getMessage();
            return false;
        }
    }
    

    public function eliminarPaquete($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "DELETE FROM Paquete WHERE id_paquete = :id";
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