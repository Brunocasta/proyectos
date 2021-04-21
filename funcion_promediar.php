<?php 

$aNotas = array(8,4,5,3,9,1);


function promediar ($aNotas) {
       
    $suma = 0;
    
    foreach ($aNotas as $nota) {
       
        $suma = $suma + $nota;  //$suma+= $nota; seria otra variante
}
return $suma / count($aNotas) ;

}

        echo "El promedio es ".promediar ($aNotas) ;

?>
