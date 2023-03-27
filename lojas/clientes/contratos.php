<?php
// gabriel 23022023 09:50

include_once '../head.php';
include_once '../database/crediariocontrato.php';

if (isset($_GET['parametros'])) {
    $numeroContrato = $_POST['numeroContrato'];
}
if (isset($_GET['numeroContrato'])) {
    $numeroContrato = $_GET['numeroContrato'];
}


$contrato = buscaContratos($numeroContrato);
$contrato = $contrato[0];
$parcelas = $contrato["parcelas"];
$produtos = $contrato["produtos"];
?>

<body class="bg-transparent">
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header border-1">
                <div class="row">
                    <div class="col-sm-10">
                        <h3 class="col">Contrato <?php echo $contrato['numeroContrato'] ?>
                        </h3>
                    </div>
                    <div class="col-sm" style="text-align:right">
                        <a href="#" onclick="history.back()" role="button" class="btn btn-primary btn-sm">Voltar</a>
                    </div>
                </div>
            </div>


            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <label>Contrato</label>
                        <input type="text" class="form-control" value="<?php echo $contrato['numeroContrato'] ?>" readonly>
                        <label>Cliente</label>
                        <input type="text" class="form-control" value="<?php echo $contrato['codigoCliente'] ?> - <?php echo $contrato['nomeCliente'] ?>" readonly>
                        <label>Loja</label>
                        <input type="text" class="form-control" value="FILIAL" readonly>
                    </div>
                    <div class="col">
                        <label>Data Inicial</label>
                        <input type="text" class="form-control" value="<?php echo $contrato['dtemissao'] ?>" readonly>
                        <label>Situação</label>
                        <input type="text" class="form-control" value="<?php echo $contrato['situacao'] ?>" readonly>
                        <label>Modalidade</label>
                        <input type="text" class="form-control" value="<?php echo $contrato['modalidade'] ?>" readonly>
                    </div>
                </div>
                <hr>
                <div>
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label>Total</label>
                            <input type="text" class="form-control" value="<?php echo $contrato['valorTotal'] ?>" readonly>
                            <label>Aberto</label>
                            <input type="text" class="form-control" value="<?php echo $contrato['valorAberto'] ?>" readonly>
                            <label>Vencido</label>
                            <input type="text" class="form-control" value="<?php echo $contrato['valorVencido'] ?>" readonly>
                            <label>Entrada</label>
                            <input type="text" class="form-control" value="<?php echo $contrato['valorEntrada'] ?>" readonly>

                        </div>
                        <div class="col-8">
                            <div class="table table-sm table-hover">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Contrato</th>
                                            <th class="text-center">Parc</th>
                                            <th class="text-center">Dt Venc</th>
                                            <th class="text-center">Vl Parc</th>
                                            <th class="text-center">Situação</th>
                                            <th class="text-center">Dt Pag</th>
                                            <th class="text-center">Vl Pag</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($parcelas as $parcela) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $parcela['numeroContrato'] ?></td>
                                            <td class="text-center"><?php echo $parcela['parcela'] ?></td>
                                            <td class="text-center"><?php echo $parcela['dtVencimento'] ?></td>
                                            <td class="text-center"><?php echo $parcela['vlrParcela'] ?></td>
                                            <td class="text-center"><?php echo $parcela['situacao'] ?></td>
                                            <td class="text-center"><?php echo $parcela['dtPagamento'] ?></td>
                                            <td class="text-center"><?php echo $parcela['vlrPago'] ?></td>
                                        </tr>
                                    <?php } ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Produtos</h5>
                <div class="table table-sm table-hover">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Código</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Preço</th>
                                <th class="text-center">Quantidade</th>
                                <th class="text-center">Valor Total</th>
                            </tr>
                        </thead>
                        <?php foreach ($produtos as $produto) { ?>
                            <tr>
                                <td class="text-center"><?php echo $produto['codigoProduto'] ?></td>
                                <td class="text-center"><?php echo $produto['nomeProduto'] ?></td>
                                <td class="text-center"><?php echo $produto['precoVenda'] ?></td>
                                <td class="text-center"><?php echo $produto['quantidade'] ?></td>
                                <td class="text-center"><?php echo $produto['valorTotal'] ?></td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>
    </div>



</body>

</html>