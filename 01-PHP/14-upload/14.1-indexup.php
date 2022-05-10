<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="pt-br">
    <title>Document</title>
</head>

<body>
    <!--UPLOAD DE ARQUIVOS-->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      
        <input type="file" name="arquivo">

        <input type="submit" name="enviar-formulario">



    </form>

    <?php
    // verifica se o usuário apertou o botão enviar-formulario
    if (isset($_POST['enviar-formulario'])) :
 
        /* ARRAY QUE INDICA OS FORMATOS PERMITIDOS.
         POSSO COLOCAR QUALQUER FORMATO, MAS NESSA EU SO COLOQUEI FORMATOS DE IMAGENS*/
        $formatospermitidos = array("png", "jpeg", "gif", "jpg");

      //  var_dump($_FILES)."<br>";

        // PARA PEGAR A EXTENSÃO DOS ARQUIVOS. EX: .JPG E ETC
        // PARAMETRO 1 [NOME DO INPUT]
        // PARAMETRO 2 [INDICE] caso vc não entenda comente o codigo abaixo "$extensao..." e descomente o var_dump acima
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        //VERIFICAR SE A EXTENSÃO EXISTE DENTRO DO ARRAY $formatospermitidos
        if (in_array($extensao, $formatospermitidos)) :

            //DESTINO
            $pasta = "arquivos/";

            //CAMINHO DO ARQUIVO DENTRO DA SUA MAQUINA
            $temporario = $_FILES['arquivo']['tmp_name'];
        
            //gerar novo nome. OUS SEJA RENOMEAR ARQUIVO
            $novoNome = uniqid() . ".$extensao";
        
            // ESSA FUNÇÃO QUE FAZ O UPLOAD FUNCIONAR
            // PARAMETRO 1 ARQUIVO TEMPORARIO
            // PARAMETRO 2 PASTA DE DESTINO
            // PARAMETRO 3 FUNÇÃO DE RENOMEAR
            if (move_uploaded_file($temporario, $pasta . $novoNome)) :
                $mensagem = "upload feito com sucesso!!!";

            else :
                $mensagem = "não foi possivel fazer o upload";



            endif;


        endif;

    else : $mensagem[] = "não existe";

    endif;

    ?>


</body>

</html>