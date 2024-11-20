<?php
require_once('modelo/clienteModel.php');
class ClienteController{
    private $clienteModel;
    public function __construct(){
        $this->clienteModel = new ClienteModel();
    }
    public static function guardar() {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        if ($nombre && $apellido && $telefono && $correo && $password) {
            $modelcliente = new ClienteModel();
            $resultado = $modelcliente->guardarCliente($nombre, $apellido, $telefono, $correo, $password);
            header("Location: ?i=index2");
        } else {
            echo "Datos incompletos.";
        }
    }
    
    public static function editarC(){
        $id = $_REQUEST['id'];
        $modelcliente = new ClienteModel();
        $datos = $modelcliente->obtenerClienteId($id);
        require_once('vista/admin/clientes/editarC.php');  // Vista para editar empleados
    }

    public static function actualizar() {
        // Recoger datos del formulario
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
    
        // Instancia del modelo y ejecución de la actualización
        $modelcliente = new ClienteModel();
        $resultado = $modelcliente->editarCliente($id, $nombre, $apellido, $telefono, $correo, $password);
    
        // Redirección a la vista de empleados
        if ($resultado) {
            header("Location: ?i=cliente");
            exit();
        } else {
            echo "Error al actualizar el empleado.";
        }
    }

    public static function eliminar() {
        $id = $_GET['id']; // Obtiene el ID enviado por la URL
        $modelcliente = new ClienteModel();
    
        // Ejecuta la función de eliminación en el modelo
        if ($modelcliente->eliminarCliente($id)) {
            // Redirige a la vista principal después de eliminar
            header("Location: ?i=cliente");
            exit();
        } else {
            echo "Error al eliminar el cliente.";
        }
    }
    
}
?>