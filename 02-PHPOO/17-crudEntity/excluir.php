<?php
require __DIR__.'/vendor/autoload.php';



use App\Entity\Vaga;

// VALIDAÇÃO DO ID
// se o get não exitir   ou se o get não for um numero
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){ 

    header('Location: index.php?status=error');
    exit;

}

// CONSULTA VAGA
$obVaga = Vaga::getVaga($_GET['id']);


//VALIDAÇÃO DA VAGA
// se não for uma instacia de vaga
if(!$obVaga instanceof Vaga){ 

    header('Location: index.php?status=error');
    exit;

}



if (isset( $_POST['excluir'])){


    $obVaga->excluir();

    header('Location: index.php?status=success');
    //OBS: SEMPRE QUE FIZER UMA ALTERAÇÃO DE CABEÇALHO USA O "EXIT" PARA EVITAR O RESTO DA EXECUÇÃO DA PAGINA
    exit;

}
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmar-exclusao.php';
include __DIR__ . '/includes/footer.php';
