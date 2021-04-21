<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aPacientes=array ();
$aPacientes[] = array(

    "dni" => "33.346.796",
    "nombre" => "Ana Acuña",
    "edad" => "45",
    "peso" => "81.50"
);
$aPacientes[] = array(

    "dni" => "23.069.865",
    "nombre" => "Gonazalo Bustamante",
    "edad" => "66",
    "peso" => "79"
);
$aPacientes[] = array(

    "dni" => "34.456.143",
    "nombre" => "Maria Pietro",
    "edad" => "28",
    "peso" => "61"
);
$aPacientes[] = array(

    "dni" => "45.356.852",
    "nombre" => "Pablo Milano",
    "edad" => "53",
    "peso" => "75"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrición SA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="text-center pt-4 pb-4">
                <h1>Listado de Pacientes</h1>
            </div>

            <table class=" table table-hover border">

                <tr>
                    <th>DNI</th>
                    <th>Nombre y Apellido </th>
                    <th>Edad</th>
                    <th>Peso</th>

                </tr>
                <?php
                
                foreach ($aPacientes as $paciente) {
                ?>

                    <tr>
                        <td><?php echo $paciente["dni"]; ?></td>
                        <td><?php echo $paciente["nombre"]; ?></td>
                        <td><?php echo $paciente["edad"]; ?></td>
                        <td><?php echo $paciente["peso"]; ?></td>
                    </tr>
                <?php
                
                }

                ?>
            </table>


        </div>

    </div>

</body>

</html>