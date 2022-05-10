<?php
 
//ENCERRANDOO A SESSÃO

//iniciar sessão
session_start();

//limpar sessão
session_unset();

//destroir sessão
session_destroy();

//redirecionar para outra pagina
header('location: index.php');
