<?php
// Ejemplo1: Registro con validacion basica

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST["nombre"])&&_isset($_POST["correo"])&&isset($_POST["contraseña"])&&_isset($_POST["edad"])){
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
        $edad = $_POST["edad"];

        if(strlen($contraseña) < 8){
            echo "<p style='color:red;>¡La contraseña debe tener al menos <strong>8 caracteres</strong>!</p>";{
            }elseif($edad <= 0){
                echo"<p> style='color:red;'>La edad debe de ser un numero positivo!</p>";{
                }else{
                    echo "<h2 style='color:green'> Tu registro ha sido exitoso!</h2>";
                    echo "<p><strong>Nombre completo: </strong> . $nombre . </p>";
                    echo "<p><strong>Correo electronico: </strong> . $correo . </p>";
                    echo "<p><strong>Contraseña: </strong> . $contraseña_oculta . </p>";
                    echo "<p><strong>Edad: </strong> . $edad . </p>";
                }else{
                    echo "<p style='color:red;'>¡Por favor completa todos los campos!</p>";
                }
                }else{
                    echo "<p style='color:red;'>¡El formulario no ha sido enviado correctamente!</p>";
                }
            }
        }
        }
        }