<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (file_exists("archivo.txt")) {
    $jsonClientes = file_get_contents("archivo.txt");

    $aClientes = json_decode($jsonClientes, true);
} else {
    $aClientes = array();
}

$id = isset($_GET["id"]) && $_GET["id"] >= 0 ? $_GET["id"] : "";

                                                                                                                           
if ($_POST) {

    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];

    if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
        $nombre = date("Ymdhmsi") . rand(1000, 5000);
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $nuevoNombre = "$nombre. $extension";
        move_uploaded_file($archivo_tmp, "imagenes/" . $nuevoNombre);
    }

    if ($id != "") {

        if ($_FILES["archivo"]["error"] !== UPLOAD_ERR_OK) {
            $nuevoNombre = $aClientes[$id]["imagen"];
        }

        if ($_FILES["archivo"]["error"] !== UPLOAD_ERR_OK) {
            if (file_exists("imagenes/" . $aClientes[$id]["imagen"])) {
                unlink("imagenes/" . $aClientes[$id]["imagen"]);
            }
        }

        //estoy actualizando
        $aClientes[$id] = array(
            "dni" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "imagen" => $nuevoNombre
        );
    } else {
        //inserta cliente nuevo
        $aClientes[] = array(
            "dni" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
            "imagen" => $nuevoNombre
        );
    }
    //codificar el array en json
    $jsonClientes = json_encode($aClientes);

    file_put_contents("archivo.txt", $jsonClientes);
}

if (isset($_GET["id"]) && $_GET["id"] != ""  && isset($_GET["do"]) && $_GET["do"] == "eliminar") {
    unset($aClientes[$id]);

    $jsonClientes = json_encode($aClientes);

    file_put_contents("archivo.txt", $jsonClientes);

    header("Location: index.php");
}

?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMB Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">

</head>

<body>

    <div class="container-fluid">
        <section>
            <div class="row">
                <div class="col-12 my-5 text-center">
                    <h1>Registro de Clientes</h1>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-6 mt-2">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 form-group ">
                            <label for="txtDni">DNI:</label>
                            <input type="text" name="txtDni" id="txtDni" class="form-control shadow" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["dni"] : "" ?>">
                        </div>

                        <div class="col-12 form-group mt-3">
                            <label for="txtNombre">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control shadow" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : "" ?>">
                        </div>

                        <div class="col-12 form-group mt-3">
                            <label for="txtTelefono">Telefono:</label>
                            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control shadow" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["telefono"] : "" ?>">
                        </div>

                        <div class="col-12 form-group mt-3">
                            <label for="txtCorreo">Correo:</label>
                            <input type="text" name="txtCorreo" id="txtCorreo" class="form-control shadow" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["correo"] : "" ?>">
                        </div>
                        <div class="col-12 form-group mt-2">
                            <label for="txtCorreo">Archivo Adjunto:</label>
                            <input type="file" name="archivo" id="archivo" class="form-control-file " accept=".jpg, .jpeg, .png">
                            <small class="d-block mt-2">Archivos admitidos: .jpg, .jpeg, .png</small>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <button type="submit" id="btn-guardar" name="btn-guardar" class="btn btn-primary">Guardar</button>
                            </div>

                        </div>


                    </div>

                </form>
            </div>
            <div class="col-6 my-4">
                <table class=" table table-hover border shadow">
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    <?php foreach ($aClientes as $key => $cliente) {


                    ?>
                        <tr>
                            <td><img class="img-thumbnail" src="imagenes/<?php echo $cliente["imagen"]; ?>" alt=""> </td>
                            <td> <?php echo $cliente["dni"]; ?></td>
                            <td> <?php echo $cliente["nombre"]; ?></td>
                            <td> <?php echo $cliente["correo"]; ?></td>
                            <td style="width:110;">
                                <a href="index.php?id=<?php echo $key; ?>"><i class="fas fa-edit"></i></a>
                                <a href="index.php?id=<?php echo $key; ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <a href="index.php"><i class=" fas fa-plus"></i></a>
            </div>
        </div>
    </div>

</body>

</html>