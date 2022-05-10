<?php

/*

FILTROS DE VALIDAÇÃO
FUNÇÃO (filter_input)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL

CASO QUEIRA SABER MAIS VA PARA 
https://www.php.net/manual/en/filter.filters.validate.php

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
<form action="<?PHP echo $_SERVER['PHP_SELF'];?>" method ="POST">

<br><label for="">IDADE:</label>
<br><input type="text"  name="idade">
<br><label for="">E-MAIL:</label>
<br><input type="email" name="email">
<br><label for="">PESO:</label>
<br><input type="text" name="peso">
<br><label for="">IP:</label>
<br><input type="text" name="ip">
<br><label for="">URL:</label>
<br><input type="text" name="url">

<br>
<br>
<button type="submit" name="enviar-formulario">enviar</button>

</form>

<?php

// Informa se a variável foi iniciada SUPER GLOBAL ($_POST), OU SEJA, TESTANDO SE ALGUEM APERTOU O BOTÃO ENVIAR 
if(isset($_POST['enviar-formulario'])):

    //serve para armazenar os erros que irei indicar abaixo
$erros = array();

// verificando se idade é do tipo inteiro. "se sim retorna o valor, senão retorna nada"
// parametro 1 tipo do input
// parametro 2 nome do inpunt
// parametro 3 é o tipo de filtro. "neste caso estamos usando um filtro de inteiros"

// coloquei "!" então significa se idade não for um inteiro retornará esta mensagem
if(!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)){

    $erros[] = "idade precisa ser um inteiro";

}
if(!$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){

    $erros[] = "E-MAIL INVALIDO";

}
if(!$peso = filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)){

    $erros[] = "peso errado";

}
if(!$ip = filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)){

    $erros[] = "ip de vagabundo";

}
if(!$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)){

    $erros[] = "que poha de url é essa?";

}



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

endif;


?>
    
</body>
</html>
