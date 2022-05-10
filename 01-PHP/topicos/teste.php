<?php

// COMENTARIO 1
/*  COMENTARIO 2 */
#  COMENTARIO 3; 



$a = 1;
$b = 2;
$c = 3;
$carros = array ("bmw","hillux");

echo $carros[0];
echo "<br>";
echo "<br>";
foreach ($carros as $valor)

echo $valor."<br>";


$nome = "texto";

function exibir(){

    global $nome;

    echo $nome;

}

exibir();

echo "<br>";

function soma(){

    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 

}



?>