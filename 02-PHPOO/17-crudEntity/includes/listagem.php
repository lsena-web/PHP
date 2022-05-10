<?php
$mensagem = '';

if (isset($_GET['status'])) :

    switch ($_GET['status']):

        case 'success':
            $mensagem = '<div class="alert alert-success" role="alert"> Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger" role="alert"> Ação não executada!</div>';
            break;


    endswitch;

endif;

// a listagem está incluida no index.php então ela tem acesso a variavel $vagas
$resultados = ''; // essa variavel vai guardar um html para imprimir no body
foreach ($vagas as $vaga) :

    $resultados .= '<tr>
    
                        <th scope="row">' . ($vaga->id) . '</th>
                        <td>' . $vaga->titulo . '</td>
                        <td>' . $vaga->descricao . '</td>
                        <td>' . ($vaga->ativo == 's' ? 'Ativo' : 'Inativo') . '</td>
                        <td>' . date('d/m/Y à\s H:i:s', strtotime($vaga->data)) . '</td>
                        <td> 
                        <a href="editar.php?id=' . $vaga->id . '"><button type="button" class="btn btn-primary"> Editar </button> 
                        <a href="excluir.php?id=' . $vaga->id . '"><button type="button" class="btn btn-danger"> Excluir </button> 
                        </td>
                        <tr>';
endforeach;

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                        <td colspan="6" class="text-center" > 
                                                            Nenhuma vaga encontrada
                                                        </td>
                                                        </tr>';
// GETS
unset($_GET['status']);
unset($_GET['pagina']);

$gets = http_build_query($_GET);

// PAGINAÇÃO
$paginacao = '';
$paginas = $obPagination->getPages();

foreach ($paginas as $key => $pagina) {
    $class = $pagina['atual'] ? 'btn-primary' : 'btn-light';
    $paginacao .= '<a href="?pagina=' . $pagina['pagina'] . '&' . $gets . '">
                   <button type="button" class="btn ' . $class . '">' . $pagina['pagina'] . '</button>
                   </a>';
}
?>

<main>

    <?= $mensagem ?>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova vaga</button>
        </a>
    </section>

    <section>
        <form action="" method="get">
            <div class="row my-4">
                <div class="col">
                    <label>Buscar por Título</label>
                    <input type="text" name="busca" class="form-control" value="<?= $busca ?>">
                </div>

                <div class="col">
                    <label>Status</label>
                    <select name="filtroStatus" class="form-control">
                        <option value="">Ativa / Inativa</option>
                        <option value="s" <?= $filtroStatus == 's' ? 'selected' : '' ?>>Ativa</option>
                        <option value="n" <?= $filtroStatus == 'n' ? 'selected' : '' ?>>Inativa</option>
                    </select>
                </div>

                <div class="col d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>
    </section>

    <section>
        <table class="table bg-light mt-3 rounded-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TÍTULO</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">DATA</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <!--imprimindo o valor de $resultados-->
                <?= $resultados ?>
            </tbody>
        </table>
    </section>
    <section>
        <?= $paginacao ?>
    </section>


</main>