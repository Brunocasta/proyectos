<?php
$aNumeros = array(9, 8, 9.50, 5, 8);

function contar($aNumeros)
{

    $contador = 0;

    foreach ($aNumeros as $valor) {
        $contador++;
    }

    return $contador;
}
echo contar($aNumeros);
?>


<?php

$aNotas = array(9, 8, 9.50, 5, 8);

function contar($array)
{

    $contador = 0;
    foreach ($array as $valor) {
        $contador++;
    }
    return $contador;
}
echo contar($aNotas);


?>