<?php
   $num1=28;
   $num2=15;

   //condicionales

    //Condicional if simple
    if($num1 > $num2){
        echo "$num1 es mayor que $num2<br>";
    }

    //Condicional if-else
    if($num1 < $num2){
        echo "$num1 es menor que $num2<br>";
    } else {
        echo "$num1 no es menor que $num2<br>";
    }

    //Condicional if-elseif-else
    if($num1 < $num2){
        echo "$num1 es menor que $num2<br>";
    } elseif($num1 > $num2){
        echo "$num1 mayor que $num2<br>";
    } else {
        echo "$num1 es igual a $num2<br>";
    }

    //Condicional switch
    $dia = 3;
    switch($dia){
        case 1:
            echo "Lunes<br>";
            break;
        case 2:
            echo "Martes<br>";
            break;
        case 3:
            echo "Miércoles<br>";
            break;
        case 4:
            echo "Jueves<br>";
            break;
        case 5:
            echo "Viernes<br>";
            break;
        case 6:
            echo "Sábado<br>";
            break;
        case 7:
            echo "Domingo<br>";
            break;
        default:
            echo "Número de día inválido";
    }

    //bucles

    //Bucle while
    $contador=0;
    while($contador <10){
        echo "Contador (while): $contador<br>";
        $contador++;
    }

    //Bucle do-while
    $contador2=0;
    do{
        echo "Contador (do-while): $contador2<br>";
        $contador2++;
    }while($contador2 <10);

    //Bucle for
    for($i=0; $i<10; $i++){
        echo "Contador (for): $i <br>";
    }

    //Bucle foreach
    $frutas = array("Manzana", "Pera", "Mango", "Kiwi", "Uva");
    foreach($frutas as $fruta){
        echo "Fruta $fruta<br>";
    }

    //Array indexado
    $numeros = array(10, 20, 30, 40, 50, 60, 70);
    foreach($numeros as $numero){
        echo "Numero: $numero<br>";
    }

    //Array asociativo
    $persona = array(
        "nombre" => "Juan",
        "edad" => 30,
        "ciudad" => "Madrid",
        "profesion" => "Abogado"
    );
    foreach($persona as $clave => $valor){
        echo "$clave: $valor<br>";
    }

    //Array multidimnensional
    $empleados = array(
        array(
            "idEmpleado" => 1,
            "nombre" => "Ana",
            "departamento" => "Recursos Humanos",
            "salarioquincenal" => 6000
        ),
        array(
            "idEmpleado" => 2,
            "nombre" => "Luis",
            "departamento" => "Ventas",
            "salarioquincenal" => 5500 
        ),
        array(
            "idEmpleado" => 3,
            "nombre" => "Marta",
            "departamento" => "Marketing",
            "salarioquincenal" => 7000
        )
    );
    foreach($empleados as $empleado){
        echo "ID Empleado: " . $empleado["idEmpleado"] . "<br>";
        echo "Nombre: " . $empleado["nombre"] . "<br>";
        echo "Departamento: " . $empleado["departamento"] . "<br>";
        echo "Salario Quincenal: " . $empleado["salarioquincenal"] . "<br><br>";
    }

    //Funciones para arrays
    $nombres = array("Carlos", "Ana", "Pedro", "Luisa");
    sort($nombres);//Ordena el array en orden ascendente
    echo "Nombres ordenados:<br>";
    foreach($nombres as $nombre){
        echo "Nombres ordenados: $nombre<br>";
    }

    //C0ntar elementos del array
    $cantidadNombres = count($nombres);
    echo "Cantidad de nombres en el array: $cantidadNombres<br>";

    //Agregar elementos del array
    array_push($nombres, "Sofía");
    echo "Nombres después de agregar Sofía:<br>";
    foreach($nombres as $nombre){
        echo "Nombres: $nombre<br>";
    }

    //Eliminar el último elemento del array
    array_pop($nombres);
    echo "Nombres después de eliminar el último elemento:<br>";
    foreach($nombres as $nombre){
        echo "Nombres: $nombre<br>";
    }

    //Buscar un elemento en el array
    $posicion = array_search("Pedro", $nombres);   
    if($posicion !== false){
        echo "Pedro encontrado en la posición: $posicion<br>";
    } else {
        echo "Pedro no encontrado en el array<br>";
    }

    //Combinar dos arrays
    $array1 = array("A", "B", "C");
    $array2 = array("D", "E", "F");
    $arrayCombinado = array_merge($array1, $array2);
    echo "Array combinado:<br>";
    foreach($arrayCombinado as $elemento){
        echo "Elemento: $elemento<br>";
    }

    ?>
    