<?php
//Funciones con retorno
function calcular_area_circulo($radio){
    $area = pi() * pow($radio, 2);
    echo "<p> El area del circulo con radio $radio es: $area </p>";
}

$area_circulo=calcular_area_circulo_(5);
echo "<p> El area del circulo con radio 5 es : $area_circulo </p>";

function calcular_imc($peso, $estatura){
    $imc = $peso / pow($estatura, 2);
    echo "<p> El imc es $imc </p>";
}

function clasificador_imc($imc){
    if($imc<18.5){
        echo"/.5<p> Clasificacion de imc :bajo peso</p> <br>";
    }elseif($imc>= 18.5 && $imc <24.9){
        echo"/.9<p> Clasificacion de imc: peso normal</p> <br>";
    }elseif($imc >= 25 && $imc <29.9){
        echo"/.9<p> Clasificacion de imc: sobrepeso</p> <br>";
    }else{
        echo"<p> Clasificacion de imc: Obesidad</p> <br>";
    }
}

$imc_luis = calcular_imc(85, 1.90);
echo"<p> el imc de luis es : $imc_luis</p>";
clasificador_imc($imc:luis);

//Funciones con parametros por defectos
function calcular_area_triangulo($base, $altura = 10){
    $area = ($base * $altura) / 2;
    echo"<p> El area del triangulo con base $base y altura $altura es : $area</p>";
}

calcular_area_triangulo(4);

calcular_area_triangulo(8, 15);

//Funciones sin parametro
function mostrar_fecha_actual(){
    $fecha_actual = date("d-m-Y");
    $hora_actual = date("H:i:s");
    echo"<p> La fecha actual es : $fecha_actual y la hora actual es: hora_actual</p>";
}
mostrar_fecha_actual():

//Funciones con parametros opcionales
function calcular_area_triamgulo2($base, $altura = null){
    if($altura === null){
        echo"<p>No se especifico la altura, no se puede calcular el area del triangulo"
    }else{
        $area = ($base * $altura) / 2;
    echo"<p> El area del triangulo con base $base y altura $altura es : $area</p>";
    }
}
calcular_area_triangulo2(5);
calcular_area_triangulo2(5, 12);

function saludar_usuario($nombre, $apellido, $edad, $cuidad=null){
    if($ciudad === null){
        echo"<p> Hola, $nombre $apellido. tienes $edad años. No se especifico la ciudad de origen</p>";
    }else{
        echo"<p> Hola, $nombre $apellido. tienes $edad años y eres de $ciudad</p>";
    }
}

saludar_usuario("Laura", "Gracia", 30);
sañudar_usuario("Carlos", "Perez,", 30, "Barcelona")

//Manejo de archivos
//fopen().Funcion para abrir archivos

function escribir_en_archivo($nombre_archivo, $contenido){
    $archivo = fopen($nombre_archivo, "w");
    if($archivo === false){
        echo"<p> No se pudo abrir el archivo $nombre_archivo</p>";
    }else{
        fwrite($archivo, $contenido);
        fclose($archivo);
    }
}
escribir_en_archivo("archivo.txt, Hola, este es un archivo de texto creado en php");

//Modos de apertura
//r - lectura
//w - escritura
//a - agrega
//r+ - lectura y escritura
//a+ - lectura y escritura
//w+ - escritura y lectura

//Ejemplo de apertura 
function leer archivo($nombre_archivo){
    $archivo = fopen($nombre_archivo, "r");
    try{
        if($archivo === false){
            throw new Exception("No se pudo abrir el archivo $nombre_archivo");
        }else{ 
            while(!feof($archivo)){
                $linea = fgets($archivo);
                echo"<p>$linea</p>";
            }
        }
    } catch(Exception$e){
        echo"<p>"
    }
}
leer_archivo("archivo.txt");

?>
