<?php
include "include/header.php";

//Atributos de una clase
class Empleado{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}
$empleado = new Empleado;
$empleado ->nombre="Juan";
$empleado->apellido="De la torre";

echo "<pre>";
var_dump($empleado);
echo "<pre>";

$empleado = new Empleado;
$empleado ->nombre="Karen";
$empleado->apellido="Perez";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";


