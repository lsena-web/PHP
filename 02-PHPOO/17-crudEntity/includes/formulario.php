<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>
<!-- foi definido duaa constantes (define('TITLE','Cadastrar vaga') e (define('TITLE','Editar Vaga')) em cadastrar.php e editar.php
dependendo do arquivo que acessa essa pagina  a contante vai mudar kkk que loko constante mudadando,......mas em fim
 estou usando isso para imprimir a o valor da constante <\?=TITLE?> percebe que eu escapei a "\" para esse codigo virar um comentario
-->
    <h2 class="mt-3"><?=TITLE?></h2>

    <form  method="POST">
    
        <div class="form-group"> 
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="titulo" value="<?php if(C == 's'): echo $obVaga->titulo; endif;?>">
        </div>

        <div class="form-group"> 
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" id="" cols="30" rows="10"><?php if(C == 's'): echo $obVaga->descricao; endif; ?></textarea>
        </div>

        <div class="form-group"> 
            <label for="">status</label>


            <div>
                
                <div class="form-check form-check-inline">
                    <label  class="form-group">
                        <input type="radio" id="s" name="ativo" value="s" checked>Ativo
                    </label>
                </div>
    
                <div class="form-check form-check-inline">
                    <label  class="form-group">
                                                                    <!--se o ativo for igual a 'n' entao o botão vem como marcado senão vem vazio-->
                        <input type="radio" id="n" name="ativo" value="n"<?php if(C == 's'): $obVaga->ativo == 'n' ? 'checked' : ''; endif; ?>>Inativo
                    </label>
                </div>

            </div>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>

</main>