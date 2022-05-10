<?php

/*

AGREGAÇÃO:
Na Agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe ultiliza a outra como parte de si própria

*/

class Produtos{

    public $nome;
    public $valor;

    public function __construct($nome,$valor){
        
        $this->nome = $nome;
        $this->valor = $valor;
    }

}
// -----------------------------------------------------------------------------------------------------------------

class Carrinho{
    public $produtos;

                                            // MOMENTO DA AGREGAÇÃO                   
    public function adicionaProdutoCarrinho(Produtos $produto){           // o parametro do metodo adicionaProdutoCarrinho deve ser uma instancia da classe produtos
    
        // o "produtos" do escopo local esta recebendo os atributos da class "Produtos"
        $this->produtos[] = $produto;
    }
    
    public function exibe(){
        foreach ($this->produtos as $produto){
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos("notebook","RS6.000" );
$produto2 = new Produtos("fones","RS300" );
$produto3 = new Produtos("caixa de som","RS500" );
$produto4 = new Produtos("mesa de pc","RS1.500" );
$produto5 = new Produtos("mouse","RS90" );

$carrinho = new Carrinho();
$carrinho->adicionaProdutoCarrinho($produto1);
$carrinho->adicionaProdutoCarrinho($produto2);
$carrinho->adicionaProdutoCarrinho($produto3);
$carrinho->adicionaProdutoCarrinho($produto4);
$carrinho->adicionaProdutoCarrinho($produto5);

$carrinho->exibe();