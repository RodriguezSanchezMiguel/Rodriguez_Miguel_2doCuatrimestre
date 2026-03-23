<?php

$host = "localhost";
$user = "root";
$pasword = "";
$database = "order_flow";

$conn = mysqli_connect($host, $user, $pasword, $database);

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}