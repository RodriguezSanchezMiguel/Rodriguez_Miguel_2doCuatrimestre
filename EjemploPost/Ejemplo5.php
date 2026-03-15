<?php
// Ejemplo 5 - Gestor de calificaciones

if($_SERVER["REQUEST_MRTHOD"] == "POST"){
    if(isset($_POST["nombre"]) && isset($_POST["materia"]) && isset($_POST["calificacion"])){
        $nombre = $_POST["nombre"];
        $materia = $_POST["materia"];
        $calificacion = $_POST["calificacion"];
        $calificacion_letra = "";

        if ($calificacion >= 90 && $calificacion <= 100) {
            $calificacion_letra = "A";
            echo "¡Felicidades $nombre! Has aprobado la materia: $materia con una calificación de excelencia $calificacion. Tu calificación en letra es: $calificacion_letra. sigue así para mantener tu rendimiento académico.";
        } elseif ($calificacion >= 80 && $calificacion < 90) {
            $calificacion_letra = "B";
            echo "¡Bien hecho $nombre! Has aprobado la materia: $materia con una calificación de $calificacion. Tu calificación en letra es: $calificacion_letra. Continúa esforzándote para alcanzar la excelencia académica.";
        } elseif ($calificacion >= 70 && $calificacion < 80) {
            $calificacion_letra = "C";
            echo "Has aprobado la materia: $materia con una calificación de $calificacion. Tu calificación en letra es: $calificacion_letra. Sin embargo, te recomendamos dedicar un poco más de tiempo al estudio para mejorar tu rendimiento académico.";
        } elseif ($calificacion >= 60 && $calificacion < 70) {
            $calificacion_letra = "D";
            echo "Has reprobado la materia: $materia con una calificación de $calificacion. Tu calificación en letra es: $calificacion_letra. Te sugerimos revisar los temas que te resultaron difíciles y buscar ayuda adicional para mejorar tu comprensión de la materia.";
        } else {
            $calificacion_letra = "F";
            echo "Has reprobado la materia: $materia con una calificación de $calificacion. Tu calificación en letra es: $calificacion_letra. Te sugerimos buscar ayuda adicional para mejorar tu comprensión de la materia.";
        }
    }
}