<?php

include("Conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
$direccion_entrega = $_POST['direccion_entrega'];
$numero_telefono = $_POST['numero_telefono'];

$sql = "INSERT INTO usuarios (nombres, apellidos, correo, direccion_entrega, numero_telefono, contraseña) VALUES ('$nombres', '$apellidos', '$correo', '$direccion_entrega', '$numero_telefono', '$contraseña')";

mysqli_query($conn, $sql);

echo"Usuario registrado correctamente";
