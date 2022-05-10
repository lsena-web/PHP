<?php


namespace App\Entity;

use App\DB\Database;

use PDO;

class Vaga
{

    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;

    public function cadastrar()
    {
        //definir a data
        $this->data = date('Y-m-d h:i:s');

        //inserir a vaga no banco
        $obDatabase = new Database('vagas');
        // aqui eu estou passando  os valores para o parametro $values do metodo insert da class Database
        $this->id = $obDatabase->insert([
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'ativo'     => $this->ativo,
            'data'      => $this->data
        ]);

        // SO PRA DIZER QUE DEU CERTO
        return true;
    }


    //metodo responsavel por atualizar a vaga no banco
    public function atualizar()
    {

        return (new Database('vagas'))->update('id=' . $this->id, [
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'ativo'     => $this->ativo,
            'data'      => $this->data
        ]);
    }

    // METODO RESPONSAVEL POR EXCLUIR A VAGA DO BANCO
    public function excluir()
    {
        return (new Database('vagas'))->delete('id= ' . $this->id);
    }





    // METODO RESPONSAVEL POR BUSCAR TODAS AS VAGAS
    public static function getVagas($where = null, $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where, $order, $limit) //volta so o codido sql, mas eu quero o que foi encontrado na pesquisa por isso eu uso o "fetchAll"
            //fetchAll faz com que todo retorno se tranforme em um array
            // PARAMETRO 1 DEFINE O TIPO DE ARRAY QUE SERÁ RETORNADO, nesse caso é "array de classes(objetos)"
            // PARAMETRO 2 QUAL O TIPO DE OBJETO, nesse caso eu quero uma instancia da propria classe
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }


    /**
     * Método responsável por obter a quantidade de vagas do banco de dados
     * @param string $where
     * @return integer 
     */
    public static function getQuantidadeVagas($where = null)
    {
        return (new Database('vagas'))->select($where, null, null, 'COUNT(*) as qtd')->fetchObject()->qtd;
    }

    // METODO RESPONSAVEL POR BUSCAR UMA VAGA COM BASE EM SEU ID
    // estou buscando ainformação para o meu update heeheh
    public static function getVaga($id)
    {
        return (new Database('vagas'))->select('id=' . $id) // mesma coisa do metodo supracitado, retorna o codigo sql em vez dos valores que foram encontrados com o mesmo
            ->fetchObject(self::class); // O fetchObject pega apenas uma posição do array e eu passo como parametro a class

        /* o metodo select se encontra na class database, nesse caso estou puxando seu statemente, ou seja, literalmente o codigo sql
                                      select * from tarara...
                                     
                                      para puxar as informaçoes com esse codigo literal, eu passo fetchObject e como parametro passo a class Database
                                      e assim eu consigo pegar todas as informações tanto o nome  das keys quanto os seus valores


                                      o metodo getvagas é na mesma logica só muda que é fetchAll
                                      */
    }
}
