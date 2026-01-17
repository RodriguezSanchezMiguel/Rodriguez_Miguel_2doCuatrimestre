<?php
// Haz un programa que guarde una lista de al menos cinco clientes en un arreglo indexado y muestre el nombre de cada cliente utilizando un ciclo.

    $nombre = array("Dania", "Vania", "Abraham", "Emilio", "Paolo");
    for ($i = 0; $i < count($nombre); $i++){
    echo "Cliente" . ($i +1) . ":" . $nombre[$i] . "\n";
    }
?>
