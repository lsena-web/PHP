<?php

//conexão com o db_connect.php
require_once "db_connect.php";
 
//sesão
session_start();

//  botão enviar
if (isset($_POST['btn-entrar'])) :

    //se tiver algum erro, iremos atribuir ao array e depois exibi-lo
    $erros  = array();

    //pegando as informações que o usuário digitou
    $login  =  mysqli_escape_string($connect, $_POST['login']);
    $senha  = mysqli_escape_string($connect, $_POST['senha']);

    // verificar se os campos de login e senha estão vazios
    if (empty($login) or empty($senha)) :

        //atribuindo o erro ao array
        $erros[] = "<li> o campo login/senha precisa ser preenchido </li>";

    else :
        //comando sql: selecione login da tabela usuarios onde login = "$login" do metodo post
        //isso é para saber se existe um usuário com esse login
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        //SELECT login FROM usuarios WHERE login = 105 or 1=1
        //1;drop table teste

        //irá armazenar o resultado da consulta $sql
        // PARAMETRO 1 É A NOSSA CONEXÃO "$connect"
        // PARAMETRO 2 É O NOSSO COMANDO SQL "$sql"
        $resultado  =   mysqli_query($connect, $sql);

        //PRECISAMOS VERIFICAR SE O LOGIN QUE O USUÁRIO DIGITOU EXISTE LÁ NO BANCO DE DADOS
        // se o número de linhas que existe na variavel resultado é maior que zero.
        // se for, é porque tem algum registro do usuário lá
        if (mysqli_num_rows($resultado) > 0) :

            // a senha no bd foi criptografada como md5
            // então antes de adicionarmos a senha ela terá que ser criptografada aqui no codigo tambem
          //  $senha = md5($senha);

            $sql =  "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

            $resultado  =   mysqli_query($connect, $sql);

            // se existir uma correspondencia de login e senha juntos
            if (mysqli_num_rows($resultado) == 1) :

                //VAI CONVERTER A VARIAVEL "$resultado" em um array e atribuir na variavel "$dados"
                $dados = mysqli_fetch_array($resultado);

                //fechar a conexão
                mysqli_close($connect);

                //CRIANDO SESSÃO
                //
                $_SESSION['logado']    =   true;

                // vai pegar o id do usuário
                $_SESSION['id_usuario']    =   $dados['id'];

                //redirecionar usuário para a página restrita
                header('Location:home.php');

            else :
                //atribuir mensagem de erro ao array
                $erros[]    =   "<li> USUÁRIO E SENHA NÃO CONFEREM </li>";


            endif;

        else :
            //atribuir mensagem de erro ao array
            $erros[]    =   "<li> usuário inexistente </li>";

        endif;

    endif;


endif;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Login</title>
    <?php

    //se não estiver vazio é porque contem algum erro
    if (!empty($erros)) :
        foreach ($erros as $erro) :

            echo $erro;

        endforeach;
    endif;

    ?>

</head>

<body>

    <form action="" method="POST">

        login: <input type="text" name="login"><br>
        senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar"> ENTRAR</button>

    </form>

</body>

</html>