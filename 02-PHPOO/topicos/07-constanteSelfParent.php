<?php

// SELF É USADO PARA STATICOS E CONSTANTES

class Pessoa {

// isso é uma constante    
const nome = "Lucas";

    
    public function exibirNome(){
          //usei esse metodo para referenciar a constante "self"
        echo self::nome;
    }

}

class Lucas extends Pessoa{


    const nome = "Sena";
    public function exibirNome(){
         //usei esse metodo para referenciar a constante  de quem eu herdei
        echo parent::nome;
    }

}






$pessoa = new Pessoa();

//  "self" faz com que eu me referencie a constante do escopo local
$pessoa->exibirNome(); // caso eu tivesse colocado echo $this->nome tinha dado erro pois só o self reproduz uma constante "eu acho" lucas me diga vc sobre sua abstração futura

$lucas = new Lucas();

// a função parente faz com que eu possa usar a constante da classe generalizada(HERDADA), ou seja, me referenciar a ela
$lucas-> exibirNome(); 




?>