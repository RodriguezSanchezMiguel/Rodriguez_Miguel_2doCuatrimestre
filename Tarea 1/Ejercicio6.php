<?php
//Haz un programa que guarde los precios de varios productos en un arreglo y calcule el precio total sumando todos los valores.

    $precios = array(35.5, 43, 12, 58, 78.8, 41);
    foreach ($precios as $precio)
        echo "Precio de los productos son: $precio<br>";
    $total = 0;
    for ($i = 0; $i < count($precios); $i++){
    $total += $precios[$i];
    }
    echo "El precio total de los productos es: $" . $total;
?>
