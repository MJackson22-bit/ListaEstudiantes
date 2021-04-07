<?php
class Alumno {
    public $correo;
    public $nombre;
    public $carnet;
    public $edad;
    public $curso;
    public $foto;

    public function __construct($arg_correo = "", $arg_nombre = "", $arg_carnet = "", $arg_edad = "", $arg_curso = "", $arg_foto = "") {
        $this -> correo = $arg_correo;
        $this -> nombre = $arg_nombre;
        $this -> carnet = $arg_carnet;
        $this -> edad = $arg_edad;
        $this -> curso = $arg_curso;
        $this -> foto = $arg_foto;
    }  
}
    
?>