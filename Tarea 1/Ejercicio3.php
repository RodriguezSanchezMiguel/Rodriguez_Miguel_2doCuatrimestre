<?php
// Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.

    $gastos = array(350, 300, 278, 129, 277, 185,768);
        foreach ($gastos as $gasto){
        echo "El gasto diario es de : $gasto<br>";
    }
    $totalgastos = 0;
    for ($i = 0; $i<7; $i++) {
    $totalgastos += $gastos[$i];
    }
    $promedio = $totalgastos / 7;
    echo "El total de gastos de la semana son de : $promedio<br>";
?>
