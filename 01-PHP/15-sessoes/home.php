<?php

 session_start();

//aqui ele pega as informações do indexsessoes.php
//caso reset a pagina as informações se perderão pois as informações são volateis
echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();




?>