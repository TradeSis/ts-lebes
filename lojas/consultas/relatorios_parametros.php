<?php
// gabriel 10022023 16:23

include_once '../head.php';
include_once '../database/relatorios.php';


?>
<!DOCTYPE html>
<html lang="pt-BR">


<body class="bg-transparent">

    <div class="container mt-3" style="width:500px">
        <div class="card">
            <div class="card-header border-1">
                <h3>Parametros Relatórios</h3>
            </div>

            <div class="container">
                <form action="relatorios.php" method="post">
                    <div class="form-group">
                        <label>Código Cliente</label>
                        <input type="text" class="form-control" name="codigoCliente">
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Filial</label>
                            <input type="number" class="form-control" name="codigoFilial">
                        </div>
                        <div class="form-group col">
                            <label>Modalidade</label>
                            <select class="form-control" name="modalidade">
                                <option value=""></option>
                                <option value="CRE">CRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Data Inicial</label>
                            <input type="date" class="form-control" name="dataInicial">
                        </div>
                        <div class="form-group col">
                            <label>Data Final</label>
                            <input type="date" class="form-control" name="dataFinal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Certificado</label>
                        <input type="number" class="form-control" name="numeroCertificado">
                    </div>
                    <div class="card-footer bg-transparent" style="text-align:right">
                        <button type="submit" class="btn btn-sm btn-success">Verificar Relatorios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>