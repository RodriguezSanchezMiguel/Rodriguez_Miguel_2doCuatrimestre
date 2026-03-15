<?php
//Crea un formulario con un campo de texto donde el usuario ingrese nombres
//separados por coma. Muestra la siguiente información en pantalla:
//a. Cada nombre en una línea diferente.
//b. Total, de nombres ingresados.
//c. Muestra los nombres ordenados alfabéticamente.
//d. Indica si hay nombres duplicados (Investiga el método
//array_unique()).

if (isset($_GET["nombres"])) {
    $nombres = $_GET["nombres"];
    $nombresArray = explode(",", $nombres);

    echo "Nombres ingresados:<br>";
    foreach ($nombresArray as $nombre) {
        echo trim($nombre) . "<br>";
    }
    
    $totalNombres = count($nombresArray);
    echo "Total de nombres ingresados: " . $totalNombres . "<br>";
    
    sort($nombresArray);
    echo "Nombres ordenados alfabéticamente:<br>";
    foreach ($nombresArray as $nombre) {
        echo trim($nombre) . "<br>";
    }
    
    $nombresUnicos = array_unique($nombresArray);
    if (count($nombresUnicos) < count($nombresArray)) {
        echo "Hay nombres duplicados.<br>";
    } else {
        echo "No hay nombres duplicados.<br>";
    }
}