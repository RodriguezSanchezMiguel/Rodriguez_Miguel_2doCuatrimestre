<?php
//Haz un programa que declare un arreglo de calificaciones y calcule el promedio
$alumnos = array(
    "Pedro" => array(8, 8, 6, 5),
    "Jose" => array(9, 9, 8, 7),
    "Isidro" => array(5, 8, 9, 5),
    "Luis" => array(6, 7, 4, 9)
);
foreach ($alumnos as $nombre => $calificaciones) {
    echo "Calificaciones de " . $nombre . ": " . implode(", ", $calificaciones) . "<br>";
    $promedio = array_sum($calificaciones) / count($calificaciones);
    echo "El promedio de " . $nombre . " es: " . $promedio . "<br>";
}