<?php
// Crea un formulario que pida las calificaciones y los porcentajes de peso de
// tres evaluaciones, por ejemplo:
// a. Parcial 1: Calificación y su porcentaje de peso.
// b. Parcial 2: Calificación y su porcentaje de peso:
// c. Examen final: Calificación y su porcentaje de peso
// Recuerda que la suma de estos porcentajes de peso, debe ser del 100%.
// Al enviar el formulario, muestra lo siguiente:
// a. La aportación ponderada de cada evaluación (Calificación x
// porcentaje / 100).
// b. El promedio ponderado final (Suma de las 3 aportaciones).
// c. Si el alumno aprobó o reprobó (Mínimo aprobatorio: 60).
// d. La evaluación con la calificación más alta y la más baja.

if ($_SERVER["REQUEST_METHOD"] !== "POST")
$calificaciones = [];
$porcentajes = [];
for ($i = 1; $i <= 3; $i++) {
    $calificaciones[] = floatval($_POST["calificacion$i"] ?? 0);
    $porcentajes[] = floatval($_POST["porcentaje$i"] ?? 0);
}
$aportaciones = [];
for ($i = 0; $i < 3; $i++) {
    $aportaciones[] = $calificaciones[$i] * ($porcentajes[$i] / 100);
}
$promedioPonderado = array_sum($aportaciones);
$resultado = ($promedioPonderado >= 60) ? "Aprobado" : "Reprobado";
$calificacionMaxima = max($calificaciones);
$calificacionMinima = min($calificaciones);
$evaluacionMaxima = array_search($calificacionMaxima, $calificaciones) + 1;
$evaluacionMinima = array_search($calificacionMinima, $calificaciones) + 1;
for ($i = 0; $i < 3; $i++) {
    echo "Evaluación " . ($i + 1) . ": Calificación = " . $calificaciones[$i] . ", Porcentaje = " . $porcentajes[$i] . "%, Aportación = " . round($aportaciones[$i], 2) . "\n";
}   
echo "Promedio Ponderado Final: " . round($promedioPonderado, 2) . "\n";
echo "Resultado: " . $resultado . "\n";
echo "Evaluación con Calificación Más Alta: Evaluación " . $evaluacionMaxima . " (Calificación: " . $calificacionMaxima . ")\n";
echo "Evaluación con Calificación Más Baja: Evaluación " . $evaluacionMinima . " (Calificación: " . $calificacionMinima . ")\n";
