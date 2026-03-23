<?php
if(isset($_GET["año"])){

    $año = $_GET["año"];
    
    if($año %  4 == 0){
        echo "el año es bisiesto";
    }    elseif($año %  4 ==! 0){
        echo "el año no es bisiesto";
    }elseif($año % 100 == 0){
        echo "el año no es bisiesto";
    }elseif($año % 400 ==  0){
        echo "el año es bisiesto";
    }else{
        echo "ingresa un  numero valido";
    }
}