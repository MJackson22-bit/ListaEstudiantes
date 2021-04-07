<?php
include_once("capturaDatos.php");

function Validar($correo,$nombre,$carnet,$edad,$curso){

    if(!empty($correo) && !empty($nombre) && !empty($carnet && !empty($edad) && !empty($curso))){
        return true;
    }else{
        return false;
    }
}
?>