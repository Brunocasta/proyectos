<?php

$aNotas = array(8,4,5,3,9,1);
$aSueldo = array(800.30,400.37,500.45 ,300,900.70,100 ,900 ,1800);

function maximo($aSueldo){

            $maximo = 0;
        foreach( $aSueldo as $valor){
                 
            if( $valor > $maximo )
            
            $maximo =  $valor ; 

    }

            return $maximo;
}

echo "El sueldo maximo es " .maximo ($aSueldo). "<br>";

echo "La nota mas alta es ".maximo ($aNotas);
