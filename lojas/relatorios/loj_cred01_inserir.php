<?php

include_once('../head.php');
?>

<body class="bg-transparent">

    <div class="container" style="width:700px">
        <div class="card shadow">
            <div class="card-header border-1">
                <div class="row">
                    <div class="col-10">
                        <h4 class="col">Extrato de cobrança simples</h4>
                    </div>
                    <div class="col-sm" style="text-align:right">
                        <a href="#" onclick="history.back()" role="button" class="btn btn-primary btn-sm">Voltar</a>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 10px">

                <form action="../database/relatorios.php?operacao=loj_cred01" method="post">
                    <div class="row">
                        <div class="col">
                            <label>Usuário</label>
                            <div class="form-group">
                                <input type="text" name="usercod" class="form-control" value="Lebes" autocomplete="off"
                                    readonly>
                            </div>
                        </div>
                        <div class="col">
                            <label>Programa</label>
                            <div class="form-group">
                                <input type="text" name="progcod" class="form-control" value="loj_cred01"
                                    autocomplete="off" readonly>
                            </div>
                        </div>

                    </div>
                    <label>Nome do relatório</label>
                    <div class="form-group">
                        <input type="text" name="relatnom" class="form-control" value="Extrato de cobranca simples"
                            autocomplete="off" readonly>
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
                    <div class="row">
                        <div class="form-group col">
                            <label>Posição</label>
                            <select class="form-control" name="posicao">
                                <option value="1">Posição 1</option>
                                <option value="2">Posição 2</option>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label>Filial</label>
                            <input type="number" class="form-control" name="codigoFilial">
                        </div>
                        <div class="form-group col">
                            <label>Ordenação</label>
                            <select class="form-control" name="ordem">
                                <option value="alfa">Alfabetica</option>
                                <option value="venc">Vencimento</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent" style="text-align:right">
                        <button type="submit" class="btn btn-sm btn-success">Gerar Relatório</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>