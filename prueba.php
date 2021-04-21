<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$nombre = ("Bruno");
$apellido = ("castagnola");
$edad = ("28");

echo "me llamo $nombre" . "" . $apellido;

// \ alt+ 92 barra invertida

// < se hace con alt + 60 // > se hace con alt + 62


?>
<?php
$num1 = 10;
$num2 = 8;
$resultado = $num1 + $num2;
echo $resultado


?>
<?php
$stock = 50;
if ($stock) {
    echo "Hay stock";
}
echo "<br>";

$stock = 50;
if ($stock == 0) {
    echo " No Hay stock";
}
// || significa "o" | se hace con alt + 124 
?>
<?php
$numero = 10;
echo "esto es un numero $numero";

echo "<br>";
?>
<?php


$array = array("Maria", "Juana", "Pedro", "Andres");

for ($i = 0; $i < count($array); $i++) {

    if ($array[$i] == "Pedro") {
        break;
    }
    echo "$array[$i]<br>";
}

$array = ["Maria", "Juana", "Pedro", "Andres"];

for ($i = 0; $i < count($array); $i++) {

    if ($array[$i] == "Pedro") {
        continue;
    }
    echo "$array[$i]<br>";
}


for ($i = 1; $i <= 100; $i++) {
    echo $i . "<br>";
}

for ($i = 2; $i <= 100; $i += 2) {
    echo $i . "<br>";
}

for ($i = 2; $i <= 100; $i += 2) {

    if ($i == 60) {
        break;
    }
    echo $i . "<br>";
}

?>





<?php
// diapo 51
function calcularAreaRect($base, $altura)
{
    return $base * $altura;
}
//resultado o cuenta que hagamos va siempre afuera del corchete
$resultado = calcularAreaRect(100, 0.60);
echo  "El area es " . $resultado . "<br>";

?>
<?php
// diapo 52
function calcularNeto($bruto)
{
    return $bruto - ($bruto * 0.17);
}
$neto = calcularNeto(50000);
echo "El sueldo neto es \$" . $neto;

echo " <br>";
?>



