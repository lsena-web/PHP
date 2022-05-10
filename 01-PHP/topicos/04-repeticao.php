<?php

//---------------WHILE
// faz a verificação  e depois executa o trecho de codigo
$contador = 1;

// pode ser usado { } no lugar de : endwhile
while($contador <= 10):
    echo "contador é $contador <br>";
++$contador;
endwhile;


echo "<hr>";

//--------------DO WHILE

//executa o trecho de codigo e depois faz a verificação
$contador1 = 1;
do{

    echo "contador é $contador1 <br>";
    ++$contador1;
}while($contador1 <= 10);    


echo "<hr>";

//------------------- FOR

// USAMOS QUANDO JA SABEMOS ANTECIPADAMENTE O NÚMERO DE REPETIÇOES  

// pode ser usado { } no lugar de : endfor
for($contador2 = 0; $contador2 <= 10; $contador2++ ):

    echo "contador FOR é $contador2 <br>";


endfor;

echo "<hr>";

//-------------------------- foreach


// foreach significa para cada
// pode ser usado { } no lugar de : endforeach

// A CADA REPETIÇÃO ELE ATRIBUIU UM ITEM DO ARRAY A VARIAVEL VALOR 

$cores = array("verde","vermelho","azul");

/*CASO QUEIRA MOSTRAR O INDICE DO ARRAY BASTA CRIAR UMA VARIAVEL
COM ESTA SETA => APONTADA PARA A VARIAVEL QUE RECEBERÁ O VALOR
EXEMPLO $INDICE => $VALOR INDICE RECEBE OS INDICES E O VALOR RECEBE O VALORES DO ARRAY*/
foreach($cores as $indice => $valor):

    echo $indice." - ".$valor."<br>";

endforeach;