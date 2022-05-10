<!-- NESTE TÓPICO VAMOS APRENDER COMO SE USA "filter_var" -->

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

    // NESTE TÓPICO VAMOS APRENDER COMO SE USA "filter_var"
    // IREMOS TAMBÉM USAR O VALIDATE EO SANITIZE JUNTOS

    ?>

    <?php

    if (isset($_POST['enviar-formulario'])) :

$erros = array();

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

        if(!filter_var($idade, FILTER_VALIDATE_INT)):
        
$erros[] = "Idade precisa ser um intereiro";
        
        endif;

        echo $idade;
        echo "<br>";
        // SÓ ACEITA "LETRA", ".", "@" qualqquer outro caractere é limpo
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        
        // TESTA SE A VARIAVEL $email foi validada
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        
            $erros[] = "E-mail invalido";
                    
                    endif;

        echo $email;
        echo "<br>";
        // LIMPA OS CARACTERES QUE UMA URL NÃO ACEITA
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

        if(!filter_var($url, FILTER_VALIDATE_URL)):
        
            $erros[] = "URL invalido";
                    
                    endif;

        echo $url;
        echo "<br>";
    endif;

// se tiver mensagens de erro ele irá mostrar
// empty serve para verificar se a variavel está vazia
// neste caso eu coloquei "!"
// se a variavel não estiver vazia então faça
if(!empty($erros)):

    // foi criado para gerar uma lista com os erros
    foreach($erros as $erro): 
    
        echo "<li>$erro</li>";
    
    endforeach;
//olha como esta o else ":" ";" kkkkkk
else: echo "parabéns, seus dados estão corretos";



endif;
    ?>
</body>

</html>