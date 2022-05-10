<?php


/**
 * Aqui estamos usando o princípio ** D ** também conhecido como: dip
 * 
 * Detalhes:
 * - Devemos depender de abstrações e não de implementações.
 * - Módulos de alto nível não devem depender de Módulos de baixo nível, ambos devem depender da abstração.
 * - Abstrações não devem depender de detalhes, detalhes devem depender de abstrações.
 */


/**
 * Para recuperar a senha a class PasswordReminder precisa conectar na base de dados,
 * e pra isso ela cria uma instância da class MySQLConnection em seu construtor. 
 */

/**
 * Esse código tem um alto nível de acoplamento e nós não queremos isso, repare que
 * a class PasswordReminder tem a responsabilidade de criar uma instancia da class MySQLConnection. 
 */

/**
 * Se tivessemos que reaproveitar essa classe em outro sistema,
 * teriamos que obrigatoriamente levar a class MySQLConnection junto, ou seja, forte acoplamento
 */

use MySQLConnection;

/**
 * -------------
 * JEITO ERRADO |
 * -------------
 */

class PasswordReminder
{

    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new MySQLConnection();
    }
    // Faz alguma coisa
}


/**
 * -------------
 * JEITO ERRADO |
 * -------------
 */

/**
 * - Com o código refatorado, a criação do objeto MySQLConnection deixa de ser uma responsabilidade da class PasswordReminder2.
 * - A class de conexão com o banco de dados virou uma dependência que deverá ser injetada via método construtor, ou seja,
 * usamos a tal da injeção de dependência.
 * 
 * Aqui o principio da inversão de dependência foi violado:
 * - pois PasswordReminder2 => (módulo de alto nível) depende da class MySQLConnection => (módulo de baixo nível)
 * que por sua vez é uma implementação e não uma abstração.
 */
class PasswordReminder2
{

    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = new $dbConnection();
    }
    // Faz alguma coisa
}

/**
 * -------------
 * JEITO CERTO |
 * -------------
 */

/**
 * Aqui a class PasswordReminderExemplo não tem  minima noção de qual banco de dados irá utilizar
 * não estamos mais violando o dip, pois as classes estão desacopladas e dependendo de uma abstração,
 * além disso estamos favorecendo a reusabilidade do código.
 */

interface DBConnectionInterface
{

    public function connect();
}

class MySQLConnectionExemplo implements DBConnectionInterface
{
    public function connect()
    {
        /*... */
    }
}

class OracleConnection implements DBConnectionInterface
{
    public function connect()
    {
        /*... */
    }
}

class SQLServer implements DBConnectionInterface
{
    public function connect()
    {
        /*... */
    }
}

class PasswordReminderExemplo
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = new $dbConnection();
    }
    // Faz alguma coisa
}
