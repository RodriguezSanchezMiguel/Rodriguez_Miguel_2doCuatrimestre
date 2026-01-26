<?php
//Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.

$nombres = array("Ana", "Luis", "Ema", "Carlos", "Olga", "Pedro", "Isabel");
$vocales = array('A', 'E', 'I', 'O', 'U');
$nombres_con_vocal = array();   
foreach ($nombres as $nombre) {
    echo $nombre . "<br>";

    if (in_array(strtoupper($nombre[0]), $vocales)) {
        $nombres_con_vocal[] = $nombre;
    }
}
echo "<br> Nombres que empiezan con vocal: <br>";
foreach ($nombres_con_vocal as $nombre_vocal) {
    echo $nombre_vocal . "<br>";
}
?>