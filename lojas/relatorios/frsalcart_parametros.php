
<?php
// gabriel 22022023 16:00

include_once '../head.php';


?>
<!DOCTYPE html>
<html lang="pt-BR">


<body class="bg-transparent">

    <div class="container mt-3" style="width:500px">
        <div class="card">
            <div class="card-header border-1">
                <h3>Busca Contrato</h3>
            </div>

            <div class="container">
                <form action="frsalcart.php?parametros" method="POST"> 
                    <div class="row">
                        <div class="form-group col">
                            <label>Cliente</label>
                            <input type="text" class="form-control" name="cliente" value="Geral">
                        </div>
                        <div class="form-group col">
                            <label>Modalidade</label>
                            <select class="form-control" name="modalidade">
                                <option value="CRE">Nao</option>
                                <option value="CRE">CRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Estabelecimento</label>
                            <input type="number" class="form-control" name="codigoFilial">
                        </div>
                        <div class="form-group col">
                            <label>Data Referencia</label>
                            <input type="date" class="form-control" name="dataRef">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Considera apenas LP</label>
                            <select class="form-control" name="consideralp">
                                <option value="Nao">Nao</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label>Considerar apenas feirao</label>
                            <select class="form-control" name="considerafeirao">
                                <option value="Nao">Nao</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Abre por Ano de Emissao</label>
                            <select class="form-control" name="anoemissao">
                                <option value="Nao">Nao</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label>Somente clientes novos</label>
                            <select class="form-control" name="clientesnovos">
                                <option value="Nao">Nao</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent" style="text-align:right">
                        <button type="submit" class="btn btn-sm btn-success">Consultar Relatórios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>