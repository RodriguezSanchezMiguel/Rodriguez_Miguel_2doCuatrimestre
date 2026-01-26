<?php
//Haz un programa que declare un arreglo de edades y muestre la edad mayor.

$edades = array(26, 45, 13, 16, 49, 67, 5, 89, 10);
foreach ($edades as $edad){
    echo "las edades son: " . $edad . "<br>";
}
$edad_mayor = max($edades);
echo "La edad mayor es: " . $edad_mayor;
?>