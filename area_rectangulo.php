<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// diapo 51

function calcularAreaRect($base, $altura)
{
    return $base * $altura;
}
//resultado o cuenta que hagamos va siempre afuera del corchete
$resultado = calcularAreaRect(100, 0.60);
echo  "El area es " . $resultado . "<br>";






?>