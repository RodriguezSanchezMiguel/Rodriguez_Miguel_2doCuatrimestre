<?php
//Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.
$alumnos = array(
    "Juan" => array(8, 7, 9, 6),
    "María" => array(10, 9, 8, 9),
    "Pedro" => array(5, 6, 7, 5),
    "Ana" => array(9, 8, 10, 9)
);
foreach ($alumnos as $nombre => $calificaciones) {
    echo "Calificaciones de " . $nombre . ": " . implode(", ", $calificaciones) . "<br>";
    $promedio = array_sum($calificaciones) / count($calificaciones);
    echo "El promedio de " . $nombre . " es: " . $promedio . "<br>";
}
?>