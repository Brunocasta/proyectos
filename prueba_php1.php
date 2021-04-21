<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

 <!--formulario-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">

            <div class="col-3 offset-3 ">
                <form action="" method="POST" enctype="multipart/form-data">

                    Nombre:<input class="mt-3" type="text" name="txtNombre" id="txtNombre">

                    Apellido: <input class="mt-3" type="text" name="txtApellido" id="txtApellido">

                    <label for="" class="mt-3">
                        Archivo:<input type="file" name="archivo1" id="archivo1" accept=".jpg, .png, .jpeg">
                    </label>

                    <button class="mt-3 btn-primary" type="submit">Enviar</button>

                </form>
            </div>
        </div>
    </div>



</body>

</html>