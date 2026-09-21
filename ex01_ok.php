<?php
declare(strict_types=1);
ini_set('display_error', '1');
//setlocale() date_default_timezone_set();

echo 'Hola';            
echo 'Hola', ' ', 'món';
echo '<p>Text</p>';


//Aqui la X y Dades no estaba definida para el var_dump y print_r asi que la defino arriba
$x = 0;
$dades = 'Hola';
print 'Hola';      // retorna l
var_dump($x);      // per depurar
print_r($dades);      // llegible

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat';    // es pot canviar
$total = $edat + 1; 

echo $nom; 


$x = 5;
$x = 'cinc';

$a = '10' + 5; 
$b = '10' . 5;

var_dump($a, $b);

$nom = 'Aina';
echo 'Hola $nom';

//Hola $nom

$nom = 'Aina'; 
echo "Hola $nom"; 

//hola Aina  

$nom = 'Aina'; $punts = 8; 

echo 'Hola' . $nom . ', tens' . $punts . ', punts';
echo "Hola $nom, tens $punts punts";
echo "Hola {$nom}, tens {$punts} punts";

define('IVA', 0.21);
const BOTIGA = 'Ca la Web';

echo BOTIGA;

//Aqui me saltaba error ya que %base no estaba definido.
$base = 2;
$total = $base * (1 + IVA);

//IVA = 0.10; -> error fatal


$missatge = 'Hola';

function saluda(){
    //Aqui el missatge no lo recibia de afuera, asi que lo tengo que definir el missatge
    $missatge = 'Hola';
    $intern = 'Adeu';
    return $intern;
}

$intern = saluda();
echo $intern;
?>