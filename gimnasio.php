<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona
{
    protected $nombre;
    protected $dni;
    protected $correo;
    protected $celular;

    public function __construct($dni, $nombre, $correo, $celular)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->correo = $correo;
        $this->celular = $celular;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}

class Alumno extends Persona
{
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __construct($dni, $nombre, $correo, $celular)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->correo = $correo;
        $this->celular = $celular;
        $this->peso = $peso = 0.0;
        $this->altura = $altura = 0.0;
        $this->aptoFisico = $aptoFisico = 0.0;
        $this->presentismo = 0.0;
    }
    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function setFichaMedica($peso, $altura, $aptoFisico)
    {
        //TODO: poner nombres entendibles a los parametros y asignarlas
        $this->peso = $peso;
        $this->altura = $altura;
        $this->aptoFisico = $aptoFisico;
    }
}
class Entrenador extends Persona
{

    private $aClases;

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}

class Clase
{
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __construct()
    {
        $this->nombre;
        $this->entrenador;
        $this->aAlumnos = array();
    }
    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function asignarEntrenador(Entrenador $entrenador)
    {
        $this->entrenador = $entrenador->nombre;
        $this->entrenador = $entrenador->correo;
        $this->entrenador = $entrenador->celular;
        $this->entrenador = $entrenador->nombre;
    }

    public function inscribirAlumno(Alumno $estudiante)
    {
        $this->aAlumnos[] = $estudiante;
    }

    public function imprimirListado()
    {
        echo "<table class='table table-hover border'>";
        echo "<tr><th colspan='2' class='text-center' >Listado</th></tr>
            <tr>    
                <th>Nombre:</th>
            <td>" . $this->nombre . "</td>
            </tr>
            <tr>
                <th>Entrenador:</th>
            <td>" . $this->entrenador . "</td>
            </tr>
            <tr><th colspan='3'>Alumnos:</th>";
        foreach ($this->aAlumnos as $alumno) {

            echo "<tr><td>" . $alumno->nombre . "</td><br>
                </tr>
         
        </table>";
        }  
    }
}
//programa
$entrenador1 = new Entrenador("34987789", "Miguel Ocampo", "miguel@mail.com", "11678634");
$entrenador2 = new Entrenador("28987589", "Andrea Zarate", "andrea@mail.com", "11768654");

$alumno1 = new Alumno("407876557", "Dante Montera", "dante@mail.com", "1145632457", "1997-08-28");
$alumno1->setfichaMedica("90", "1.78", "1");
$alumno1->presentismo = 78;

$alumno2 = new Alumno("467666547", "Dario Turchi", "dario@mail.com", "1145633457", "1986-11-21");
$alumno2->setfichaMedica("73", "1.68", "0");
$alumno2->presentismo = 68;

$alumno3 = new Alumno("39765454", "Facundo Fagnano", "facundo@mail.com", "1145632457", "1993-02-06");
$alumno3->setFichaMedica("90", "1.87", "1");
$alumno3->presentismo = 88;

$alumno4 = new Alumno("41687536", "Gaston Aguilar", "gaston@mail.com", "1145632457", "1999-11-02");
$alumno4->setFichaMedica("70", "1.69", "0");
$alumno4->presentismo = 98;


//clases
$clase1 = new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
$clase1->imprimirListado();

$clase2 = new Clase();
$clase2->nombre = "Zumba";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
$clase2->imprimirListado();


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mt-5">
                <?php $clase1->imprimirListado($entrenador1); ?>
            </div>
        </div>

    </div>


</body>

</html>