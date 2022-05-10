<?php
// aspas simples ' ' são literais, ou seja, mostra o texto do jeito que está lá
// aspas duplas " " são interpretadas, ou seja, se tiver uma variavel entre aspas duplas ela será interpretada 



//----------------------------------------------------------- DEIXAR STRING CAIXA ALTA

$nome = "lucas";
$novonome = strtoupper($nome);
echo $novonome;

echo "<hr>";

//------------------------------------------------------------ deixa string caixa baixa

$nome1 = "LUCAS";
$novonome1 = strtolower($nome1);
echo $novonome1;

echo "<hr>";

//-------------------------------------------------------- RETORNA A PARTE QUE VOCÊ DESEJAR DE UMA STRING

$mensagem = "hello wolrd";

// O "0" INDICA A POSIÇÃO DE ONDE IRA COMEÇAR A STRING
// O "5" INDICA O COMPRIMENTO DA STRING...OU SEJA ATÉ O CARACTER 5
echo substr($mensagem, 0, 5);


echo "<hr>";


//-----------------------------------------------------VOCE INDICA A QUANTIDADE DE CARACTERES DE UMA STRING
/*
PARAMETRO 1 A VARIAVEL
PARAMETRO 2 A QUANTIDADE DE CARACTERES
PARAMETRO 3 O PRENCHIMENTO DO QUE FALTA SER OCUPADO EX: "MOUSE" TEM  5 CARACTERES, MAS NO PARAMETRO 2 EU INDIQUEI QUE AQUELA VARIAVEL TERIA 10 CARACTERES
ENTÃO O RESTO SERÁ PREENCHIDO COM "*"
PARAMETRO 4 POSICIONAMENTO DO PREENCHIMENTO "STR_PAD_LEFT",  "STR_PAD_RIGHT", "STR_PAD_BOTH" (DIVIDE TANDO DE UM LADO COMO DO OUTRO) OBS: ELES SE ESCREVEM MAIUSULOS

*/

$objeto = "mouse";
$new = str_pad($objeto, 10,"*", STR_PAD_BOTH);
echo $new;



echo "<hr>";

//-------------------------------------------------- REPETE A STRING

$string = str_repeat("sucesso!", 5);

echo $string;

echo "<hr>";

//------------------------------------------------- RETORNA O COMPRIMENTO DA STRING...OU SEJA A QUANTIDADE DE CARACTERES QUE UMA STRING TEM

$mensagem = "olá mundo";

echo strlen($mensagem);
echo "<hr>";

//-------------------------------------------------- SERVE PARA SUBSTITUIR UMA PALAVRA DE UM TEXTO

echo $texto = "A seleção Argentina será campeã da copa do mundo de 2024";

echo "<br>";
echo "<br>";

// PARAMETRO 1 PALAVRA QUE SERÁ SUBSTITUIDA
// PARAMETRO 2 PALAVRA QUE IRÁ SUBSTITUIR
// PARAMETRO 3 VARIAVEL EM QUESTÃO
$new = str_replace("Argentina", "Brasileira",$texto);

echo $new;
echo "<hr>";

//---------------------------------------------- RETORNA A POSIÇÃO DE UMA PALAVRA EM UM TEXTO
// PARAMETRO 1 VARIAVEL EM QUESTÃO
// PARAMETRO 2 PALAVRA QUE QUERES SABER O POSICIONAMENTO
echo strpos($texto,"copa");