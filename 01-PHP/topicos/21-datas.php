<?php

// DATAS

// DIAS
echo date('d');
echo "<br>"; // d MINUSCULO MOSTRA O DIA EM NUMERAL
echo date('D');
echo "<br>"; // D MAIUSCULO MOSTRA O DIA POR EXTENSO

//MES
echo date('m');
echo "<br>"; // m MINUSCULO MOSTRA O MES EM NUMERAL
echo date('M');
echo "<br>"; // M MAIUSCULO MOSTRA O MES POR EXTENSO

//ANO
echo date('y');
echo "<br>"; // y MINUSCULO MOSTRA O ANO MAS APENAS 2 DIGITOS TIPO ANO 21
echo date('Y');
echo "<br>"; // Y MAIUSCULO MOSTRA O ANO MAS OS 4 DIGITOS TIPO ANO 2021

// DIA DA SEMANA
echo date('l');
echo "<br>"; // l MINUSCULO MOSTRA O DIA DA SEMANA

//HORA
echo date('h');
echo "<br>"; // h MINUSCULO MOSTRA O HORARIO NO FORMATO 12HRS
echo date('H');
echo "<br>"; // H MAIUSCULO MOSTRA O FORARIO NO FORMATO 24HRS

// DIA DA SEMANA
echo date('i');
echo "<br>"; // i MINUSCULO MOSTRA OS MINUTOS

// DIA DA SEMANA
echo date('s');
echo "<br>"; // s MINUSCULO MOSTRA OS SEGUNDOS

// AM PM
echo date('A');
echo "<br>"; // A MAIUSCULO MOSTRA AQUELE NEGOCIO DE PM AM

// AO DEPENDER DA REGIÃO O HORARIO NÃO FICA CERTO, AI TEMOS QUE SETAR O TIME ZONE PARA CONCERTAR ISSO
date_default_timezone_set('America/fortaleza');
echo date('d/m/Y h:i:s A');

// OBSERVAÇÕES DE BANCO DE DADOS SOBRE DATAS

// CASO O CAMPO DA SUA TABELA SEJA DATE VC USA A DATA NESTE FORMATO
$date = date('Y-m-d');
echo $date;
echo "<br>";
echo "<br>";
// CASO O CAMPO DA SUA TABELA SEJA DATETIME VC USA A DATA NESTE FORMATO
$datetime = date('Y-m-d H:i:s');
echo $datetime;
echo "<br>";
echo "<br>";


// TIME

// A FUNÇÃO TIME RETORNA A QUANTIDADE DE SEGUNDOS QUE SE PASSARAM DE 1970 ATÉ AGORA
$time1 = time();
echo $time1;
echo "<br>";
echo "<br>";

// AGORA IREI FORMATAR ESSA FUNÇÃO
$time = time();
echo date('d/m/Y', $time);
echo "<br>";
echo "<br>";

//MKTIME

// PROPRIEDADE 1 HORA
// PROPRIEDADE 2 MINUTOS
// PROPRIEDADE 3 SEGUNDOS
// PROPRIEDADE 4 MES
// PROPRIEDADE 5 DIA
// PROPRIEDADE 6 ANO

$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo $data_pagamento;
echo "<br>";
echo "<br>";

// AGORA IREI FORMATAR ESSA FUNÇÃO
echo date('d/m - h:i', $data_pagamento);
echo "<br>";
echo "<br>";


// STRTOTIME transforma string em data
$data = '2019-04-10 13:30:00';

$data = strtotime($data); // CONVERTENDO UMA STRING EM TEMPO

echo date('d/m/Y', $data);



// INTERVALO ENTRE DATAS
$antes = date('Y-m-d H:i', strtotime('2022-03-21 2:20'));

$data1 = new DateTime();
$data1->setTimezone(new DateTimeZone('America/Sao_Paulo'));

$data2 = new DateTime($antes);

// RETORNA O INTERVALO
$intervalo = $data1->diff($data2);

//echo $intervalo->days; se eu quiser apenas os dias

// FORMATA O INTERVALO
echo $teste = $intervalo->format("%y anos %m meses %d dias %h horas %i minutos %s segundos");


// DIFERENÇA ENTRE DATETIME E TIMESTAMP

/**
 * datetime: representa uma data como no calendário e a hora como encontrado no relógio.
 * timestamp: representa um ponto específico na linha do tempo e leva em consideração o fuso horário em questão (UTC).
 * 
 * Por exemplo: quando foi 26/02/2015 16:40? depende, para mim é nesse momento, para o Japão foi a várias horas atrás,
 * então basicamente o timestamp leva em consideração essas questões de fuso horário.
 */

// FORMATO DO TIMESTAMP É A MESMA DO DATETIME PARA O BANCO
$timestamp = date('Y-m-d H:i:s', strtotime('2022-03-22 17:07:00'));
