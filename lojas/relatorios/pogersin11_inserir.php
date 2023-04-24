<?php

include_once('../head.php');
$filial = explode(".", $_SERVER['REMOTE_ADDR']);
$filial = $filial[2];
?>

<body class="bg-transparent">

    <div class="container" style="width:700px">
        <div class="card shadow">
            <div class="card-header border-1">
                <div class="row">
                    <div class="col-10">
                        <h4 class="col">Posição financeira vencidos/a vencer</h4>
                    </div>
                    <div class="col-sm" style="text-align:right">
                        <a href="#" onclick="history.back()" role="button" class="btn btn-primary btn-sm">Voltar</a>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 10px">

                <form action="../database/relatorios.php?operacao=pogersin11" method="post">
                    <div class="row">
                        <div class="col">
                            <label>Usuário</label>
                            <div class="form-group">
                                <input type="text" name="usercod" class="form-control" value="Lebes" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <label>Programa</label>
                            <div class="form-group">
                                <input type="text" name="progcod" class="form-control" value="pogersin11" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Nome do relatório</label>
                            <input type="text" name="relatnom" class="form-control" value="Posicao financeira vencidos/a vencer" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Cliente</label>
                                <select class="form-control" name="cliente">
                                    <option value="yes">Geral</option>
                                    <option value="no">Facil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Considerar apenas feirao</label>
                                <select class="form-control" name="considerafeirao">
                                    <option value="Nao">Nao</option>
                                    <option value="Sim">Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="col"> 
                            <div class="form-group">
                                <label>Considera apenas LP</label>
                                <select class="form-control" name="consideralp">
                                    <option value="Nao">Nao</option>
                                    <option value="Sim">Sim</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Somente clientes novos</label>
                                <select class="form-control" name="clientesnovos">
                                    <option value="Nao">Nao</option>
                                    <option value="Sim">Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Modalidade</label>
                                <select class="form-control" name="modalidade" multiple>
                                    <option value="CRE">CRE</option>
                                    <option value="CP">CP</option>
                                    <option value="CP0">CP0</option>
                                    <option value="CP1">CP1</option>
                                    <option value="CP2">CP2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6>Por Estabelecimento:</h6>
                    <div class="row">
                        <div class="form-group col">
                                <label>Estabelecimento</label>
                                <input type="number" placeholder="0 = Geral" class="form-control" name="estab">
                            </div>
                        <div class="form-group col">
                            <label>Data Referência</label>
                            <input type="date" class="form-control" name="dataRef">
                        </div>
                    </div>
                    <hr>
                    <h6>Por Filial:</h6>
                    <div class="row">
                        <div class="form-group col">
                            <label>Filial</label>
                            <input type="number" class="form-control" name="CodigoFilial">
                        </div>
                        <div class="form-group col">
                            <label>Data Inicial</label>
                            <input type="date" class="form-control" name="dataInicial">
                        </div>
                        <div class="form-group col">
                            <label>Data Final</label>
                            <input type="date" class="form-control" name="dataFinal">
                        </div>
                        <input type="text" class="form-control" value="Filial <?php echo $filial ?>" name="REMOTE_ADDR" hidden>
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