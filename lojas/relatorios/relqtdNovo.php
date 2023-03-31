<?php
// gabriel 09022023 15:35

include_once '../head.php';
include_once '../database/relatorios.php';

$parametros=null;
if (isset($_GET['parametros'])) {
    $parametros = array(
        'codigoFilial' => $_POST['codigoFilial'],
        'dataInicial' => $_POST['dataInicial'],
        'dataFinal' => $_POST['dataFinal'],
    );
}
$progcod="relqtdNovo.p";

$relatorios = buscaRelatorios($progcod,$parametros);
?>
<!DOCTYPE html>
<html lang="pt-BR">




<body class="bg-transparent">

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h3 class="col">Resumo liquidações diarias p/ periodo</h3>
                    </div>
                    <div class="col-2" style="text-align:right">
                        <a href="relqtdNovo_inserir.php" role="button" class="btn btn-success btn-sm">Novo Relatório</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table table-sm table-hover">
            <table class="table">
                <!--<table id="tabela" class="table table-bordered mb-0">-->

                <thead class="thead-light">
                    <tr>
                        <th class="text-center">Usuário</th>
                        <th class="text-center">Data</th>
                        <th class="text-center">Hora</th>
                        <th class="text-center">Programa</th>
                        <th class="text-center">Nome do relatório</th>
                        <th class="text-center">Nome do arquivo</th>
                        <th class="text-center">REMOTE_ADDR</th>
                        <th class="text-center">PDF</th>
                    </tr>
                </thead>
                <?php
                foreach ($relatorios as $relatorio) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $relatorio['usercod'] ?></td>
                        <td class="text-center"><?php echo $relatorio['dtinclu'] ?></td>
                        <td class="text-center"><?php echo $relatorio['hrinclu'] ?></td>
                        <td class="text-center"><?php echo $relatorio['progcod'] ?></td>
                        <td class="text-center"><?php echo $relatorio['relatnom'] ?></td>
                        <td class="text-center"><?php echo $relatorio['nomeArquivo'] ?></td>
                        <td class="text-center"><?php echo $relatorio['REMOTE_ADDR'] ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm" href="visualizar.php?nomeArquivo=<?php echo $relatorio['nomeArquivo'] ?>">Visualizar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

   

</body>

</html>