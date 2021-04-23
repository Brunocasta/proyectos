<?php

class Persona{
    protected  $dni;
    protected  $nombre;
    protected  $nacionalidad;
    protected  $edad;

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }
   
    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }
    
    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }
   
    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }
    
    
    


}

class Alumno extends Persona{

    private $legajo;
    private $notaPortfolio;
    private $notaPhp ;
    private $notaproyecto ;

    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyectos = 0.0;
    }

    //se resume con estas funciones
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


    public function imprimir(){
        echo "Nombre = " . $this->nombre . "<br>";
        echo "Edad = " . $this->edad. "<br>";
        echo "NotaPortfolio = ". $this->notaPortfolio . "<br>";
        echo "NotaPhp = ". $this->notaPhp . "<br>";
        echo "Nota Proyectos = " . $this->notaProyectos ."<br>";
        echo "Promedio = ". $this->calcularPromedio()."<br>"."<br>";  
    } 

    public function calcularPromedio(){
        $promedio = ($this->notaPhp + $this->notaPortfolio + $this->notaproyecto)/3;
        return $promedio;


    }
    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }

}


class Docente extends Persona{

    private $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";


    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


    public function imprimir(){
        echo "Nombre = " . $this->nombre . "<br>";
        echo "Edad = " . $this->edad. "<br>";
        echo "Especialidad = " . $this->especialidad . "<br><br>";
        
    }
    public function imprimirEspecialidadesHabilitadas(){
            echo "Un docente puede ser : <br>";
            echo self::ESPECIALIDAD_ECO . "<br>";
            echo self::ESPECIALIDAD_BBDD . "<br>";
            echo self::ESPECIALIDAD_WP ."<br><br>";
    }
    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }

}

//programa

$alumno1 = new Alumno();
$alumno1 ->setNombre("Ana Valle");
$alumno1 ->setEdad(36);
$alumno1 ->setNacionalidad("Argentina");
$alumno1 ->notaPhp = 9;
$alumno1 ->notaPortfolio = 8;//__set
$alumno1 ->notaProyecto = 9;
$alumno1 ->imprimir();


$alumno2 = new Alumno();
$alumno2 ->nombre ="Matias Perez";
$alumno2 ->dni ="40245789";
$alumno2 ->notaPhp = 7;
$alumno2 ->notaProyecto = 8;
$alumno2 ->imprimir();

$docente1 = new Docente();
$docente1->nombre = "David Ledesma";
$docente1->especialidad = Docente::ESPECIALIDAD_ECO;
$docente1->imprimir();
$docente1->imprimirEspecialidadesHabilitadas();