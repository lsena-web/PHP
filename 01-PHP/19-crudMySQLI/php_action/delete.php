<?php

session_start();
require_once "db_connect.php";

if(isset($_POST['btn-deletar'])):
    //essa função faz um filtro (mysqli_escape_string) filtro de caracteres especiais

    $id = mysqli_escape_String($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

if(mysqli_query($connect,$sql)):
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../index.php');

else:
    $_SESSION['mensagem'] = "Erro ao Deletar!";
    header('Location: ../index.php');

endif;
endif;

?>