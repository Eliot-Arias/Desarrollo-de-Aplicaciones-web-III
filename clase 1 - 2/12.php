<?php

include 'includes/header.php';
//mmetodos Estaticos
class Empleado {
    //Public, acceso en cualquier lugar (clase u objeto)
    //Protected, acceso en la clase
    //Public, private, protected

    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
        self::$nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }
    public function cambiarNombre($nombre){
        $this->nombre = $nombre;
    }

    public static function obtenerEmpleado(){
        echo "Desde metodo estatico";
    }
    public static function getNombre(){
        return self::$nombre;
    }

    
}

//Empleado::obtenerEmpleado();  

$juan = new Empleado('Juan', 'De la Torre', 'TI', 'juan@empresa.com', 006);

echo $juan::getNombre();

echo "<pre>";
var_dump($juan);
echo "</pre><br>";