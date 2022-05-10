<?php

class Humano{

    public $idade;

    // esse metodo magico é inicializado quado utilizamos a palavra chave "clone"
    public function __clone(){

        echo "clonagem ";

    }

}

$humano = new Humano();
$humano->idade = 21;

$humano2 = $humano;
$humano2->idade = 31;

// o valor vai ser 31 pois humano2 não é uma nova instancia da classe Humano
// humano2 é um objeto que faz "referencia" ao objeto humano
// por isso que quando damos echo "$humano->idade" ele mostra "31"
// resumindo... estamos tendo como referencia da classe "Humano" o "humano2", obs: no caso de duvidas va ao dicionario e pesquise por "referencia", serio, eu não estou brincando
echo $humano->idade;
echo "<hr>";

//---------CLONAGEM

//vamos clonar o objeto Humano

// olha o metodo __clone da class Humano kkkk
$humano3 = clone $humano;
$humano3->idade = 41;

// perceba que aqui foi clonado então não irá mudar o valor do humano
// estou dando echo no humano3, se liga man
echo $humano3->idade;
echo "<hr>";

// aqui é só para testar se vai ou não mudar o valor do humano
echo $humano->idade;

















// class      = objeto
// variaveis  = atributos
// funções    = metodos
// isso é para caso vc esqueça hehe