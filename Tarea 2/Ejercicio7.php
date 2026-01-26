<?php
//Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).

$productos = array(
    "manzanas" => 10,
    "naranjas" => 3,
    "plátanos" => 7,
    "peras" => 2,
    "uvas" => 15
);
foreach ($productos as $producto => $cantidad) {
    echo " $producto: $cantidad <br>";
}
echo "Productos con cantidad baja (<5): <br>";
foreach ($productos as $producto => $cantidad) {
    if ($cantidad < 5) {
        echo " $producto: $cantidad <br>";
    }
}
?>