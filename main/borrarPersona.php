<?php
include_once("persona.php");
include_once("serializarArchivo.php");

$eliminado = false;

if(isset($_GET['id'])){
    $idPersona = $_GET['id'];

    $listarPersonas = serializarArchivo::deserializar();
    $i = 0;

    foreach($listarPersonas as $personaActual){
        if($listarPersonas[$i]->carnet == $idPersona){
            $personaActual = $listarPersonas[$i];
            break;
        }
        $i++;
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/styleBorrarPersona.css">

    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h1>Elimar Alumno De La Lista</h1>
        <hr>
        <div class="alumno">
                <div class="foto">
                    <p>FOTO</p>
                    <br>
                    <?php
                        if($eliminado == true){
                            echo "ELIMINADO";
                        }else{
                            echo "<img src='image/$personaActual->foto'>";
                        }
                    ?>
                </div>
                <div class="datos">
                    <p>INFORMACION</p>
                    <br>
                    <form action="eliminarPersona.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $personaActual->carnet; ?>">
                        <p>Carnet: <?php echo $personaActual->carnet; ?></p>                        
                        <p>Nombre: <?php echo $personaActual->nombre; ?></p>
                        <p>Correo: <?php echo $personaActual->correo; ?></p>
                        <p>Edad: <?php echo $personaActual->edad; ?></p>
                        <p>Curso: <?php echo $personaActual->curso; ?></p>
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                </div>

        </div>
    </div>

</body>
</html>

<br>
<a href="index.html" class="button">Regresar</a>