<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona{
    private $nombre;
    private $dni;
    private $correo;
    private $celular;

    public function __constructor($dni,$nombre,$correo,$celular){
        $this->nombre =$nombre;
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

    class Alumno extends Persona{
        private $fechaNac;
        private $peso;
        private $altura;
        private $aptoFisico;
        private $presentismo;
    
    public function __constructor($peso,$altura,$presentismo){
        $this->peso=0.0;
        $this->altura=0.0;
        $this->aptoFisico=0.0;
        $this->presentismo=0.0;

    }
    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    public function setFichaMedica(){

    }
}
class Entrenador extends Persona{

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

class Clase {
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __constructor(){
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
    public function asignarEntrenador(){

    }

    public function inscribirAlumno(){

    }

    public function imprimirListado(){
        
    }
}
//programa
$entrenador1 = new Entrenador("34987789","Miguel Ocampo","miguel@mail.com","11678634");
$entrenador2 = new Entrenador("28987589","andrea Zarate","andrea@mail.com","11768654");

$alumno1 =new Alumno("407876557","Dante Montera","dante@mail.com","1145632457","1997-08-28");
$alumno1->setfichaMedica("90","178","1");
$alumno1->presentismo= 78;

$alumno2 =new Alumno("467666547","Dario Turchi","dario@mail.com","1145633457","1986-11-21");
$alumno1->setfichaMedica("73","1.68","0");
$alumno1->presentismo= 68;

$alumno3 =new Alumno("39765454","Facundo Fagnano","facundo@mail.com","1145632457","1993-02-06");
$alumno1->setFichaMedica("90","1.87","1");
$alumno1->presentismo= 88;

$alumno4 =new Alumno("41687536","Gaston Aguilar","gaston@mail.com","1145632457","1999-11-02");
$alumno1->setFichaMedica("70","1.69","0");
$alumno1->presentismo= 98;


//clases
$clase1 =new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador=($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
$clase1->imprimirListado();

$clase2 =new Clase();
$clase2->nombre = "Zumba";
$clase2->asignarEntrenador=($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
$clase2->imprimirListado();










?>