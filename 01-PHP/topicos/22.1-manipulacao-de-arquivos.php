<?php

// IREMOS APRENDER SOBRE MANIPULAÇÃO DE ARQUIVOS DE TEXTO

// EU CRIEI UM ARQUIVO DE TEXTO CHAMADO 'aquirvo.txt' SÓ VC OLHAR NA BARRA LATERAL DO VS CODE QUE IRÁ ENCONTRA - LO
$arquivo = 'arquivo.txt';

$conteudo = "conteudo de teste\r\n";// O \r\n SERVER QUE PULE UMA LINHA


$arquivoAberto = fopen($arquivo,'r'); // PARAMETRO 'R' ABRE SOMENTE PARA LEITURA
//FUNÇÃO USADA PARA INSERIR CONTEÚDO NO ARQUIVO
//NESSE CASO IREI ADICIONA O $conteudo dentro do $arquivo usando a função fwrite
// PARAMETRO 1 QUEM VAI RECEBER
// PARAMETRO 2 CONTEUDO A SER RECEBIDO
fwrite($arquivoAberto,$conteudo);

$tamanhoArquivo = filesize($arquivo);
// ENQUANTO NÃO FOR O FINAL DO ARQUIVO
while(!feof($arquivoAberto)):
    // FUNÇÃO USADA PARA PEGAR O CONTEÚDO DO ARQUIVO
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
endwhile;

// FUNÇÃO USADA PARA FECHAR O ARQUIVO
fclose($arquivoAberto);

// OBS: QUANDO VC EXECULTAR ESSA ABA VERA QUE FOI ADICIONADO CONTEÚDO NO 'aquirvo.txt'


?>