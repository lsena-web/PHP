<?php

echo "<br>";
echo "<br>";

//-----------------------  FORMATAÇÃO DE NÚMEROS

$db = 1234.56;

//parametro 1 "$db"
//parametro 2 casas decimais "2"
//parametro 3 separador decimal ","
//parametro 4 separador de milhares "."


$preco = number_format($db,2,",",".");

echo "o valor do produto é $preco";

echo "<hr>";


//-------------------------   ARREDONDA VALORES
//OBS: pode arredondar para + ou -
echo round(3.6);


echo "<hr>";

//------------------ ESTA FUNÇÃO SO ARREDONDA PRA CIMA


echo ceil(1.1);

echo "<hr>";
//------------------ ESTA FUNÇÃO SO ARREDONDA PRA BAIXO

echo floor(3.9);

//------------------- NÚMEROS RANDÔMICOS

//parametro 1 determina o menor numero que será sorteado "1"
//parametro 2 determina o maior numero que será sorteado "20"
echo rand(1,20);