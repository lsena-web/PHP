<?php


/* HERANÇA é um recurso que permite que CLASSES  COMPARTILHEM ATRIBUTOS e METODOS, afim de reaproveitar codigos ou comportamentos generalizados */

// classe generica
class Veiculo
{

    public $modelo;
    public $ano;
    public $cor;

    public function Andar()
    {
        echo "andou";
    }

    public function Parar()
    {
        echo "parou";
    }
}

class carro extends Veiculo
{

    public function parabrisa()
    {

        echo "parabrisa ligado";
    }
}

class Moto extends Veiculo
{

    public function empinar()
    {

        echo "a doida caiu kkk";
    }
}

$carro = new carro();

$carro->modelo = "gol";
$carro->cor = "azul";
$carro->ano = "2021";

$carro->parabrisa();
echo "<br>";

$carro->Andar();
echo "<br>";

var_dump($carro);
echo "<br>";
echo "<br>";

$moto = new Moto();

$moto->modelo = "pop100";
$moto->cor = "azul";
$moto->ano = "2020-2021";

$moto->empinar();
echo "<br>";

$moto->Parar();
echo "<br>";

var_dump($moto);
echo "<br>";
