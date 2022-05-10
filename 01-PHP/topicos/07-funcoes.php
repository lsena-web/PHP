<?php


// criando funções

// FUYNÇÃO COM PARÂMETRO
function exibirNome(){

echo "My name is Damião";

}

exibirNome();

echo "<br>";




// FUNÇÃO COM PARÂMETRO
function mostrarNome($nome){

echo "My last name is $nome";

}

mostrarNome("Lucas");

echo "<hr>";



// FUNÇÃO COM PARAMETRO MAIS DETALHADO
function calcularMedia($nome,$n1,$n2,$n3,$n4){

$media = ($n1+$n2+$n3+$n4)/4;

if($media >= 7){

echo "$nome aprovado e sua nota foi: $media";
echo "<br>";

}else{

    echo "$nome reprovado e sua nota foi: $media";
    echo "<br>";

}


}


calcularMedia("lucas",7,8,9,10);

calcularMedia("OPA",5,4,3,1);
