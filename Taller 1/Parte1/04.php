<?php
include "includes/header.php";
//Constructores
class Empleado{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre,$apellido,$departamento,$email,$codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;

    }
}
$Juan = new Empleado("Juan","De la torre","TI", "Juan@empresa.com",006);
$Karen = new Empleado("Karen","Perez","MKT","karen@empresa.com",007);

echo "<pre>";
var_dump($Juan);
echo "</pre><br>";

echo "<pre>";
var_dump($Karen);
echo "</pre><br>";