<?php

session_start();
require_once "db_connect.php";

function clear($input){

    global $connect;
//  ESSA FUNÇÃO EVITA QUE O USUARIO COLOQUE CARACTERES ESPECIAIS
//SQL    
$var = mysqli_escape_string($connect, $input);

// ESSA FUNÇÃO EVITA QUE O USUARIO COLOQUE SCRIPTS DENTRO DO SEU INPUT 
//EX: <script>location.href="http://GOOGLE.COM"</script> ESSE EXEMPLO NOS REDIRECIONA TODA VEZ QUE FORMOS CADASTRAR 
//XSS
$var = htmlspecialchars($var);

return $var;

}

if(isset($_POST['btn-cadastrar'])):
    //essa função faz um filtro (mysqli_escape_string) filtro de caracteres especiais
    $nome          = clear($_POST['nome']);
    $sobrenome     = clear($_POST['sobrenome']);
    $email         = clear($_POST['email']);
    $idade         = clear( $_POST['idade']);

    $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email',  '$idade')";

if(mysqli_query($connect,$sql)):
    $_SESSION['mensagem'] = "cadastrado com sucesso!";
    header('Location: ../index.php');

else:
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../index.php');

endif;
endif;

?>