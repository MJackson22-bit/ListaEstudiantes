<?php
include_once("persona.php");
include_once("serializarArchivo.php");
include_once("validarDatos.php");

if(isset($_POST['submit'])){

    $corre = $_REQUEST['correo'];
    $nombre = $_REQUEST['nombre'];
    $carnet = $_REQUEST['carnet'];
    $edad = $_REQUEST['edad'];
    $curso = $_REQUEST['curso'];

    if(is_uploaded_file($_FILES['imagen1']['tmp_name'])){

        $nombreDirectorio = "image/";
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES['imagen1']['name'];
        move_uploaded_file ($_FILES['imagen1']['tmp_name'],
        $nombreDirectorio . $nombreFichero);

        $validado = Validar($corre,$nombre,$carnet,$edad,$curso,$nombreFichero);
    
        if($validado){
            echo "todo bien";
            $ListaAlumno = serializarArchivo::deserializar();
    
            $NuevoAlumno = new Alumno($corre,$nombre,$carnet,$edad,$curso,$nombreFichero);
            array_push($ListaAlumno,$NuevoAlumno);
            $resultado = serializarArchivo::serializar($ListaAlumno);
        
            if($resultado){
                echo "<h1>Datos ingresado correctamente</h1>";    
            }else{
                print("error");
            }
        }else{
            echo "llene los campos";
        }
    }else{
        echo "No se ha podudo subir el archivo";
    }
}
?>

<a href="index.html" class="button">Regresar</a>
<style>
.button{
    background: steelblue;
    text-decoration: none;
    color: #fff;
    margin: 30px;
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