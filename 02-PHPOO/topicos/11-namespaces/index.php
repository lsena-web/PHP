<?php

/* as namespaces são ultilizadas para evitar conflitos de mesmo nome, percebe-se que...

na pasta models tenho um arquivo chamado "produto.php" que contem uma função chamada "mostrarDetalhes();"
na pasta classes tenho um arquivo tambem chamadado "produto.php" que tambem contem uma função chamada "mostrarDetalhes()"

agora como eu faço para diferencia esses arquivos? perceba logo abaixo hehehe!

*/
require 'classes/produto.php';
require 'models/produto.php';


// se eu fizer esse instanciamento, vai da erro por conflito de nomes "$produto = new Produto;" como eu faço para evitar isso?

//para saber como fazer esse tipo de instanciamento eu coloquei namespace em cada um dos arquivos e depois.... so instanciar de acordo com o modelo abaixo

                //nome do namespace 
$produto = new \classes\Produto(); //nesse caso eu fiz o instanciamento da classe produto que está dentro da pasta "classes"
$produto->mostrarDetalhes();

echo "<hr>";

                //nome do namespace 
$produto1 = new \models\Produto(); //nesse caso eu fiz o instanciamento da classe produto que está dentro da pasta "models"
$produto1->mostrarDetalhes();

/*

//podemos tambem fazer isso

// chamando a classe da pasta models
use models\Produto;
echo "<hr>";

// chamando a classe da pasta classes
use classes\Produto;


///////////////////////////////////////////////
ainda podemos apelidar ex:

// chamando a classe da pasta classes
use classes\Produto as classes2;

e na hora do instanciamento faz isso

$produto = new classes2();

*/
?>