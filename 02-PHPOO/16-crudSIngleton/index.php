<?php

// VAMOS ULTILIAZAR O PADRÃO "PSR4", MAS PORQUE PADRÃO?

// esse site https://www.php-fig.org/ tem como objetivo padronizar o desenvolvimento php

// nesse site temos algumas "PSRS" E NELA TEM A "PSR4" QUE EXPLICA O PADRÃO DO "AUTO LOAD"

//VAMOS GERAR O AUTO LOAD USANDO "COMPOSER"
require_once 'vendor/autoload.php';

$Produto = new \app\model\Produto();

$Produto->setId(10);
$Produto->setNome('video gamer01');
$Produto->setdescricao('potencia 2wtsadad01');

$produtoDao = new \app\model\ProdutoDao();

//$produtoDao->delete(2);
$produtoDao-> create($Produto); // faz insert
//$produtoDao->update($Produto); // faz update
$produtoDao->read($Produto); // faz select

foreach ($produtoDao->read() as $produto) :
    echo $produto['nome'] . "<br>" . $produto['descricao'] . "<hr>";
endforeach;
