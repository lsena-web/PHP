<?php
//---------------------------------------------------------------------------variaveis globais e locais 
$nome = "lucas";
$a = 2;
$b = 2;
$c = 2;

function exibe(){

global $nome;

echo $nome;

}

exibe();

echo "<hr>";

function soma() {

    //$soma = $a + $b + $c; 

   // echo $soma;

 echo  $GLOBALS['a'] + $GLOBALS['c'] +$GLOBALS['b']; 

}

soma();
echo "<hr>";


//----------------------------------------------------------------------------CONSTANTE
//obs: AS CONSTANTES SÃO GLAOBLAIS
define("NOME","JOSE CARLOS");
define("IDADE", 24);
define("ALTURA",1.84);
define("SOLTEIRO", true);

echo var_dump(ALTURA);

echo "<hr>";
echo "<hr>";

define("TIMES",['SP','FL','LC']);
echo TIMES[1];
echo "<hr>";
echo "<hr>";


//---------------------------------------------- a variavel count conta


$carros = array("bmw","Hilux");
echo $carros[1];

echo "<hr>";
echo "<hr>";

//abaixo ela está contando um array

echo count($carros);
