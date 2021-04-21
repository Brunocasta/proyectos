<?php


if ($_POST) { //es postback?


    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if ($usuario != "" && $clave != "") {
        header("Location: acceso_confirmado.php");
    } else {
        echo "Valido para usuarios registrados";

        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">

                <h1 class=" text-center mb-3 ms-4">Formulario</h1>
                <form method="POST" action="">
                    <div class=" text-center col-12">
                        <i class="me-2"><strong>Usuario:</strong></i><input type="text" id="txtusuario" name="txtUsuario">
                    </div>
                    <div class=" text-center col-12">
                        <i class="me-4"><strong>Clave:</strong></i><input class="mt-3" type="text" id="txtclave" name="txtClave">
                    </div>
                    <div class=" text-center mt-3"><button class="btn btn-primary" type="submit"> Enviar </button></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>