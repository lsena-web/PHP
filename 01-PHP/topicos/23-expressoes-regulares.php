<?php

// DEFINE UM PADRÃO A SER USADO PARA PROCURAR OU SUBSTITUIR PALAVRAS OU UM GRUPO DE PALAVRAS






// coloca-se sempre duas barras e dentro dela o tipo de validação
// obs: essas validações são case sensitive

// VALIDAÇÃO 1 ^ SE VC QUER VALIDAR PELO O PRIMEIRO CARACTERE EX: ^ a
// VALIDAÇÃO 2 $ SE VC QUER VALIDAR PELO O ULTIMO CARACTERE EX:  c $
// VALIDAÇÃO 3 ^ $ SE VC QUER VALIDAR SOMENTE SE A STRING FOR IGUAL A VALIDAÇÃO EX: ^abc$

// ---------------VALIDAÇÃO POR CONJUNTO DE CARACTERES-------------------------

// VALIDAÇÃO 1 [a-z] valida qualquer caractere do a ao z que seja minusculo 
// VALIDAÇÃO 2 [A-Z] valida qualquer caractere do A ao Z que seja MAIUSCULO
// VALIDAÇÃO 3 [a-z0-9] valida qualquer caractere do a ao z alem de validar qualquer numero do 0 ao 9

//---------------- VALIDAÇÃO POR QUANTIDADE DE CARACTERES---------------------------------

// até agora estavamos validando literalmente 1 caractere...a partir de agora vamos determinar quantos cararcteres iremos validar

// VALIDAÇÃO 1 {1,4} AQUI PODEMOS VALIDAR DE 1 A 4 CARACTERES OU OCORRENCIAS       
// VALIDAÇÃO 2 {5} AQUI PODEMOS VALIDAR 5 CARACTERES OU OCORRENCIAS
// OBS: OCOORENCIAS NESSE CASO É IGUAL A CARACTERES.... OCORRENCIAS = CARACTERS

// ESPECIFICIDADES
// SE COLOCARMOS O "?$" NO LUGAR DE "{}" SIGNIFICA QUE SERÁ UMA OU NENHUMA OCORRENCIA
// SE COLOCARMOS O "*$" NO LUGAR DE "{}" SIGNIFICA QUE SERÁ NENHUMA OU VARIAS OCORRENCIAS
// SE COLOCARMOS O "+$" NO LUGAR DE "{}" SIGNIFICA QUE SERÁ UMA OU MAIS OCORRENCIAS

// ------------------VALIDAÇÃO DE CASE SENSITIVE-----------------------------------

// CASO VC QUEIRA IGUINORAR O CASE SENSITIVE BASTA COLOCAR um "i" minusculo DEPOIS DA BARRA LATERAL DIREITA EX:  $padrao = "/^a/i";

$string = "abc";// STRING A SER VALIDADA
// aqui eu quero validar qualquer caractere de a - z, so podera ter no minimo um e no max 3 caracteres e estou ignorando o case sensitive
$padrao = "/^[a-z0-6]{1,3}/i";// VALIDAÇÃO OBS: HA VARIOS MANEIRAS DE VALIDAÇÃO


// SE A STRING FOR VALIDADA
if(preg_match($padrao,$string)):

    echo "valido";
    echo "<hr>";

else:

    echo "invalido";
    echo "<hr>";


endif;

// validação pratica de E-mail

$string1 = "lucas@gmail.com";
$padrao1 = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i";
/* para validar esse email eu coloquei para validar qualquer caracterede de a - z, de 0 a 9, ".", "-", "_" SOMEI MAIS @, CRIEI OUTRO CONJUNTO PARA DEPOIS DO ARROBA
E NESSE CONJUNTO PODE ENTRAR qualquer caracterede de a - z, de 0 a 9, ".", "-", "_" SOMEI MAIS "." E DEPOIS PREDEFINI AS TERMINAÇÕES DO EMAIL QUE PODERIAM SER (com, br, com.br, net)
LEMBRANDO QUE EU COLOQUEI NO INICIO: ^ E NO FINAL: $

OBS: "." SIGNIFICA (CONCATENAR) ENTÃO EU COLOQUE A BARRA INVERSA \ NA FRENTE PARA PERDER ESSE SENTIDO E VIRAR APENAS UM PONTO COMUM
     "-" É A SEPARAÇÃO DO A-Z0-9 PARA PERDER ESSE SENTIDO DE (SEPARAÇÃO) EU COLOQUEI A "-" ENTRE DUAS BARRAS INVERSAS \\ ASSIM O SENTIDO FICA APENAS DE UM TRAÇO COMUM "-"
     NOTA - SE QUE A BARRA INVERSA INVERTE O SENTIDO DE UM CARACTERE.

*/


// SE A $string1 FOR VALIDADA
if(preg_match($padrao1,$string1)):

    echo "valido";
    echo "<hr>";

else:

    echo "invalido";
    echo "<hr>";


endif;

// VALIDAÇÃO DE DATAS

$string2 = "08/09/1999";

$padrao2 = "/^[0-9]{2}+\/[0-9]{2}+\/[0-9]{4}$/";

/* lucas o caso das datas é similar com o caso do email, então não explicarei */


// SE A $string2 FOR VALIDADA
if(preg_match($padrao2,$string2)):

    echo "valido";
    echo "<hr>";

else:

    echo "invalido";
    echo "<hr>";


endif;



?>