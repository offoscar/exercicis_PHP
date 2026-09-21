<?php
declare(strict_types=1);
ini_set('display_error', '1');
error_reporting(E_all);
//setlocale() date_default_timezone_set();  <br>

echo 'Hola';            
echo 'Hola', ' ', 'món';
echo '<p>Text</p>';

print 'Hola';      // retorna l
var_dump($x);      // per depurar
print_r($dades);      // llegible

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat';    // es pot canviar
$total = $edat + l; 

echo $nom; 


$x = 5;
$x = 'cinc';

$a = '10' + 5; 
$b = '10' . 5;

var_dum($a, %b);

$nom = 'Aina';
echo = 'Hola $nom';

//Hola $nom

$nom = 'Aina'; 
echo = "Hola $nom"; 

//hola Aina  

$nom = 'Aina'; $punts = 8; 

echo 'Hola' . $nom . ', tens' . $punts . ', punts';
echo "Hola $nom, tens $punts punts";
echo "Hola {$nom}, tens {$punts} punts";

define{'IVA', 0.21};
const BOTIGA = 'Ca la Web';

echo BOTIGA;
$total = $base * (l + IVA);

//IVA = 0.10; -> error fatal <br>


$missatge = 'Hola';

function saluda(){
    echo $missatge;     //No la veu
    $intern = 'Adeu';   //Ambit local
}

saluda();
echo $intern;
?>