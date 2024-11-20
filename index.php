<?php
require_once("config.php");
require_once("controlador/clienteController.php");
require_once("controlador/indexController.php");
require_once("controlador/empleadoController.php");
require_once("controlador/excursionesController.php");
require_once("controlador/paqueteController.php");
require_once("controlador/rutaController.php");
require_once("controlador/loginController.php");

// Verificar si se pasa un controlador específico mediante e, i o c

if (isset($_GET['e'])) {
    $metodo = $_GET['e'];
    // Comprobar si el método existe en la clase empleadoController
    if (method_exists('empleadoController', $metodo)) {
        empleadoController::{$metodo}();
    } else {

        echo "Error: El método '$metodo' no existe en empleadoController.";
    }
}if (isset($_GET['l']) && $_GET['l'] === 'login') {
    include_once('controlador/loginController.php');
    $authController = new LoginController();
    $authController->login();
}

elseif (isset($_GET['h'])) {
    $metodo = $_GET['h'];
    if (method_exists('excursionesController', $metodo)) {
        excursionesController::{$metodo}();
    } else {
        // Manejo del error si el método no existe
        echo "Error: El método '$metodo' no existe en excursionesController.";
    }
}
elseif (isset($_GET['p'])) {
    $metodo = $_GET['p'];
    if (method_exists('paqueteController', $metodo)) {
        paqueteController::{$metodo}();
    } else {
        // Manejo del error si el método no existe
        echo "Error: El método '$metodo' no existe en paqueteController.";
    }
}
elseif (isset($_GET['r'])) {
    $metodo = $_GET['r'];
    if (method_exists('rutaController', $metodo)) {
        rutaController::{$metodo}();
    } else {
        // Manejo del error si el método no existe
        echo "Error: El método '$metodo' no existe en rutaController.";
    }
} elseif (isset($_GET['i'])) {
    $metodo = $_GET['i'];
    if (method_exists('indexController', $metodo)) {
        indexController::{$metodo}();
    } else {

        echo "Error: El método '$metodo' no existe en indexController.";
    }
} elseif (isset($_GET['c'])) {
    $metodo = $_GET['c'];
    if (method_exists('clienteController', $metodo)) {
        clienteController::{$metodo}();
    } else {
        // Manejo del error si el método no existe
        echo "Error: El método '$metodo' no existe en clienteController.";
    }
}
?>