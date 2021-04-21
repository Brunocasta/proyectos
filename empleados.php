<?php
$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andres Peréz", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);

function calcularNeto($bruto)
{

    return $bruto - ($bruto * 0.17);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="text-center pt-4 pb-4">
                <h1>Listado de Empleados</h1>
            </div>

            <table class=" table table-hover border">

                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Sueldo</th>


                </tr>
                <?php

                foreach ($aEmpleados as $empleado) {
                ?>

                    <tr>
                        <td><?php echo $empleado["dni"]; ?></td>
                        <td><?php echo mb_strtoupper($empleado["nombre"]); // strtoupper:convierte en mayuscula 
                            ?></td>
                        <td><?php
                            $importe = calcularneto($empleado["bruto"]);
                            echo "" . number_format($importe, 2, ",", ".");
                            ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <?php
            //recorrio todos los array
            function contar($array)
            {

                $contador = 0;
                foreach ($array as $valor) {
                    $contador++;
                }
                return $contador;
            }

            echo "Cantidad de Empleados activos: " . contar($aEmpleados); ?>

        </div>

    </div>

</body>

</html>

</html>