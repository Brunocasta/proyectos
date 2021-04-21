<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$fecha = date("d/m/Y");
$edad = 32;
$nombre = "Natalia";
$aPeliculas = array ("Shrek",
                      "El dia despues de mañana",
                      "Volver al futuro"  );
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12  text-center mt-2" >
                <h1>Ficha personal</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5">

       
        <table class=" table table-hover border">
        <tr>
            <td>Fecha</td>
            <td><?php echo date("d/m/Y") ?> </td>
        </tr>
        <tr>
            <td>Nombre y apellido</td>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $edad?></td>
        </tr>
        <tr>
            <td>Peliculas Favoritas</td>
            <td> <?php echo $aPeliculas [0] . "<br>";  echo  $aPeliculas [1] . "<br>"; echo $aPeliculas [2];
            ?></td>
        </tr>
    </table>
    </div>
    </div>
    </div>
</body>
</html>