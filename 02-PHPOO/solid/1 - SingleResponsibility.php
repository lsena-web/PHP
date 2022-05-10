<?php

/**
 * Aqui estamos usando o princípio ** S ** também conhecido como: srp
 * 
 * Detalhes:
 * - Essa classse deve ser especializada em um unico assunto e possuir apenas uma responsabilidade dentro do software.
 * - A classe deve ter apenas uma tarefa ou ação pra executar.
 */


/**
 *  EX: (DO JEITO ERRADO) pois realiza três tipos distintos de tarefa.
 *  Além de lidar com ar informações do pedido, ela também é responsável pela exibição e manipulação dos dados.
 * PROBLEMAS: 
 * - Falta de coesão, pois uma classe assume responsabilidades que não são as suas
 * - Alto acoplamento, pois mais responsabilidade gera um mais nivel de dependência deixando o sistema ingessado e frágil para alterações
 * - Dificuldade de implementar testes automatizados, tornado difícil de encaixar esse tipo de classe
 * - Baixo reaproveitamneto de código
 */
class ExOrder
{

    public function calculateTotalSum()
    {/*...*/
    }
    public function getItems()
    {/*...*/
    }
    public function getItemsCount()
    {/*...*/
    }
    public function addItem()
    {/*...*/
    }
    public function deleteItem()
    {/*...*/
    }

    public function printOrder()
    {/*...*/
    }
    public function showOrder()
    {/*...*/
    }

    public function load()
    {/*...*/
    }
    public function save()
    {/*...*/
    }
    public function update()
    {/*...*/
    }
    public function delete()
    {/*...*/
    }
}


/* APLICANDO O -- S -- */


/**
 * Classe responsável gerir os itens do pedido e gerar o total
 */
class Order
{

    public function calculateTotalSum()
    {
        /*...*/
    }
    public function getItems()
    {
        /*...*/
    }
    public function getItemsCount()
    {
        /*...*/
    }
    public function addItem()
    {
        /*...*/
    }
    public function deleteItem()
    {
        /*...*/
    }
}

/**
 * Classe responsável controla o pedido em sí com o famoso CRUDE
 */
class OrderRepository
{

    public function load()
    {
        /*...*/
    }
    public function save()
    {
        /*...*/
    }
    public function update()
    {
        /*...*/
    }
    public function delete()
    {
        /*...*/
    }
}

/**
 * Classe responsável mostrar e imprimir o pedido
 */
class OrderView
{

    public function printOrder()
    {
        /*...*/
    }
    public function showOrder()
    {
        /*...*/
    }
}
