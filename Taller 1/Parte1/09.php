<?php

include 'includes/header.php';

//Getters y Setters 
class Empleado {
     //Public, acceso en cualquier lugar (clase u objeto)
    //Protected, acceso en la clase
    //Public, private, pritected
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /** 
     * Get - Para obtener un valor
     * Set - Para modificar un valor
     */
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
}


$juan = new Empleado('juan', 'De la Torre', 'TI', 'juan@empresa.com', 006);
$juan->setNombre("Un nuevo nombre");

$juan->setCodigo('2030');
echo $juan->getCodigo();
echo "<br>";
echo $juan->getNombre();