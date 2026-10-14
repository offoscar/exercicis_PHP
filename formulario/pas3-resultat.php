<?php

/*
 * PAS 3 - Una sola pagina 
 * fins ara teniem dos fitxers, el formulari i el resultat
 * Mira com es fa la peticio i aixi fara una cosa o altre
 * La primera visita es amb GET i cuan es prem el botó
 * d'enviar es amb POST
*/


$nom = '';
$correu = '';
$dia = '';

$enviat = false;

//Array predefinudo $SERVER nos da informacion del servidor
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>