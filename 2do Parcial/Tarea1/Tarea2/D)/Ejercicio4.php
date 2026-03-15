<?php
// Crea un formulario que pida:
// a. Nombre del usuario.
// b. Sexo (Mediante un select)
// c. Peso en kilogramos.
// d. Altura en centímetros.
// e. Edad en años.
// f. Nivel de actividad física (Usa un select con opciones):
// i. Sedentario (Poco o nada de ejercicio) -> factor: 1.2
// ii. Ligero (Ejercicio 1 – 3 días/semana) -> factor: 1.375
// iii. Moderado (Ejercicio 3 – 5 días/semana) -> factor: 1.55
// iv. Activo (Ejercicio 6 – 7 días/semana) -> factor: 1.725

// Al enviar el formulario, calcula la TMB usando la fórmula de Harris Benedict
// y muestra:
// a. El nombre del usuario y sus datos (peso, altura, edad).
// b. La TMB (Calorías en reposo por día):
// a. Hombres: TMB = 88.36 + (13.4 x peso) + (4.8 x altura) – (5.7 x
// edad)

// b. Mujeres: TMB = 447.6 + (9.2 x peso) + (3.1 x altura) – (4.3 x
// edad)

// c. Las calorías diarias recomendadas según el nivel de actividad (Usa la
// fórmula TMB x factor de actividad), redondeadas a 2 decimales.

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: Ejercicio4.html");
    exit;
}

$nombre = $_POST["nombre"] ?? "";
$sexo = $_POST["sexo"] ?? "";
$peso = floatval($_POST["peso"] ?? 0);
$altura = floatval($_POST["altura"] ?? 0);
$edad = intval($_POST["edad"] ?? 0);
$nivelActividad = $_POST["nivelActividad"] ?? "";

switch ($nivelActividad) {
    case "sedentario":
        $factorActividad = 1.2;
        break;
    case "ligero":
        $factorActividad = 1.375;
        break;
    case "moderado":
        $factorActividad = 1.55;
        break;
    case "activo":
        $factorActividad = 1.725;
        break;
    default:
        $factorActividad = 1.2;
}
if ($sexo === "hombre") {
    $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $edad);
} elseif ($sexo === "mujer") {
    $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $edad);
} else {
    $tmb = 0;
}
$caloriasDiarias = round($tmb * $factorActividad, 2);

echo "Nombre: " . $nombre . "\n";
echo "Sexo: " . $sexo . "\n";
echo "Peso: " . $peso . " kg\n";
echo "Altura: " . $altura . " cm\n";
echo "Edad: " . $edad . " años\n";
echo "Nivel de actividad: " . $nivelActividad . "\n";
echo "TMB: " . round($tmb, 2) . " calorías/día\n";
echo "Calorías diarias recomendadas: " . $caloriasDiarias . " calorías/día\n";
