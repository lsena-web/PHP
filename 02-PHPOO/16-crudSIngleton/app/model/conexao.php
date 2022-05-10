<?php

//OBS: NESTE CRUD ESTAMOS ULTILIZANDO O PADRÃO "DAO" "DATA ACCESS OBJECT", SERVE PARA SEPARAR A LÓGICA DO ACESSO AOS DADOS 

// vamos usar o padrão singleton para que nossa aplicação tenha apenas uma instancia da coneão deixando ela mais rapida

namespace app\model;

class Conexao{

    private static $instance;
    
    public static function getCon(){
        // se a instancia não existir ela será criada
        if(!isset(self::$instance)): 
            // o self é pq é uma instancia, ULTIMO PARAMETRO É "SENHA" CASO VOCE NÃO ENTENDA
            self::$instance = new \PDO('mysql:host=localhost;dbname=poocrud;charset=utf8','root','');
            // o pdo é nativa do php então temos que usar a barra \ antes de instanciar o mesmo
        endif;

            //mas se ja tiver uma instancia, ele irá retornar a mesma
            return self::$instance;
    } 
}

?>