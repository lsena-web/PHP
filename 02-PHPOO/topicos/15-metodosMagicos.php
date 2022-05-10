<?php

/*

METODOS MAGICOS  são funções especiais do php,lembrando que tem get e set normal e ele magico como vamos ver a baixo

- CLONE
- CONSTRUCT
- INVOKE
- TOSTRING
- GET
- SET

*/


class SerHumano
{

    // atributo em forma de array para receber variaveis 
    private $dados = array();

    //PARAMETRO 1 nome do atributo
    //PARAMETRO 2 valor 
    //a função set vai pegar as variaveis de ambiente externo e passa-las como parametro

    public function __set($nome, $valor)
    {
        //apos isso o atributo de escopo local irá receber essas variaveis
        $this->dados[$nome] = $valor;
    }
    public function __get($nome)
    {
        //aqui vai retornar o valor dos atributos
        return $this->dados[$nome];
    }

    public function __toString()
    {

        return "tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "objeto como função";
    }
}

$serhumano = new SerHumano();
//percebe que aqui criei atributos em ambiente externo?
// após isso setei para função set
// e retornei com a função get
$serhumano->nome = "Lucas";
$serhumano->idade = "21";
$serhumano->altura = "1.78";
echo $serhumano->nome . "<br>";
echo $serhumano->idade . "<br>";
echo $serhumano->altura . "<br>";

// quando eu tento imprimir o objeto pessoa a function "tostring" é ativada
echo $serhumano . "<br>";

// quando eu tento imprimir o objeto pessoa como função a function "invoke" é ativada
echo $serhumano();
