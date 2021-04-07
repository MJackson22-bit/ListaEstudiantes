<?php
include_once("persona.php");
include_once("serializarArchivo.php");

if(isset($_POST['actualizar'])){
    $listaPersonas = serializarArchivo::deserializar();

    for($i = 0; $i < count($listaPersonas); $i++){
        if($listaPersonas[$i]->carnet == $_POST['carnet']){
            
            $listaPersonas[$i]->nombre = $_POST['nombre'];
            $listaPersonas[$i]->correo = $_POST['correo'];
            $listaPersonas[$i]->edad = $_POST['edad'];
            $listaPersonas[$i]->curso = $_POST['curso'];
            
            if(!(empty($_POST['foto']))){
                $listaPersonas[$i]->foto = $_POST['foto'];
            }
            break;
        }
    }
    $resultado = serializarArchivo::serializar($listaPersonas);

    if($resultado){
        echo "<p>Dato actualizado correctamente</p>";
    }else{
        echo "<p>Error al actualizar el dato</p>";
    }
}
?>

<a href="listaAlumnos.php" class="button">Regresar</a>