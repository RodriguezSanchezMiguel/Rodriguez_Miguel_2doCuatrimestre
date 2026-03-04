<?php
//Haz un formulario que solicite el nombre del empleado, su salario por hora y
//las horas trabajadas en la semana. Posteriormente, calcula y muestra en
//pantalla:
//a. Salario base (Primeras 40 horas a tarifa normal).
//b. Horas extras (Las que excedan 40 se pagan al doble).
//c. Total bruto (Salario base + horas extras).
//d. Deducciones (15% del total bruto).
//e. Salario neto (Total bruto – deducciones)

if (isset($_GET['nombre']) && isset($_GET['salarioHora']) && isset($_GET['horasTrabajadas'])) {
    $nombre = $_GET['nombre'];
    $salarioHora = $_GET['salarioHora'];
    $horasTrabajadas = $_GET['horasTrabajadas'];

    if (!empty($nombre) && is_numeric($salarioHora) && is_numeric($horasTrabajadas) && $salarioHora > 0 && $horasTrabajadas >= 0) {
        $nombre = trim($nombre);
        $salarioHora = floatval($salarioHora);
        $horasTrabajadas = floatval($horasTrabajadas);

        // Calcular salario base
        $salarioBase = min($horasTrabajadas, 40) * $salarioHora;

        // Calcular horas extras
        $horasExtras = max(0, $horasTrabajadas - 40);
        $pagoHorasExtras = $horasExtras * ($salarioHora * 2);

        // Calcular total bruto
        $totalBruto = $salarioBase + $pagoHorasExtras;

        // Calcular deducciones
        $deducciones = $totalBruto * 0.15;

        // Calcular salario neto
        $salarioNeto = $totalBruto - $deducciones;

        echo "<h1>Empleado: $nombre</h1>";
        echo "<h2>Salario Base: $" . number_format($salarioBase, 2) . "</h2>";
        echo "<h2>Pago por Horas Extras: $" . number_format($pagoHorasExtras, 2) . "</h2>";
        echo "<h2>Total Bruto: $" . number_format($totalBruto, 2) . "</h2>";
        echo "<h2>Deducciones: $" . number_format($deducciones, 2) . "</h2>";
        echo "<h2>Salario Neto: $" . number_format($salarioNeto, 2) . "</h2>";
    } else {
        echo "<h1>Por favor, ingresa datos válidos para el nombre, salario por hora y horas trabajadas.</h1>";
    }
}