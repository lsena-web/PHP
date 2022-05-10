
<?php
//HEADER
include_once   'includes/header.php'; 

include_once   'php_action/db_connect.php';

if(isset($_GET['id'])):
    
    $id = mysqli_escape_String($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes where id = $id";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

endif;
    
?>


<div class= "row" >

    <div class= "col s12 m6 push-m3 " >
         <h3 class = "light">Editar cliente</h3>

        <form action="php_action/update.php" method = "POST">
                <!--
                    O USUÁRIO NÃO VER O INPUT DO TIPO HIDDEN, NESTE CASO ELE FOI CRIADO PARA RECEBER O ID DO CLIENTE... ASSIM O PÁGINA DE PROCESSAMENTO
                    QUE SERIA UPDATE.PHP PODERIA PEGAR O ID E FAZER O CODIGO SLQ
                -->
                <input type="hidden" name = "id" value = "<?php echo $dados['id'];?>">
            <div class = "input-field col s12">
                <input type="text" name = "nome" id = "nome" value = "<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>

            <div class = "input-field col s12">
                <input type="text" name = "sobrenome" id = "sobrenome" value = "<?php echo $dados['sobrenome'];?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class = "input-field col s12">
                <input type="text" name = "email" id = "email" value = "<?php echo $dados['email'];?>">
                <label for="email">E-mail</label>
            </div>

            <div class = "input-field col s12">
                <input type="text" name = "idade" id = "idade" value = "<?php echo $dados['idade'];?>">
                <label for="idade">Idade</label>
            </div>

            <button type= "submit" class = "btn" name = "btn-editar">Atualizar</button>
            <a href="index.php" class = "btn green">Lista de clientes</a>
          

        </form>
    </div>
</div>

<?php
//FOOTER
include_once   'includes/footer.php'; ?>