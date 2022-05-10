<?php


/**
 * Aqui estamos usando o princípio ** O ** também conhecido como: ocp
 * 
 * Detalhes:
 * - Objetos ou entidades devem estar aberto para extensão e fechado para modificação.
 * - Quando um novo comportamento ou recursos precisam ser adicionado no software devemos extender e não alterar
 */


/**
 * ------------------------------------------
 *  SISTEMA HIPOTETICO DE RH (JEITO ERRADO) |
 * ------------------------------------------
 *  - Caso a Empresa queira colocar o modelo de contrtação Pj,
 *  - a classe FolhoDePagamento irá ser modificada colocando mais um elseif
 *  - assim quebrando o princípio "ocp"
 */

/**
 * classe Tipo de contrato de trabalho
 */
class ExContratoClt
{

    public function salario()
    {
        /*... */
    }
}

/**
 * classe Tipo de contrato de trabalho
 */
class ExEstagio
{

    public function bolsaAuxilio()
    {
        /*... */
    }
}

/**
 * Classe responsável por processar a folha de pagamento
 */
class ExFolhaDePagamento
{

    protected $saldo;

    public function calcular($contrato)
    {

        if ($contrato instanceof ExContratoClt) {

            $this->saldo = $contrato->salario();
        } elseif ($contrato instanceof ExEstagio) {

            $this->saldo = $contrato->bolsaAuxilio();
        }
    }
}


/**
 * -----------------------------------------
 * SISTEMA HIPOTETICO DE RH (JEITO CERTO)  |
 * -----------------------------------------
 * 
 */

interface Remuneravel
{

    public function remuneracao();
}

class ContratoClt implements Remuneravel
{

    public function remuneracao()
    {
        /*....... */
    }
}

class ContratoPj implements Remuneravel
{

    public function remuneracao()
    {
        /*....... */
    }
}

class Estagio implements Remuneravel
{

    public function remuneracao()
    {
        /*....... */
    }
}


class FolhaDePagamento
{

    protected $saldo;

    public function calcular(Remuneravel $contrato)
    {

        $this->saldo = $contrato->remuneracao();
    }
}
