<?php

/*

Cadenas de texto: String


*/
$cadena = "Hola";
$cadena[0] = "C";

echo "Ahora cadena es: " . $cadena; //Se ha cambiado la H por la C

//Funciones preestablecidas de PHP
//strlen --> medir la longitud de la cadena
$cadena = "Aquesta caena te moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de caracters es: " . $num_caracters . "</br>";

//strpos --> Retorna la casella on troba la subcadena dins la cadena pasada.
//Sempre retorna la primera ocurrencia

$email  = "hola@gmail.com";
echo "Posició @: " . strpos($email, "@") . "</br>";

//strcmp --> string compare, compara dos cadenas.
//Si retorna 0 es igual
//Si retorna <0 la primera cadena es mas pequeña
//si retorna >0 la primera cadena es mas grande

$cad1 = "AAAAAA";
$cad2 = "AAAAAA";
echo "Utilizamos strcmp: " . strcmp($cad1, $cad2) . "</br>";

//substr: Retorna una subcadena de caracters d'una cadena a partir d'una posicio especificada fins al final o del tamany especificat.
//La cadena original no pateix cap modificacio

$cadena = "PHP es un llenguatge facil";
echo "El substr de 0 a 3 es: " . substr($cadena, 0, 3) . "</br>"; //Saldra php
echo "El substr de 21: " . substr($cadena, 21) . "</br>";

//trim: eliminar los espacios en blanco y saltos de linea que hay al principio y al final de una cadena
echo "Ejemplo con trim: " .trim("        Hola que tal            ") . "</br>";

//ltrim: elimina los espacios que hay en blanco al principio de la cadena
echo "Ejemplo con trim: " .ltrim("        Hola que tal            ") . "</br>";

//str_replace($antiga, $nova, $cadena): substitueix la cadena $antigua per la cadena $nova dins de $cadena
$cadena = "PHP es facil";
$antiga = "es facil";
$nova = "no es dificil";

echo "Ejemplo str_replace: " . str_replace($antiga, $nova, $cadena) . "</br>";

//ereg_replace / eregi_replace()

//strtolower($cadena): passa la cadena a minusculas

//strtoupper($cadena): passa la cadena a mayusculas

//explode: permet dividir una cadena segons un caracter o patró


/*
    EXERCICIS:
        1. Busca en php.net la funcio: str_word_count() y pon un ejemplo
            str_word_count — Cuenta el número de palabras utilizadas en un string


        2. Busca en php.net la funció: levenshtein() y pon un ejemplo
            levenshtein — Calcula la distancia Levenshtein entre dos strings


        3. Busca que es un operador ternario y pon un ejemplo
            El operador ternario en PHP es una forma rápida y corta de escribir una estructura condicional if-else en una sola línea
                $resultado = (condición) ? valor_si_verdadero : valor_si_falso;
        
        4. Explicar que hace esta funcion
            function funcioMultipleReturns($v1, $v2, $v3){
                $v1 = "variable1";
                $v2 = "variable2";
                $v3 = "variable3";

                return array($v1, $v2, $v3);
            }

        5. Crea una funcio comprova_email(...) que reciba una cadena de caracteres como parametro
        que contiene un email y hace las siguientes comprobaciones.

            - convertir a minusculas
            - eliminar todos los espacios en blanco
            - comprobar si tiene el caracter @
            - contar el numero de caracteres
        
    FALTAAAA!!!!
*/



?>