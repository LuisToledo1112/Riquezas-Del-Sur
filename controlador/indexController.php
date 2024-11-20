<?php
require_once('modelo/indexModel.php');
class IndexController{
    private $indexModel;

    public function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function index(){
        require_once("vista/index.php");
    }

    public static function index2(){
        require_once("vista/index2.php");
    }
    public static function registro(){
        require_once("vista/login/Registrarse.php");
    }
    public static function iniciarsesion(){
        require_once("vista/login/IniciarSesion.php");
    }
    public static function paquetes1(){
        require_once("vista/admin/compras/compras1.php");
    }
    public static function excursiones1(){
        require_once("vista/admin/compras/excursiones1.php");
    }
    public static function rutas1(){
        require_once("vista/admin/compras/rutas1.php");
    }
    public static function paquetes(){
        require_once("vista/admin/compras/compras.php");
    }
    public static function excursiones(){
        require_once("vista/admin/compras/excursiones.php");
    }
    public static function rutas(){
        require_once("vista/admin/compras/rutas.php");
    }

    public static function jsemail(){
        require_once("vista/js/selector.js");
    }
    public static function msalert(){
        require_once("vista/js/alert.js");
    }
    public static function administrador(){
        require_once("vista/admin/admin.php");
    }
    public static function ventas(){
        require_once("vista/admin/compras/registro/ventas.php");
    }
    public static function worker(){
        require_once("vista/empleado/empleado.php");
    }

    public static function listareserva(){
        require_once("vista/admin/compras/registro/historeser.php");
    }
    
    public static function empleado(){
        $modelempleado = new EmpleadoModel();
        $datos = $modelempleado->mostrarEmpleado();
        require_once("vista/admin/empleados/mostrarE.php");
    }
    public static function agregarEmpleado(){
        $modelempleado = new EmpleadoModel();
        $datos = $modelempleado->mostrarEmpleado();
        require_once("vista/admin/empleados/agregarE.php");
    }
    public static function cliente(){
        $modelcliente = new ClienteModel();
        $datos =$modelcliente->mostrarCliente();
        require_once("vista/admin/clientes/mostrarC.php");
    }
    public static function agregarCliente(){
        $modelcliente = new ClienteModel();
        $datos =$modelcliente->mostrarCliente();
        require_once("vista/login/Registrarse.php");
    }
    public static function excursion(){
        $modelexcursion = new ExcursionesModel();
        $datos = $modelexcursion->mostrarExcursion();
        require_once("vista/admin/excursiones/mostrarExc.php");
    }
    public static function agregarExcursion(){
        $modelexcursion = new ExcursionesModel();
        $datos = $modelexcursion->mostrarExcursion();
        require_once("vista/admin/excursiones/agregarExc.php");
    }

    public static function paquete(){
        $modelpaquete  = new PaqueteModel();
        $datos = $modelpaquete->mostrarPaquetes();
        require_once("vista/admin/paquetes/mostrarPaq.php");
    }
    public static function agregarPaquete(){
        $modelpaquete = new PaqueteModel(); 
        $datos = $modelpaquete->mostrarPaquetes();
        require_once("vista/admin/paquetes/agregarPaq.php");
    }
    public static function ruta(){
        $modelru = new RutaModel();
        $datos = $modelru->mostrarRuta();
        require_once("vista/admin/rutas/mostrarRuta.php");
    }
    public static function agregarRuta(){
        $modelruta = new RutaModel();
        $datos = $modelruta->mostrarRuta(); 
        require_once("vista/admin/rutas/agregarRuta.php");
    }

    public static function paqueteempleado(){
        $modelpaquete  = new PaqueteModel();
        $datos = $modelpaquete->mostrarPaquetes();
        require_once("vista/empleado/paqueteempleado.php");
    }

    public static function rutaempleado(){
        $modelru = new RutaModel();
        $datos = $modelru->mostrarRuta();
        require_once("vista/empleado/rutaempleado.php");
    }
    public static function excursionempleado(){
        $modelexcursion = new ExcursionesModel();
        $datos = $modelexcursion->mostrarExcursion();
        require_once("vista/empleado/excursionesempleado.php");
    }

    public static function pago(){
        require_once("vista/empleado/pagina_pago.php");
    }
}
?>