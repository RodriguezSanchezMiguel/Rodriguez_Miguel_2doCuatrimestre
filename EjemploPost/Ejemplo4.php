<?php
// Ejemplo 4 - Inicio de sesion

$usuario_correcto = "admin";
$contrasena_correcta = "lacontraseña123";

if($_SERVER ["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["username"]) && isset($_POST["pasword"])){
        $usuario_ingresado = $_POST["username"];
        $contrasena_ingresada = $_POST["pasword"]

        if(($usuario_correcto == $usuario_ingresado) && ($contrasena_correcta == $contrasena_ingresada)){
            echo "<p style='color:green;'> Bienvenido, $usuario_correcto!</p>";
        }else{
            if(($usuario_correcto !== $usuario_ingresado) && ($contrasena_correcta !== $contrasena_ingresada)){
            }elseif($usuario_correcto !== $usuario_ingresado){
                echo"<p style'color:red;'> Error: Usuario incorrecto </p>"
            }else{
                echo"<p style='color:red'; Error: Usuario y contraseña incorrecta </p>"
            }
        }
    }
}