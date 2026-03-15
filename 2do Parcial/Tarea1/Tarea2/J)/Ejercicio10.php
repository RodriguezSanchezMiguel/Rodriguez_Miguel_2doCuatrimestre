<?php
// Crea un formulario que pida un número de tarjeta de crédito (Solo los dígitos,
// sin espacios ni guiones). Al enviar el formulario, verifica lo siguiente:

// a. Si tiene exactamente 16 caracteres.
// b. Si todos los caracteres son dígitos numéricos (Puedes usar
// ctype_digit()).
// c. Si ambas condiciones se cumplen, muestra el número formateado en
// grupos de 4 separados por espacio, por ejemplo: 1234 5678 9012
// 3456
// d. Muestra una versión, donde los primeros 12 dígitos se remplacen por
// ateísticos y solo se muestren los últimos 4, por ejemplo: **** **** ****
// 3456

if ($_SERVER["REQUEST_METHOD"] !== "POST");
$tarjeta = $_POST["tarjeta"] ?? "";
$esValida = (strlen($tarjeta) === 16) && ctype_digit($tarjeta);
if ($esValida) {
    $tarjetaFormateada = substr($tarjeta, 0, 4) . " " . substr($tarjeta, 4, 4) . " " . substr($tarjeta, 8, 4) . " " . substr($tarjeta, 12, 4);
    $tarjetaOculta = "**** **** **** " . substr($tarjeta, -4);
    echo "Número formateado: " . $tarjetaFormateada . "\n";
    echo "Número oculto: " . $tarjetaOculta . "\n";
} else {
    echo "Número de tarjeta no válido.\n";
}