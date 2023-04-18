<?php 

include 'includes/header.php';

//Clases Abstractas
abstract class Persona {
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;

    public function __construct($nombre, $apellido,$email,$telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }
    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " " . $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }
}

// Herencia
class Empleado extends Persona{
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento){
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }

}

class Proveedor extends Persona{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa){
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }

    public function mostrarInformacion(){
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email . " de la empresa" . $this->empresa;
    }
}


$empleado = new Empleado('Juan', 'De la Torre', 'juan@empresa.com', 103091043140, 005, 'TI');
$proveedor = new Proveedor('karen', 'Perez', 'karen@empresa.com', 19030139, "Tik Tok");


echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($proveedor);
echo "</pre><br>";

$empleado->mostrarInformacion();

echo "<br>";

$proveedor->mostrarInformacion();

echo "<br>";

echo $proveedor->getTelefono();
