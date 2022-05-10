<?php


/**
 * Aqui estamos usando o princípio ** L ** também conhecido como: lsp
 * 
 * Detalhes:
 * - Uma classe derivada deve ser substituivel por sua Classe base.
 * - Precisará usar injeção de dependência
 * - Lembrar de não violar o lsp que pode ser, sobreescrevendo ou implementando um método que não faz nada
 * - ou lançando uma exceção inesperada ou até retornando valores diferentes da classe base.
 * 
 */

class A
{

    public function getNome()
    {

        echo 'Meu nome é A';
    }
}

class B extends A
{

    public function getNome()
    {

        echo 'Meu nome é B';
    }
}

$objeto1 = new A;
$objeto2 = new B;

function imprimeNome(A $objeto)
{

    return $objeto->getNome();
}

imprimeNome($objeto1); // Meu nome é A
imprimeNome($objeto2); // Meu nome é B
