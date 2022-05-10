<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE','Cadastrar vaga');
define('C','n');


use App\Entity\Vaga;

$obVaga = new Vaga;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) :
   
  
    $obVaga->titulo    = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo     = $_POST['ativo'];
    $obVaga->cadastrar();
    
    header('Location: index.php?status=success');
    //OBS: SEMPRE QUE FIZER UMA ALTERAÇÃO DE CABEÇALHO USA O "EXIT" PARA EVITAR O RESTO DA EXECUÇÃO DA PAGINA
    exit;

endif;
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
