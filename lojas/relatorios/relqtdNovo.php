
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
$progcod="relqtdNovo";

$relatorios = buscaRelatorios($progcod,$parametros);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<body class="bg-transparent">

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h3 class="col">Liquidações diarias p/ periodo</h3>
                    </div>
                    <div class="col-1" style="text-align:right">
                        <a href="#" role="button" class="btn btn-info btn-sm" onClick="window.location.reload()">
                            Atualizar
                            Relatórios
                        </a>
                    </div>
                    <div class="col-2" style="text-align:right">
                        <a href="relqtdNovo_inserir.php" role="button" class="btn btn-success btn-sm">Novo Relatório</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table table-sm table-hover">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Usuário</th>
                        <th class="text-center">Data</th>
                        <th class="text-center">Hora</th>
                        <th class="text-center">Nome do relatório</th>
                        <th class="text-center">Nome do arquivo</th>
                        <th class="text-center">REMOTE_ADDR</th>
                        <th class="text-center">Parâmetros</th>
                        <th class="text-center">PDF</th>
                    </tr>
                </thead>
                <?php
                foreach ($relatorios as $relatorio) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $relatorio['idRelat'] ?></td>
                        <td class="text-center"><?php echo $relatorio['usercod'] ?></td>
                        <td class="text-center"><?php echo $relatorio['dtinclu'] ?></td>
                        <td class="text-center"><?php echo $relatorio['hrinclu'] ?></td>
                        <td class="text-center"><?php echo $relatorio['progcod'] ?></td>
                        <td class="text-center"><?php echo $relatorio['nomeArquivo'] ?></td>
                        <td class="text-center"><?php echo $relatorio['REMOTE_ADDR'] ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm" href="#parametros?idRelat=<?php echo $relatorio['idRelat'] ?>" data-toggle="modal">Parâmetros</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm" href="visualizar.php?nomeArquivo=<?php echo $relatorio['nomeArquivo'] ?>">Visualizar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <div class="modal fade" id="parametros" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Parâmetros do Relatório</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                if (isset($_GET['idRelat'])) {
                    $relatparam = buscaParametros($_GET['idRelat'])['parametros'];

                ?>
                <div class="modal-body">
                    <div class="col-4">
                        <label>Filial</label>
                        <input type="text" class="form-control" value="<?php echo $relatparam['codigoFilial'] ?>" readonly>
                        <label>Data Inicial</label>
                        <input type="text" class="form-control" value="<?php echo $relatparam['dataInicial'] ?>" readonly>
                        <label>Data Final</label>
                        <input type="text" class="form-control" value="<?php echo $relatparam['dataFinal'] ?>" readonly>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>