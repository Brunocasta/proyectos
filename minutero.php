<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


echo "Fecha y Hora actual ". date("d/m/Y H:i") . "<br>";

$hr=date("H");
$min=date("i");

for($i=0;$i<60;$i++){
   

echo "la hora es $hr:$min <br>";

$min++;
if($min==60){
    $min=00;
    $hr++;
}
if($hr==24){
    $hr=00;
}

}

echo "la hora es $hr:$min <br>";

?>
