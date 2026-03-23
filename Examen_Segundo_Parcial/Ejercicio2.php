<?php

if (isset($_POST["numero"])){
    $numero = $_POST["numero"];
    if ($numero % 2 == 0) {
        echo "el numero es par";
    } else {
        echo "el numero es impar";
    }
}