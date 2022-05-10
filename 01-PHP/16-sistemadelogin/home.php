<?php
//conexão
require_once 'db_connect.php';
 
//sessão
session_start();

// verificar se não existe a sessão logado "!"
// caso alguem queira ir diretoto para a página restrita sem usar login e senha ele redireciona para o index.php
if (!isset($_SESSION['logado'])) :

    header('Location: index.php');

endif;

//VAMOS PEGAR OS DADOS DO USUÁRIO
$id = $_SESSION['id_usuario'];

// CODIGO SQL
$sql =  "SELECT * FROM usuarios WHERE id = '$id'";


$resultado  =   mysqli_query($connect, $sql);

//VAI CONVERTER A VARIAVEL "$resultado" em um array e atribuir na variavel "$dados"
$dados  =   mysqli_fetch_array($resultado);

//fechar a conexão
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>PAGINA RESTRITA</title>
</head>

<body>
    <h1>olá <?php echo $dados['nome']; ?></h1>
    <a href="logout.php">sair</a>
</body>

</html>