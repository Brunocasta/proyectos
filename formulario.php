<?php


if ($_POST) { //es postback?

   
    $usuario = $_REQUEST["txtusuario"];
    $clave = $_REQUEST["txtclave"];

    if ($usuario!= "" && $clave !=""){
    header("location:") 
    }else {
         ;
    }exit;
}


    
   




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <form method="GET" action="" >
                    <div class="col-12">
                    <i class= "me-2">Usuario</i><input type="text" text="txtusuario" name="usuario">
                    </div>
                    <div class="col-12">
                    <i class="me-2">Clave</i><input class="mt-3"type="text" text="txtclave" name="clave">
                    </div>
                    <button type="submit" >Enviar </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>