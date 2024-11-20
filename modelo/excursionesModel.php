<?php

    class ExcursionesModel{
        
        private $listaExcursiones;
    
    public function __construct() {
        $this->listaExcursiones = array();
    }
    
    public function mostrarExcursion() {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM excursiones;";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaExcursiones[] = $filas;
        }
        return $this->listaExcursiones;
    }

    public function guardarExcursion($nombre, $descripcion, $fecha, $precio, $informacion) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "INSERT INTO excursiones (nombre, descripcion, fecha, precio, informacion)
                         VALUES (:nombre, :descripcion, :fecha, :precio, :informacion)";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':informacion', $informacion);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar excursion: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerExcursionId($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM excursiones WHERE id_excursion = :id_excursion;";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_excursion', $id, PDO::PARAM_INT);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaExcursiones[] = $filas;
        }
        return $this->listaExcursiones;
    }

    public function editarExcursiones($id, $nombre, $descripcion, $fecha, $precio, $informacion ) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "UPDATE excursiones 
                         SET nombre = :nombre, 
                             descripcion = :descripcion, 
                             fecha = :fecha, 
                             precio = :precio, 
                             informacion = :informacion, 
                         WHERE id_excursion = :id";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id_excursion', $id);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':informacion', $informacion);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al editar excursion: " . $e->getMessage();
            return false;
        }
    }

    public function eliminarExcursion($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            $consulta = "DELETE FROM excursiones WHERE id_excursion = :id";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al eliminar el excursion: " . $e->getMessage();
            return false;
        }
    }
    }
?>