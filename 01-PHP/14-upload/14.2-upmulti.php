<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="pt-br">
    <title>Document</title>
</head>

<body>
    <!--UPLOAD DE MULTIPLOS ARQUIVOS-->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

    <!--
            para enviar multiplos arquivos vc terá que colocar no input a palavra multiple
            e tera que colocar no name o "[]" para indicar que é um array
    -->
        <input type="file" name="arquivo[]" multiple>

        <input type="submit" name="enviar-formulario">



    </form>

    <?php
    // verifica se o usuário apertou o botão enviar-formulario
    if (isset($_POST['enviar-formulario'])) :

        /* ARRAY QUE INDICA OS FORMATOS PERMITIDOS.
         POSSO COLOCAR QUALQUER FORMATO, MAS NESSA EU SO COLOQUEI FORMATOS DE IMAGENS*/
        $formatospermitidos = array("png", "jpeg", "gif", "jpg");

        //ARMAZENA OS INDICES DOS ARQUIVOS
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        // VAI SER USADO PARA O INCREMENTO DO WHILE
        $contador = 0;
        while ($contador <  $quantidadeArquivos):

        //var_dump($_FILES)."<br>";

        // PARA PEGAR A EXTENSÃO DOS ARQUIVOS. EX: .JPG, .JPEG, .GIF E ETC
        // PARAMETRO 1 [NOME DO INPUT]
        // PARAMETRO 2 [INDICE] caso vc não entenda comente o codigo   e descomente o var_dump acima
        // PARAMETRO 3 [INDICE] LOOPIN DO WHILE PARA FAZER INCREMENTO
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

        //VERIFICAR SE A EXTENSÃO EXISTE DENTRO DO ARRAY $formatospermitidos
        if (in_array($extensao, $formatospermitidos)) :

            //DESTINO. PASTA ONDE SERÁ ARMAZENADO OS UOLOADS
            $pasta = "arquivos/";

            //CAMINHO DO ARQUIVO DENTRO DA SUA MAQUINA
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];

            //gerar novo nome. OU SEJA RENOMEAR ARQUIVO
            $novoNome = uniqid() . ".$extensao";

            // testa se upload deu certo
            // PARAMETRO 1 ARQUIVO TEMPORARIO
            // PARAMETRO 2 PASTA DE DESTINO
            // PARAMETRO 3 FUNÇÃO DE RENOMEAR
            if (move_uploaded_file($temporario, $pasta.$novoNome)) :
                echo "upload feito com sucesso $pasta.$novoNome<br>";

            else :
                $mensagem = "não foi possivel fazer o upload do arquivo";



            endif;

        else: echo"$extensao não é permitida <br>" ;

        endif;

        
//INCREMENTO DO WHILE
        $contador++;

endwhile;
    endif;


    ?>


</body>

</html>