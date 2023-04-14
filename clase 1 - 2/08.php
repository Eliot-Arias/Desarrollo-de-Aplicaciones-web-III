<?php 

include 'includes/header.php';

//Modificadores de acceso 
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
    public function obtenerNombre(){
        return $this->nombre;
    }
    public function cambiarNombre(){
        $this->nombre = $nombre;
    }

}


$juan = new Empleado('juan', 'De la Torre', 'TI', 'juan@empresa.com', 006);
$karen = new Empleado('karen', 'Perez', 'MKT', 'karen@empresa.com', 007);


echo "<pre>";
var_dump($juan);
echo "</pre><br>";

echo "<pre>";
var_dump($karen);
echo "</pre><br>";