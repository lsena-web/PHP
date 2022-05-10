<?php
/*

COMPOSIÇÃO

- Na composição, uma classe cria a instância de outra classe dentro de si própia, sendo assim, quando ela for destruída, a outra classe também será

*/

class Human{
    public function atruibuiNome($nome){
        return "O nome é ".$nome;
    }
}

class Exibe{

    public $human;
    public $nome;

    public function __construct($nome){
        // momento da composição
        $this->human = new Human(); // instaciei a class "Human" com a variavel de escopo classe exibe "human"
        $this->nome = $nome; // valor que o construtor recebe é passado para "nome" do escopo da class exibe
    }

        function exibeNome(){
            //essa função pega "human do escopo local" chamando a função exibe nome da outra classe pois ja está instanciada
        echo $this->human->atruibuiNome($this->nome); //além de passar como parâmetro  "nome do escopo local"
        //hehehe essa sacada foi massa
    }

}

$exibe = new Exibe("Lucas");

$exibe->exibeNome();