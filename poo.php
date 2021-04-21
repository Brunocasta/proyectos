<?php

class Persona{
    public $dni;
    public $nombre;
    public $nacionalidad;
    public $edad;

    public function imprimir(){

    }

}

class Alumno extends Persona{

    public $legajo;
    public $notaPortfolio;
    public $notaPhp ;
    public $notaproyecto ;

    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyectos = 0.0;
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

    public $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";


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
$alumno1 ->nombre = "Ana Valle";
$alumno1 ->edad = 36;
$alumno1 ->nacionalidad = "Argentina";
$alumno1 ->notaPhp = 9;
$alumno1 ->notaPortfolio = 8;
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