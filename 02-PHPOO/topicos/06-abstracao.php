<?php

// classes e metodos abstratos

// quando declaramos que uma classe é abstrata, ela não pode ser instanciada
// uma classe abstrata serve como modelo para as outras, é tipo uma classe generalizada(mãe)
// se os metodos são abstratos os mesmos são tido como modelo, logo então as outras classes que estão herdando terão obrigatoriamente os mesmos metodos
// so será obrigatorio para as outras classes, os metodos que serão declarados como abstratos, isso é o que difere de "interface" que está explicando na aula 10 caso não entenda, ignore
// pois vc entenderá quando ver a aula 10
abstract class Banco{

    protected $saldo;
    protected $limiteSaque;
    protected $juros;


    public function setSaldo($s){
        $this->saldo = $s;

    }
    public function getSaldo(){
        return $this->saldo;

    }
    abstract protected function Sacar($s);

    abstract protected function Depositar($d);

}



//------------------------------------------------------------



class BancoBrasil extends Banco{
//Tive que declara esses dois metoso aqui, se não dava erro, pois a classe abstrata possui metodos abstratos, ou seja, obrigatoriamente tenho que declaralos aqui
public function Sacar($s){

    $this->saldo -= $s;
    echo "<hr> sacou: ".$s;
}

public function Depositar($d){

    $this->saldo += $d;
    echo "<hr> Depositou: ".$d;
}

}
//------------------------------------------------------------------



$brasil = new BancoBrasil();

$brasil->setSaldo(1000); // coloquei o saldo inicial como 1000

echo "<hr> Saldo:".$brasil->getSaldo(); // mostrei o saldo atual

$brasil->Sacar(250); // saquei

echo "<hr> Saldo:".$brasil->getSaldo(); // mostrei o saldo atual depois do saque

$brasil->Depositar(1000); // depositei

// percebe que eu instanciei Bancobrasil e estou pegando um metodo que eu não declarei nesta classe instanciada?
// sabe porque?, porque eu estou herdando 
echo "<hr> Saldo:".$brasil->getSaldo(); // mostrei o saldo atual depois do deposito

?>