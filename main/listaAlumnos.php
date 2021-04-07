<?php

include_once("persona.php");
include_once("serializarArchivo.php");

$listarPersonas = serializarArchivo::deserializar();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilo/StyleList.css">
    <title>Listado de Alumnos</title>
  </head>
  <body>
    <div class="container">
      <h3>Resultado</h3>
      <h1>Listado de Alumnos</h1>
      <hr>
      <div class="listado">
        <table>
          <tr>
            <th>FOTO</th>
            <th>INFORMACION</th>
          </tr>
      <?php
        foreach($listarPersonas as $persona){
          echo 
          "<tr>
              <div><th class='datos'>"."<img src='image/$persona->foto'>"."</th></div>".

              "<th class='datos'> No.Carnet: ".$persona->carnet.
                    "<br>Nombre: " . $persona->nombre.
                    "<br>Correo Electronico: ".$persona->correo.
                    "<br>Edad: ".$persona->edad.
                    "<br>Curso: ".$persona->curso.

                    "<br><br> <a href='actualizarDatos.php?id=".$persona->carnet."'>Editar</a>" .
                    "<a href='borrarPersona.php?id='".$persona->carnet."'>Borrar</a>" . 
              "</th>".
          "</tr>"
          ;
        }
      ?>
        </table>
      </div>
    </div>
    <br>
    <a class="button" href="index.html">Regresar</a>
  </body>
</html>

