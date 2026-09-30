<?php

/*

Definicion de una funcion:
    function nomfuncion($arg1, $arg2){
        codigo de la funcion
        return (no siempre) 
    }
*/

function funcionTest(){
    $var = 10;
    return $var;
}

//Como la funcion tiene un return, tengo que igualarla a una variable para recoger el valor del return.

$var_fun = funcionTest();
echo "La variable igualada a la funcion vale: " . $var_fun . "</br>";


function funcionTestSin(){
    //Esta variable es local de esta funcion
    $var = 20;
    echo "La variable dentro de la funcion vale: " . $var . "</br>";
}

funcionTestSin();
//Error en var
//echo "La variable var da error? $var"


/*
Como podemos utilizar dentro de las funciones variables globales
*/
$var2 = 50;
function funcionConGlobal(){
    //Para poder utilizar una variable de fuera del ambito de la funcion se utiliza la palabra reservada global
    global $var2;

    echo "La variable var2 de fuera de la funcion vale: $var2";
    }
funcionConGlobal();


//Recursividad --> Una funcion se puede llamar a si misma.
function factorial($numero){
    if($numero == 1){
        return $numero;
    }
    else{
        return $numero * factorial($numero - 1);
    }
}

echo "</br>El factorial de 7 es: " .factorial(7). "</br>";



?>