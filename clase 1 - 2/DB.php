<?php

class DB{
    // protected $nombre;

    // public function __construct($nombre)
    // {
    //     $this->nombre = $nombre;
    // }
    // public function guardar(){
    //     echo "Almacenando... " . $this->nombre;
    // }


    protected $servername;
    protected $database;
    protected $username;
    protected $password;
    private $conn;

    public function __construct(){
        $this->servername = "localhost";
        $this->database = "prueba";
        $this->username = "root";
        $this->password = "";
    }

    public function guardar($nombre, $apellido, $departamento, $email, $codigo){
        //Create Connection
        $conn = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username,$this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `persona` (`nombre`, `apellido`, `departamento`, `email`, `codigo`) VALUES ('$nombre', '$apellido', '$departamento', '$email', '$codigo');";

        $conn->query($sql);
    }

}