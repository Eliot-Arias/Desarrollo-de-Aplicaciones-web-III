<?php

include 'includes/header.php';

//Constructor property Promotion
class Empleado {
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo
    ){}
}

$juan = new Empleado('juan', 'De la Torre', 'TI', 'juan@empresa.com', 006);
$karen = new Empleado('karen', 'Perez', 'MKT', 'karen@empresa.com', 007);

echo "<pre>";
var_dump($juan);
echo "</pre><br>";

echo "<pre>";
var_dump($karen);
echo "</pre><br>";
