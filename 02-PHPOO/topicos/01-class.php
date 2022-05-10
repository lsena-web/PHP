<?php


// Aqui iremos aprender um pouco sobre classes, atributos e metodos


// boa pratica: sempre começar o nome da classe com uma letra maiúscula
class Pessoa{

    //atributos são as caracteristicas da pessoa
    public $nome;
    public $idade;

    // metodos são as ações das pessoa
    public function Falar(){

        //para ultilizarmos os atributos ou os metodos denro do escopo da classe usamos o $this
        // escopo da classe significa tudo que está dentro da classe
        // $this quer dizer "este"
        echo $this->nome." de ".$this->idade." anos de idade acabou de falar";

    }


}

//instanciamento de classe
$lucas = new Pessoa();      // se eu instanciei com a variavel "$lucas", para me usar tudo da classe pessoa eu tenho que colocar "$lucas" na frente

echo "<br>";
echo "<br>";

// agora eu posso usar os atributos 
$lucas->idade = 25;
$lucas->nome = "lucas milgrau";
echo "<br>";
echo "<br>";

echo $lucas->idade = 21;
echo "<br>";
echo "<br>";

echo $lucas->nome = "lucas milgrau";
echo "<br>";
echo "<br>";
// agora eu posso usar o metodo falar tambem
$lucas-> Falar();                            // percebe - se que eu chamei o metodo falar após definir os atributos, se eu tiveese chamado o metodo antes aquela frase dentro do metodo
                                            // estaria apenas "anos de idade"
echo "<br>";
//persebe-se que lucas agora é um objeto
var_dump($lucas);

echo "<br>";
echo "<br>";

// percebe - se que podemos atribuir valores fora da classe pois os atributos estão publicos

?>