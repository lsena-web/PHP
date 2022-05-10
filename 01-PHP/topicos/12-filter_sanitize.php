<?php
/*
SANITIZAÇÃO OU FILTROS DE LIMPEZA

Funções (filter_input)

FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL

saiba mais:

https://www.php.net/manual/en/filter.filters.sanitize.php


ESSE FILTRO LIMPA O QUE NÃO FOR PERMITIDO EX: VAI QUE ALGUEM DIGITA UM CODIGO HTML DENTRO DE UM INPUT DO SEU SITE E CONSEGUE HACKEAR, ESSE FILTRO LIMPA ESSE CODIGO

*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>

    <!-- Em action usamos  $_SERVER['PHP_SELF'] pois queremos que os dados sejam retornados para esta página -->
    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">


        <br><label for="">NOME:</label>
        <br><input type="text" name="nome">
        <br><label for="">IDADE:</label>
        <br><input type="text" name="idade">
        <br><label for="">E-MAIL:</label>
        <br><input type="email" name="email">
        <br><label for="">URL:</label>
        <br><input type="text" name="url">

        <br>
        <br>
        <button type="submit" name="enviar-formulario">enviar</button>

    </form>
    <?php

    //O SANITIZE SERVE PARA LIMPAR OS CARACTERES QUE O CAMPO TEXTO NÃO ACEITA
    // CASO VC COLOQUE NO CAMPO DE TEXTO DO TIPO NUMBER_INT: "LUCAS 69" O SANITIZE VAI LIMPAR O "LUCAS" E DEXARÁ O "69"
    ?>

    <?php

    if (isset($_POST['enviar-formulario'])) :


        // verificando se idade é do tipo inteiro. "se sim retorna o valor, senão retorna nada"
        // parametro 1 tipo do input
        // parametro 2 nome do inpunt
        // parametro 3 é o tipo de filtro.

        // ACEITA APENAS LETRAS O RESTO É LIMPO. NÃO ACEITA CARACTERES ESPECIAIS E NEM NUMEROS
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);


        echo "<br>";
        echo $nome;
        echo "<br>";
        // ACEITA APENAS NÚMEROS O RESTO É LIMPO.
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

        echo $idade;
        echo "<br>";
        // SÓ ACEITA "LETRA", ".", "@" qualqquer outro caractere é limpo
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        echo $email;
        echo "<br>";
        // LIMPA OS CARACTERES QUE UMA URL NÃO ACEITA
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

        echo $url;
        echo "<br>";
    endif;


    ?>
</body>

</html>