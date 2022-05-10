<?php

$a = 10;
$b = 5;

$c = 12;
$d = 6;

$e = 14;
$f = 7;

$g = 16;
$h = 8;

$i = 18;
$j = 9;



 $a = $a + $b; // OU  $a += $b; soma
 echo $a;
 echo "<br>";

 $c = $c - $d; // OU  $c -= $d; subtrasção
 echo $c;
 echo "<br>";

 $e = $e * $f; // OU $e *= $f; multiplicação
 echo $e;
 echo "<br>";

 $g = $g / $h; // OU $g /= $h; divisão
 echo $g;
 echo "<br>";

 $i = $i % $j; // OU $i %= $j; resto da divisão
 echo $i;

/*
OPERADORES DE COMPARAÇÃO

!= NÃO IGUAL
== IGUALDADE
=== IDENTICO                      OBS: IDENTICO ELE COMPARA OS TIPOS EX: 10 E "10" ELES NÃO SÃO IDENTICOS POIS O 10 É UM INT E O "10" É UMA STRING  
!=== NÃO IDENTICO                 JÁ A IGUALDADE NÃO REPARA NISSO

> MAIOR QUE
< MENOR QUE
<> DIFERENTE DE
<= MENOR IGUAL 
>= MAIOR IGUAL
<=>  EX: 20<=>30 SE O LADO ESQUERDO FOR MAIOR RETORNA -1 SE O LADO DIREITO FOR MAIOR RETORNA 1 SE AMBOS OS LADOS FOREM IGUAIS RETORNA 0

*/

/*
 OPERADORES LÓGICOS OBS: NOS  PERMITE FAZER COMPARAÇÕES ENTRE EXPRESSÕES

 (&& - and) e
 (|| - or) ou
 (xor) ou exlusivo         obs: se os dois forem verdadeiros ele retorna falso
 (!) negação               inverte o estado lógico da operação obs: se for verdadeiro ele inverte para falso se for falso eloe retorna para verdadeiro


*/




?>