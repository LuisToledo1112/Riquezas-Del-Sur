<?php
class Conexion extends PDO{
    // private $hostBD='sql303.infinityfree.com';
    // private $nombreBD='if0_37549497_riquezasdelsur';
    // private $usuarioBD='if0_37549497';
    // private $passwordBD='u7Knb6YuLzVh';
    private $hostBD='127.0.0.1';
    private $nombreBD='riquezasdelsur';
    private $usuarioBD='root';
    private $passwordBD='Alumno.';
    public function __construct(){
        try {
            parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            exit;
        }
    }
}
?>