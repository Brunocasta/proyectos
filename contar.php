<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//diapo 53
$aNotas = array(9, 8, 9.50, 4, 7, 8);

function contar($array){

    $contador = 0;

    foreach ($array as $valor){
        
    $contador++;
}
 
return $contador;
}
echo "Cantidad de Notas es ".contar($aNotas) . "<br>";
?>

<?php

$aProductos = array();
$aProductos[] = array("Smart TV 55\" 4K UHD");
$aProductos[] = array("Samsung Galaxy A30 Blanco");
$aProductos[] = array("Aire Acondicionado Split Inverter");


echo "Cantidad de Productos " .contar($aProductos)  ."<br>";

?>

<?php
$aPacientes = array ();
$aPacientes[] = array("Pablo Perez");
$aPacientes[] = array("Martin Martinez");
$aPacientes[] = array("Rodrigo Rodriguez");

echo "Cantidad de pacientes " .contar($aPacientes);

?>