<?php

 

//conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";


$connect  = mysqli_connect($servername, $username, $password, $db_name);

//verificar se tem falha na conexão
//pode usar o try catch no lugar do if
if (mysqli_connect_error()) :

    echo "falha na conexão: " . mysqli_connect_error();

endif;
