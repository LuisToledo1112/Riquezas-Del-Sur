<?php

class RutaModel {
    private $listaRutas;

    public function __construct() {
        $this->listaRutas = array();
    }

    public function mostrarRuta() {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM Rutas;";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->listaRutas[] = $filas;
        }
        return $this->listaRutas;
    }

    public function guardarRuta($nombre, $descripcion, $fecha, $precio, $informacion) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            // Preparar la consulta de inserción
            $consulta = "INSERT INTO Rutas (nombre, descripcion, fecha, precio, informacion)
                         VALUES (:nombre, :descripcion, :fecha, :precio, :informacion)";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':informacion', $informacion);

            // Ejecutar la consulta
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar ruta: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerRutaId($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM Rutas WHERE id_ruta = :id_ruta;";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_ruta', $id, PDO::PARAM_INT);
        $resultado->execute();
        $this->listaRutas = $resultado->fetchAll(PDO::FETCH_ASSOC);  // Asegúrate de usar fetchAll en lugar de un ciclo innecesario
        return $this->listaRutas;
    }

    public function editarRuta($id, $nombre, $descripcion, $fecha, $precio, $informacion) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            // Preparar la consulta de actualización
            $consulta = "UPDATE Rutas 
                         SET nombre = :nombre, 
                             descripcion = :descripcion, 
                             fecha = :fecha, 
                             precio = :precio, 
                             informacion = :informacion 
                         WHERE id_ruta = :id_ruta";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id_ruta', $id);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':informacion', $informacion);

            // Ejecutar la consulta
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al editar ruta: " . $e->getMessage();
            return false;
        }
    }

    public function eliminarRuta($id) {
        include_once('conexion.php');
        $cnn = new Conexion();
        try {
            // Preparar la consulta de eliminación
            $consulta = "DELETE FROM Rutas WHERE id_ruta = :id_ruta";
            $stmt = $cnn->prepare($consulta);
            $stmt->bindParam(':id_ruta', $id, PDO::PARAM_INT);

            // Ejecutar la consulta
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al eliminar la ruta: " . $e->getMessage();
            return false;
        }
    }
}

?>