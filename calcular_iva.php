<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 0;
$resPrecioSinIva = 0;
$resPrecioConIva = 0;
$resIvaCantidad = 0;

if ($_POST) {

    $iva = $_REQUEST["lstIva"];
    $precioSinIva = $_REQUEST["txtImporteSinIva"];
    $precioConIva = $_REQUEST["txtImporteConIva"];


    if ($precioSinIva > 0 && $precioConIva == "") {
        $resPrecioConIva = $resPrecioSinIva * ($iva / 100 + 1);
        $resPrecioSinIva = $precioSinIva;
        $resIvaCantidad = $resPrecioConIva + $resPrecioSinIva + $iva;
    }

    if ($precioConIva > 0 && $precioSinIva == "") {
        $resPrecioSinIva = $precioConIva / ($iva / 100 + 1);
        $resPrecioConIva = $precioConIva;
        $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="row">

            <div class="col-3 offset-3">
                <form action="" method="POST">
                    <div class="mt-4">
                        <label for="">IVA %:
                            <select name="lstIva" class="form-control">
                                <option value="21">21</option>
                                <option value="10.5">10.5</option>
                            </select>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label for="">Precio sin IVA:
                            <input type="text" name="txtImporteSinIva" id="txtImporteSinIva">
                        </label>
                    </div>
                    <div class="mt-2">
                        <label for="">Precio con IVA:
                            <input type="text" name="txtImporteConIva" id="txtImporteConIva">
                        </label>
                    </div>
                    <div class="mt-2">
                        <label for="">Cantidad</label>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class=" btn btn-primary">Calcular</button>
                    </div>
            </div>
            </form>

            <div class="col-4 mt-5">
                <table class="table table-hover border">

                    <tr>
                        <th>IVA</th>
                        <td><?php echo $iva; ?></td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA</th>
                        <td><?php echo  $resPrecioSinIva; ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA</th>
                        <td><?php echo  $resPrecioConIva; ?></td>
                    </tr>
                    <tr>
                        <th>Cantidad</th>
                        <td><?php echo  $resIvaCantidad; ?></td>

                    </tr>

                </table>
            </div>

        </div>
    </div>
</body>

</html>