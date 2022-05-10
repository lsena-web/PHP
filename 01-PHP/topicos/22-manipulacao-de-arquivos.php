<?php

// IREMOS APRENDER SOBRE MANIPULAÇÃO DE ARQUIVOS DE TEXTO

// ESSE TÓPICO ENSINA COMO ADICIONAR CONTÚDO NO ARQUIVO

// EU CRIEI UM ARQUIVO DE TEXTO CHAMADO 'aquirvo.txt' SÓ VC OLHAR NA BARRA LATERAL DO VS CODE QUE IRÁ ENCONTRA - LO
$arquivo = 'arquivo.txt';

$conteudo = "conteudo de teste\r\n";// O \r\n SERVER QUE PULE UMA LINHA

// PARAMETRO 1 É O ARQUIVO
// PARAMETRO 2 É O MODO EM QUE ELE SERÁ ABERTO EX: PODE SER ABERTO APNAS PARA O MODO LEITURA OU ABERTO PARA EDIÇÃO E ASSIM POR DIANTE
$arquivoAberto = fopen($arquivo,'a'); // PARAMETRO 'a' ABRE SOMENTE PARA ESCRITA


//FUNÇÃO USADA PARA INSERIR CONTEÚDO NO ARQUIVO
//NESSE CASO IREI ADICIONA O $conteudo dentro do $arquivo usando a função fwrite
// PARAMETRO 1 QUEM VAI RECEBER
// PARAMETRO 2 CONTEUDO A SER RECEBIDO
fwrite($arquivoAberto,$conteudo);


// FUNÇÃO USADA PARA FECHAR O ARQUIVO
fclose($arquivoAberto);

// OBS: QUANDO VC EXECULTAR ESSA ABA VERA QUE FOI ADICIONADO CONTEÚDO NO 'aquirvo.txt'


?>