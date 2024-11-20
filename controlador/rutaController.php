<?php
require_once('modelo/rutaModel.php');

class RutaController {
    private $rutaModel;

    public function __construct() {
        $this->rutaModel = new RutaModel();
    }

    public static function guardar() {
        // Recoge los datos enviados por el formulario
        $nombre = $_REQUEST['nombre'] ?? null;
        $descripcion = $_REQUEST['descripcion'] ?? null;
        $fecha = $_REQUEST['fecha'] ?? null;
        $precio = $_REQUEST['precio'] ?? null;
        $informacion = $_REQUEST['informacion'] ?? null;

        // Verifica que los datos no estén vacíos
        if ($nombre && $descripcion && $fecha && $precio && $informacion) {
            $modelruta = new RutaModel();
            $resultado = $modelruta->guardarRuta($nombre, $descripcion, $fecha, $precio, $informacion);

            if ($resultado) {
                // Redirige si los datos fueron guardados correctamente
                header("Location: ?i=ruta");
            } else {
                echo "Error al guardar la ruta.";
            }
        } else {
            echo "Todos los campos son obligatorios.";
        }
    }

    public static function editar() {
        $id = $_REQUEST['id'];
        $modelruta = new RutaModel();
        $datos = $modelruta->obtenerRutaId($id);
        require_once('vista/admin/rutas/editarRuta.php');  // Vista para editar rutas
    }

    public static function actualizar() {
        // Recoger datos del formulario
        $id = $_POST['id_ruta']; // Asegúrate de que el nombre del campo sea correcto
        $nombre = $_POST['nombre'] ?? null;
        $descripcion = $_POST['descripcion'] ?? null;
        $fecha = $_POST['fecha'] ?? null;
        $precio = $_POST['precio'] ?? null;
        $informacion = $_POST['informacion'] ?? null;

        // Verifica que los datos no estén vacíos
        if ($nombre && $descripcion && $fecha && $precio && $informacion) {
            $modelruta = new RutaModel();
            $resultado = $modelruta->editarRuta($id, $nombre, $descripcion, $fecha, $precio, $informacion);

            if ($resultado) {
                header("Location: ?i=ruta");
                exit();
            } else {
                echo "Error al actualizar la ruta.";
            }
        } else {
            echo "Todos los campos son obligatorios.";
        }
    }

    public static function eliminar() {
        $id = $_GET['id']; // Obtiene el ID enviado por la URL
        $modelruta = new RutaModel();

        // Ejecuta la función de eliminación en el modelo
        if ($modelruta->eliminarRuta($id)) {
            header("Location: ?i=ruta");
            exit();
        } else {
            echo "Error al eliminar la ruta.";
        }
    }
}
?>