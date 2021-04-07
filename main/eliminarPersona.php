<style>
.button{
    background: steelblue;
    text-decoration: none;
    color: #fff;
    margin-left: 30px;
    padding: 10px;
    border: 2px solid transparent;
    border-radius: 5px;
    transition: all .3s;
}
.button:hover{
    background: #fff;
    color: #333;
    border: 2px solid steelblue;
    cursor: pointer;
}
</style>


<?php
include_once("persona.php");
include_once("serializarArchivo.php");

if(isset($_POST['eliminar'])){
    $listarPersonas = serializarArchivo::deserializar();

    for($i = 0; $i < count($listarPersonas); $i++){
        if($listarPersonas[$i]->carnet == $_POST['id']){
            unset($listarPersonas[$i]);
            $listarPersonas = array_values($listarPersonas);
            break;
        }
    }
    $resultado = serializarArchivo::serializar($listarPersonas);
    $eliminado = true;
    if($resultado){
        echo "<p>Alumno borrado correctamente</p>";
    }else{
        echo "<p>Error al borrar el Alumno</p>";
    }
}
?>
<a href="index.html" class="button">Regresar</a>