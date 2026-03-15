<?php
// Crea un formulario que pida un número entero N (entre 1 y 10). Al enviar el
// formulario, genera y muestra lo siguiente utilizando bucles:
// a. Una pirámide de asteriscos de N filas (Dependiendo del número
// ingresado), donde:
// i. La fila 1 tiene 1 asterisco.
// ii. Cada fila tiene 2 asteriscos más que la anterior.
// iii. Los asteriscos de cada fila están centrados respecto a la fila
// más ancha (Usa str_repeat() para los espacios).
// Ejemplo para N = 4
// *
// ***
// *****
// *******

// b. El número total de asteriscos que tiene la pirámide completa (Pista: La
// suma de la serie 1+3+5+...+(2N-1) = N2
// )

if ($_SERVER["REQUEST_METHOD"] !== "POST");

$n = intval($_POST["n"] ?? 0);
if ($n < 1 || $n > 10) {
    echo "El numero debe estar entre 1 y 10.\n";
    exit;
}

$totalAsteriscos = 0;
echo "<pre>";
for ($i = 1; $i <= $n; $i++) {
    $numAsteriscos = 2 * $i - 1;
    $totalAsteriscos += $numAsteriscos;
    $espacios = str_repeat(" ", $n - $i);
    echo $espacios . str_repeat("*", $numAsteriscos) . "\n";
}
echo "Total de asteriscos: " . $totalAsteriscos . "\n";
echo "</pre>";
