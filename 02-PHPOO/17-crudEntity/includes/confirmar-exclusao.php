<main>

    <!-- foi definido duaa constantes (define('TITLE','Cadastrar vaga') e (define('TITLE','Editar Vaga')) em cadastrar.php e editar.php
dependendo do arquivo que acessa essa pagina  a contante vai mudar kkk que loko constante mudadando,......mas em fim
 estou usando isso para imprimir a o valor da constante <\?=TITLE?> percebe que eu escapei a "\" para esse codigo virar um comentario
-->
    <h2 class="mt-3">Exluir Vaga</h2>

    <form method="POST">

        <div class="form-group">
            <p>Você realmente deseja excluir a Vaga? <strong><?=$obVaga->titulo?></strong></p>
        </div>

        <div class="form-group">

                <a href="index.php">
                    <button type="button" class="btn btn-success">Cancelar</button>
                </a>
          
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>

</main>