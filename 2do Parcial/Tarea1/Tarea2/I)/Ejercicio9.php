<?php
// Crea un formulario que pida lo siguiente:
// a. Nombre(s) del usuario
// b. Apellido paterno
// c. Apellido materno
// d. Año de nacimiento
// Al enviar el formulario, genera y muestra las siguientes sugerencias de
// nombre de usuario (en minúsculas, sin acentos):
// a. Primera letra del nombre + apellido paterno completo, por ejemplo:
// “jperez”.
// b. Nombre completo + los últimos 2 dígitos del año de nacimiento, por
// ejemplo: “juan95”.
// c. Apellido paterno + apellido materno + primera letra del nombre, por
// ejemplo: “perezlopezj”.
// d. Primera letra del nombre + primera letra del apellido paterno + primera
// letra del apellido materno + año completo, por ejemplo: “jpl1995”.
// e. Apellido paterno al revés + número de caracteres que tiene el nombre
// completo del usuario (Nombre + ambos apellidos), por ejemplo:
// “zerep14”
// Para todas las sugerencias, convierte todo a minúsculas y elimina espacios.

if ($_SERVER["REQUEST_METHOD"] !== "POST");
$nombre = $_POST["nombre"] ?? "";
$apellidoPaterno = $_POST["apellidoPaterno"] ?? "";
$apellidoMaterno = $_POST["apellidoMaterno"] ?? "";
$anioNacimiento = $_POST["anioNacimiento"] ?? "";
$nombreCompleto = $nombre . $apellidoPaterno . $apellidoMaterno;
$sugerenciaA = strtolower(substr($nombre, 0, 1) . $apellidoPaterno);
$sugerenciaB = strtolower($nombre . substr($anioNacimiento, -2));
$sugerenciaC = strtolower($apellidoPaterno . $apellidoMaterno . substr($nombre, 0, 1));
$sugerenciaD = strtolower(substr($nombre, 0, 1) . substr($apellidoPaterno, 0, 1) . substr($apellidoMaterno, 0, 1) . $anioNacimiento);
$sugerenciaE = strtolower(strrev($apellidoPaterno) . strlen($nombreCompleto));
echo "Sugerencia A: " . $sugerenciaA . "\n";
echo "Sugerencia B: " . $sugerenciaB . "\n";
echo "Sugerencia C: " . $sugerenciaC . "\n";
echo "Sugerencia D: " . $sugerenciaD . "\n";
echo "Sugerencia E: " . $sugerenciaE . "\n";
