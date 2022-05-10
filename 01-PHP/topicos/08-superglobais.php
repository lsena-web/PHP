<?php

// SUPERGLOBAIS

/*
$GLOBALS
$_SERVER
$_REQUEST
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/




$x = 10;
$y = 15;

function soma(){
// É ASSIM QUE PEGA UMA VARIAVEL GLOBAL DENTRO DA FUNÇÃO    
echo $GLOBALS ['x'] + $GLOBALS['y'];

}

soma();

echo"<hr>";

// CONTEM INFORMAÇÃO SOBRE CABEÇALHOS, CAMINHOS E LOCAIS DE SCRIPT
//nada mais é do que um array que possui varios indices 
//obs: nã é obrigado decorar: para conhece-los so pesquisar $_SERVER php

// RETORNA O NOME DO ARQUIVO DO SCRIPT QUE TA SENDO EXECUTADO
echo $_SERVER ['PHP_SELF'];
echo "<br>";
echo "<br>";

//RETORNA O NOME DO HOST DO SERVIDOR
echo $_SERVER ['SERVER_NAME'];
echo "<br>";
echo "<br>";

// RETORNA O CAMINHO ABSOLUTO DO SCRIPT EM EXECUÇÃO
echo $_SERVER ['SCRIPT_FILENAME'];
echo "<br>";
echo "<br>";

//RETORNA O DIRETÓRIO RAIZ DO SCRIPT EM EXECUÇÃO
echo $_SERVER ['DOCUMENT_ROOT'];
echo "<br>";
echo "<br>";

// RETORNA A PORTA DO SERVIDOR WEB
echo $_SERVER ['SERVER_PORT'];
echo "<br>";
echo "<br>";

// RETORNA O ENDEREÇO IP DE ONDE O USUÁRIO ESTÁ VISUALIZANDO A PÁGINA
echo $_SERVER ['REMOTE_ADDR'];
echo "<br>";
echo "<br>";








