<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// diapo 52
function calcularNeto($bruto){
    
    return $bruto - ($bruto * 0.17);
}
$neto = calcularNeto(50000);

echo "El sueldo neto es \$$neto";

echo " <br>";
?>
