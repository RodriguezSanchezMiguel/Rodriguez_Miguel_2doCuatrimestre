<?php
//Haz un programa que almacene los nombres de varios empleados en un arreglo y muestre cuántos empleados hay registrados.

    $empleados = array("Dania", "Vania", "Abraham", "Emilio", "Paolo", "Genesis", "Leonardo");
    foreach ($empleados as $empleado){
        echo "Los empleados son: $empleado<br>";
    }
    $total = 0;
    for ($i = 0; $i < count($empleados); $i++){
        $total++;
    }
    echo "El total de empleados es: " . count($empleados);

?>