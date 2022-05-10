<?php

/*

UMA EXCEÇÃO É uma OCORRENCIA ANORMAL QUE AFETA O FUNCIONAMENTO DA APLICAÇÃO

EXCEPTION É A CLASSE BASE PARA TODAS EXCEPTIONS

MESSAGE, CODE, FILE, LINE

*/

class Newsletter{

    public function cadastrarEmail($email){

        // se o email não for valido
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)): 

            // PARAMETRO 1 a menssagem da exceção
            // PARAMETRO 2 é um código, tipo cada exceção vc dar um codigo diferente, nesta eu dei 1, na outra eu posso dar 2, e assim por diante
            throw new Exception("Este email é inválido", 1);// AQUI EU LANÇO UMA EXCEÇÃO, ou seja, "caso passe pela a condição a exceção dispara"
        else:
            echo "E-mail cadastrado com sucesso!";
        
        endif;

    }

}


$news = new Newsletter();

// tratando a exceção
// depois que uma exceção é disparada você vai ter que tratala, neste caso estou usando o famoso "try catch"

// o try tenta executar esse metodo
try{
    $news->cadastrarEmail("lucas@");

    // caso não consiga executar cai no catch
    //uso a classe exception e vou capturar todas a exeções do metodo que tentamos executar
    // o  "$e" agora é um objeto que contem informações desta exeção que capturamos 
}catch(Exception $e){

    // aqui estou dando um "echo $e" para vermos quais informações são estas
    echo "Menssagem : ".$e->getMessage()."<br>";
    echo "Codigo    : ".$e->getCode()."<br>";
    echo "Linha     : ".$e->getLine()."<br>";
    echo "Arquivo   : ".$e->getFile()."<br>";


}

// resumindo... try tenta executar se não conseguir o catch captura a exceção e dispara o tratamento
// esse tratamento é mostrando o erro, minha abstração no momento é essa
//luca leia e releia que você pode ter outro tipo de abstração eu acho
// link do video: https://www.youtube.com/watch?v=Ikc4QeyixIg&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=15