<?php
require_once('modelo/excursionesModel.php');

class ExcursionesController {
    private $excursionModel;

    public function __construct() {
        $this->excursionModel = new ExcursionesModel();
    }

    public static function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['h']) && $_POST['h'] == 'guardar') {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $fecha = $_POST['fecha'];
            $precio = $_POST['precio'];
            $informacion = $_POST['informacion'];
    
            // Validar que los campos no estén vacíos
            if (empty($nombre) || empty($descripcion) || empty($fecha) || empty($precio) || empty($informacion)) {
                echo "Todos los campos son obligatorios.";
                return;
            }
    
            $modelexcursion = new ExcursionesModel();
            if ($modelexcursion->guardarExcursion($nombre, $descripcion, $fecha, $precio, $informacion)) {
                header("Location: " . urlsite . "?i=excursion");
                exit();
            } else {
                echo "Error al guardar la excursión.";
            }
        }
    }

    public static function editar() {
        $id = $_REQUEST['id'];
        $modelexcursion = new ExcursionesModel();
        $datos = $modelexcursion->obtenerExcursionId($id);
        require_once('vista/admin/excursiones/editarExc.php');  // Vista para editar excursiones
    }

    public static function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['h'] === 'actualizar') {
            try {
                // Conexión PDO
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=riquezasdelsur', 'root', 'Alumno.');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Consulta SQL para actualizar
                $sql = "UPDATE excursiones 
                        SET nombre = :nombre, 
                            descripcion = :descripcion, 
                            fecha = :fecha, 
                            precio = :precio, 
                            informacion = :informacion
                        WHERE id_excursion = :id";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $_POST['id']);
                $stmt->bindParam(':nombre', $_POST['nombre']);
                $stmt->bindParam(':descripcion', $_POST['descripcion']);
                $stmt->bindParam(':fecha', $_POST['fecha']);
                $stmt->bindParam(':precio', $_POST['precio']);
                $stmt->bindParam(':informacion', $_POST['informacion']);
                $stmt->execute();

                // Redirección al listado de excursiones
                header("Location: ?i=excursion");
                exit();
            } catch (PDOException $e) {
                echo "Error al actualizar la excursión: " . $e->getMessage();
            }
        }
    }

    public static function eliminar() {
        $id = $_GET['id']; // Obtiene el ID enviado por la URL
        $modelexcursion = new ExcursionesModel();
        if ($modelexcursion->eliminarExcursion($id)) {
            header("Location: ?i=excursion");
            exit();
        } else {
            echo "Error al eliminar la excursión.";
        }
    }
}
?>
