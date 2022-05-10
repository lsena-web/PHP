<?php

//ASSOCIAÇÃO
//acontece quando um objeto "ultiliza" outro, porém, sem que eles dependam um do outro

class Pedido
{

    public $numero;
    public $cliente;
}

class Cliente
{

    public $nome;
    public $endereco;
}

$cliente = new Cliente();

$cliente->nome = "lucas";
$cliente->endereco = "Rua, xxx, Número: 1143";

$pedido = new Pedido();

$pedido->numero = "123";

// aqui foi feito uma associação
$pedido->cliente = $cliente;

$dados = array(

    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco


);

var_dump($dados);
