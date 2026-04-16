<?php

require_once "config.php";

$conn = mysqli_connect($host, $user, $pasword, $database);

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}