<?php

/************************************************************************************************************************************************************************************* 
 *
 * lucas eu irei te da uma obs: "exemplo = array (indice => valor)" voce irá chamar a partir e agora o "indice" de "chave" ou "keys" para facilitar na abstração da função array_keys 
 *
 *************************************************************************************************************************************************************************************/
// METDO QUERY BUILD: ESSE METODO TEM COMO FUNÇÃO DEIXAR AS QUERY DINAMICAS
namespace App\DB;

use PDO;
use PDOException;

// conexão
class Database
{

    // atributos de conexão
    const HOST = 'localhost';
    const NAME = 'vagaspoo';
    const USER = 'root';
    const PASS = '';

    private $table;
    private $connection;

    public function __construct($table = null)
    {

        $this->table = $table; // no momento que eu instanciei em vaga.php eu passe o nome da tabela como parametro
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            // O METODO setAttribute                //PARAMETRO 1 constante que reporta o erro
            // PODE RECEBER 2 PARAMETROS                             //PARAMETRO 2  tipo de erro que a constante reportara
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    // metodo responsavel por executar querys dentro do banco de dados

    // esse metodo vai pegar as querys e os fields
    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query); // o "prepare" ver os binds a serem substituidos
            $statement->execute($params); // executa a substituição dos binds por valores
            return $statement;
        } catch (PDOException $e) {

            die('ERROR: ' . $e->getMessage());
        }
    }
    // esses values estão vindo de um array do metodo cadastrar da classe vaga
    public function insert($values)
    {
        // query de insert dinamico

        $fields = array_keys($values); // aqui eu tranformo os keys do array passado pelo o parametro $values em um novo array com esses indices
        //PARAMETRO 1 ARRAY
        //PARAMETRO 2 VC DETERMINA O TAMAHO DO ARRAY, NESTE CASO EU DINAMIZEI ESSE TAMANHO DE ACORDO COM A QUANTIDADE DE KEYS QUE IRÁ VIR NO POSSIVEL INSERT
        //PARAMETRO 3 ESSES TAMANHO SERÁ PREENCHIDO COM "?" OU SEJA UMA GRANDE SACADA PARA USAR "BINDVALUE"-> FUNÇÃO DO PDO
        $binds  = array_pad([], count($fields), '?'); // tem como função dinamizar o tamanho do array
        //o implode transforma um array em uma string
        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';


        // aqui eu vou passar os valores para o metodo execute
        //passo a query e depois o array _values que retorna um "novo array" com uma copia dos valores do "array selecionado"
        $this->execute($query, array_values($values));

        //A CONEXÃO FICA COM O ULTIMO ID INSERIDO
        //QUANDO VC FAZ O INSER O ID NE AUTOINCREMENT?
        // AQUI ESTOU PEGANDO O ID QUE DA INSERÇÃO
        return $this->connection->lastInsertId();
    }

    //metodo responsavel por realizar uma consulta no banco
    public function select($where = null, $order = null, $limit = null, $fields = '*')
    {

        // dados da query
        //strlen conta a quantidade de caracteres
        $where = strlen($where) ? ' WHERE ' . $where    : ' '; // SE EU TIVER CONTEÚDO NESSA VARIAVEL FAÇA "ISSO" SENÃO FAÇA "AQUILO"
        $order = strlen($order) ? ' ORDER BY ' . $order : ' '; // SE EU TIVER CONTEÚDO NESSA VARIAVEL FAÇA "ISSO" SENÃO FAÇA "AQUILO"
        $limit = strlen($limit) ? ' LIMIT ' . $limit    : ' '; // SE EU TIVER CONTEÚDO NESSA VARIAVEL FAÇA "ISSO" SENÃO FAÇA "AQUILO"

        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        return $this->execute($query);
    }

    public function update($where, $values)
    {

        //dados da query

        $fields = array_keys($values);

        //monta a sql
        $query = 'UPDATE ' . $this->table . ' SET ' . implode('=?,', $fields) . '=?' . '  WHERE ' . $where . ' ';

        $this->execute($query, array_values($values));

        return true;
    }

    // RESPONSAVEL POR DELETAR VAGAS DA TABELA
    public function delete($where)
    {

        //monta a sql
        $query = 'DELETE  FROM ' . $this->table . ' WHERE ' . $where . ' ';

        $this->execute($query);

        return true;
    }
}
