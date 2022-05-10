<?php
// CONEXÃO COM O BANCO DE DADOS

$servername = "localhost";
$username  = "root";
$password  = "";
$db_name   = "crudphpbasico";

$connect = mysqli_connect($servername, $username, $password, $db_name);
// informa o o tipo utf8 para os caracteeres não ficarem bugados
mysqli_set_charset($connect,"utf8");
if(mysqli_connect_error()):
    echo "Error na conexão: ".mysqli_connect_error();
endif;

?>