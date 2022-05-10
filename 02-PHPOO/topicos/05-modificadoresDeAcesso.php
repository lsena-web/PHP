<?php
/* 
public    -  Atributo ou Método visivel à todos
private   -  Atributo ou Método visivel somente para a propria class
protected -  Atributo ou Método visivel somente a própria classe e as classes que herdam dela podem acessar o atributo ou método.


*/
class Veiculo{

    protected $modelo;
    public $ano;
    private $cor;

public function getModelo(){
    return $this->modelo;
}

public function setModelo($m){

    $this->modelo = $m;

}

public function getCor(){
    return $this->cor;
}

public function setCor($c){

    $this->cor = $c;

}

protected function Andar(){
echo "andou";
}

public function Parar(){
echo "parou";
}

}

class Carro extends Veiculo{

    public function mostrarAcao(){

        $this->Andar();

    }

    public function parabrisa(){

        echo "parabrisa ligado";

    }

}

class Moto extends Veiculo{
    
    public function empinar(){

        echo "a doida caiu kkk";

    } 

}

$veiculo = new Veiculo();

$veiculo->ano = "2021";

$veiculo->setModelo("Modelo completo");

$veiculo->setCor("gold");

echo $veiculo->ano = "2021";
echo "<br>";
// Acessando atributo protected
echo $veiculo->getModelo();
echo "<br>";
echo $veiculo->getCor();
echo "<br>";
// coloquei protected no metodo andar agora irei acessar por intermedio de uma classe que herda esse metodo

$carro = new Carro();

echo $carro->mostrarAcao();







?>