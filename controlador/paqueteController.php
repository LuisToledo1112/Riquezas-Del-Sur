<?php
require_once('modelo/paqueteModel.php');
class PaqueteController{
    private $paqueteModel;
    public function __construct(){
        $this->paqueteModel = new PaqueteModel();
    }
    public static function guardar() {
        $nombre = $_REQUEST['Nombre'] ?? null;
        $descripcion = $_REQUEST['Descripcion'] ?? null;
        $fecha_viaje = $_REQUEST['Fecha_viaje'] ?? null;
        $precio = $_REQUEST['Precio_paquete'] ?? null;
        $hora_salida = $_REQUEST['hora_salida'] ?? null;
        $hora_llegada = $_REQUEST['hora_llegada'] ?? null;

        if ($nombre && $descripcion && $fecha_viaje && $precio && $hora_salida && $hora_llegada) {
            $modelpaquete = new PaqueteModel();
            $resultado = $modelpaquete->guardarPaquete($nombre, $descripcion, $fecha_viaje, $precio, $hora_salida, $hora_llegada);
            header("Location: ?i=paquete");
        } else {
            echo "Datos incompletos.";
        }
    }
    
    public static function editar(){
        $id = $_REQUEST['id'];
        $modelpaquete = new PaqueteModel();
        $datos = $modelpaquete->obtenerPaqueteId($id);
        require_once('vista/admin/paquetes/editarPaq.php');  // Vista para editar empleados
    }

    public static function actualizar() {
        $id = $_POST['id']; // Asegúrate de que el ID se esté enviando desde el formulario
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        $fecha_viaje = $_REQUEST['fecha_viaje'];
        $precio = $_REQUEST['precio']; // Corregido de 'recio_paquete' a 'precio'
        $hora_salida = $_REQUEST['hora_salida'];
        $hora_llegada = $_REQUEST['hora_llegada'];
        
        $modelpaquete = new PaqueteModel();
        $resultado = $modelpaquete->editarPaquete($id, $nombre, $descripcion, $fecha_viaje, $precio, $hora_salida, $hora_llegada);
    
        // Redirección a la vista de paquetes
        if ($resultado) {
            header("Location: ?i=paquete");
            exit();
        } else {
            echo "Error al actualizar el paquete."; // Mensaje de error
        }
    }

    public static function eliminar() {
        $id = $_GET['id']; 
        $modelpaquete = new PaqueteModel();
    
        if ($modelpaquete->eliminarPaquete($id)) {
            header("Location: ?i=paquete");
            exit();
        } else {
            echo "Error al eliminar el empleado.";
        }
    }
}

?>