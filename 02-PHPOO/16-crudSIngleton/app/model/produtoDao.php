<?php

// AQUI É onde eu vou pegar o que foi setado e buscado no "produto.php" e usar essas informações para meu crud

namespace app\model;

use PDO;

class ProdutoDao
{

    public function create(Produto $p)
    {
        //BINDVALUES parametro 1 "bindValue 1", parametro 2 "bindValue 2" e assim por diante
        $sql  = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';
        // chamando a classe "Conexao" e usando "getCon" que é um metodo estatico
        $stmt = Conexao::getCon()->prepare($sql);
        // $p é uma instancia da classe produto então vou chamar o metodo getNome e atribuir ao meu primeiro bindvalue
        $stmt->bindValue(1, $p->getNome());
        // $p é uma instancia da classe produto então vou chamar o metodo getDecricaoe atribuir ao meu segundo bindvalue e assim por diante
        $stmt->bindValue(2, $p->getDescricao());

        $stmt->execute();


        // os metodos bindValue, prepare, execute são todos metodos do proprio PDO
    }
    public function read()
    {
        $sql = 'SELECT * FROM produtos';
        $stmt = Conexao::getCon()->prepare($sql);
        $stmt->execute();

        // "rowCount()" é um função que conta a quantidade de registros
        if ($stmt->rowCount() > 0) :
            //fetchAll é uma função que retorna o array com todos os registros

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;
        else :
            return [];
        endif;
    }

    public function update(Produto $p)
    {

        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

        $stmt = Conexao::getCon()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM produtos  WHERE id = ?";

        $stmt = Conexao::getCon()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
