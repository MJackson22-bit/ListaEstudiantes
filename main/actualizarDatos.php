<?php
include_once("persona.php");
include_once("serializarArchivo.php");

if(isset($_GET['id'])){
    $idPersona = $_GET['id'];
    $listaPersonas = serializarArchivo::deserializar();

    for($i = 0; $i < count($listaPersonas); $i++){
        if($listaPersonas[$i]->carnet == $idPersona){
            $personaActual = $listaPersonas[$i];
            break;
        }
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/styleActualizar.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="carnet" value="<?php echo $personaActual->carnet; ?>">
            <p>No.Carnet: <?php echo $personaActual->carnet; ?></p><br>
            <label>Nombre</label><br>
            <input type="text" name="nombre" value="<?php echo $personaActual->nombre; ?>"><br><br>
            
            <label>Correo Electronico</label><br>
            <input type="mail" name="correo" value="<?php echo $personaActual->correo; ?>"><br><br>
            
            <label>Edad</label><br>
            <input type="number" name="edad" value="<?php echo $personaActual->edad; ?>"><br><br>
            
            <label>Curso</label><br>
            <input type="text" name="curso" value="<?php echo $personaActual->curso; ?>"><br><br>
            
            <div class="foto">
                <label for="foto"> <img src="image/<?php echo $personaActual->foto; ?>"><br></label>
                <input type="file" name="foto" id="foto"><br>
            </div>
            <br>

            <input type="submit" value="Actualizar" name="actualizar">
        </form>
    </div>

    <a href="index.html" class="button">Regresar</a>
</body>
</html>