<?php
require_once('modelo/empleadoModel.php');
class EmpleadoController{
    private $empleadoModel;
    public function __construct(){
        $this->empleadoModel = new EmpleadoModel();
    }
    public static function guardar() {
        // Asegúrate de que todas las variables recibidas están definidas
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $tipo = $_REQUEST['tipo'];
        $fecha_nacimiento = $_REQUEST['Fecha_nacimiento'];
        $CURP = $_REQUEST['CURP'];
        $genero = $_REQUEST['Genero'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $password = $_REQUEST['password'];
        $modelempleado = new EmpleadoModel();
        $resultado = $modelempleado->guardarEmpleado($nombre, $apellido, $tipo, $fecha_nacimiento, $CURP, $genero, $telefono, $correo, $password);
        header("location:".urlsite."?i=empleado");
    }
    
    public static function editar(){
        $id = $_REQUEST['id'];
        $modelproducto = new EmpleadoModel();
        $datos = $modelproducto->obtenerEmpleadoId($id);
        require_once('vista/admin/empleados/editar.php');  // Vista para editar empleados
    }

    public static function actualizar() {
        // Recoger datos del formulario
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tipo = $_POST['tipo'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $CURP = $_POST['curp'];
        $genero = $_POST['genero'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
    
        // Instancia del modelo y ejecución de la actualización
        $modelempleado = new EmpleadoModel();
        $resultado = $modelempleado->editarEmpleado($id, $nombre, $apellido, $tipo, $fecha_nacimiento, $CURP, $genero, $telefono, $correo, $password);
    
        // Redirección a la vista de empleados
        if ($resultado) {
            header("Location: ?i=empleado");
            exit();
        } else {
            echo "Error al actualizar el empleado.";
        }
    }

    public static function eliminar() {
        $id = $_GET['id']; // Obtiene el ID enviado por la URL
        $modelempleado = new EmpleadoModel();
    
        // Ejecuta la función de eliminación en el modelo
        if ($modelempleado->eliminarEmpleado($id)) {
            // Redirige a la vista principal después de eliminar
            header("Location: ?i=empleado");
            exit();
        } else {
            echo "Error al eliminar el empleado.";
        }
    }
    
        
}

?>