<?php

include_once('../conexao.php');

function buscaRelatorios($progcod,$usercod)
{
        
        $entrada = array(
                'progcod' => $progcod,
                'usercod' => $usercod
        );
        
        $apiEntrada = array(
                'entrada' => array($entrada)
        );
        $relatorios = chamaAPI(null, '/relatorios/listagem', json_encode($apiEntrada), 'GET');
        return $relatorios;
}
if (isset($_GET['operacao'])) {

        $operacao = $_GET['operacao'];

        
        //
        if ($operacao == "relat") {
                $parametros = array(
                        'codigoCliente' => $_POST['codigoCliente'],
                        'codigoFilial' => $_POST['codigoFilial'],
                        'modalidade' => $_POST['modalidade'],
                        'dataInicial' => $_POST['dataInicial'],
                        'dataFinal' => $_POST['dataFinal'],
                        'numeroCertificado' => $_POST['numeroCertificado'],
                );
                $apiEntrada = array(
                        'usercod' => $_POST['usercod'],
                        'progcod' => $_POST['progcod'],
                        'relatnom' => $_POST['relatnom'],
                        'parametros' => $parametros,
                );
                $relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
                
                header('Location: ../consultas/relatorios.php'); 
        }
        
        //POSICAO VENCIDOS E A VENCER
        if ($operacao == "frsalcart") {
                $parametros = array(
                        'modalidade' => $_POST['modalidade'],
                        'codigoFilial' => $_POST['codigoFilial'],
                        'dataRef' => $_POST['dataRef'],
                        'consideralp' => $_POST['consideralp'],
                        'considerafeirao' => $_POST['considerafeirao'],
                        'anoemissao' => $_POST['anoemissao'],
                        'clientesnovos' => $_POST['clientesnovos'],
                );
                $apiEntrada = array(
                        'usercod' => $_POST['usercod'],
                        'progcod' => $_POST['progcod'],
                        'relatnom' => $_POST['relatnom'],
                        'parametros' => $parametros,
                );
                $relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
                
                header('Location: ../relatorios/frsalcart.php'); 
        }
        
        //RESUMO LIQUIDACOES DIARIAS P/ PERIODO
        if ($operacao == "relqtdNovo") {
                $parametros = array(
                        'codigoFilial' => $_POST['codigoFilial'],
                        'dataInicial' => $_POST['dataInicial'],
                        'dataFinal' => $_POST['dataFinal'],
                );
                $apiEntrada = array(
                        'usercod' => $_POST['usercod'],
                        'progcod' => $_POST['progcod'],
                        'relatnom' => $_POST['relatnom'],
                        'parametros' => $parametros,
                );
                $relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
                
                header('Location: ../relatorios/relqtdNovo.php'); 
        }
        
        //-EXTRATO DE COBRANCA SIMPLES
        if ($operacao == "loj_cred01") {
                $parametros = array(
                        'posicao' => $_POST['posicao'],
                        'codigoFilial' => $_POST['codigoFilial'],
                        'dataInicial' => $_POST['dataInicial'],
                        'dataFinal' => $_POST['dataFinal'],
                        'ordem' => $_POST['ordem'],
                );
                $apiEntrada = array(
                        'usercod' => $_POST['usercod'],
                        'progcod' => $_POST['progcod'],
                        'relatnom' => $_POST['relatnom'],
                        'remote_addr' =>  $_SERVER["REMOTE_ADDR"],
                        'parametros' => $parametros,
                );
                $relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
                
                header('Location: ../relatorios/loj_cred01.php'); 
        }
        
        //-POSICAO DE CLIENTE POR PERIODO - A
        if ($operacao == "loj_cre01_ma") {
                $parametros = array(
                        'modalidade' => $_POST['modalidade'],
                        'posicao' => $_POST['posicao'],
                        'codigoFilial' => $_POST['codigoFilial'],
                        'dataInicial' => $_POST['dataInicial'],
                        'dataFinal' => $_POST['dataFinal'],
                        'consideralp' => $_POST['consideralp'],
                        'considerafeirao' => $_POST['considerafeirao'],
                        'ordem' => $_POST['ordem'],
                );
                $apiEntrada = array(
                        'usercod' => $_POST['usercod'],
                        'progcod' => $_POST['progcod'],
                        'relatnom' => $_POST['relatnom'],
                        'parametros' => $parametros,
                );
                $relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
                
                header('Location: ../relatorios/loj_cre01_ma.php'); 
        }
        
        //-POSICAO DE CLIENTE POR PERIODO - B
        if ($operacao == "loj_cre01_lp") {
                $parametros = array(
                        'modalidade' => $_POST['modalidade'],
                        'posicao' => $_POST['posicao'],
                        'codigoFilial' => $_POST['codigoFilial'],
                        'dataInicial' => $_POST['dataInicial'],
                        'dataFinal' => $_POST['dataFinal'],
                        'consideralp' => $_POST['consideralp'],
                        'considerafeirao' => $_POST['considerafeirao'],
                        'ordem' => $_POST['ordem'],
                );
                $apiEntrada = array(
                        'usercod' => $_POST['usercod'],
                        'progcod' => $_POST['progcod'],
                        'relatnom' => $_POST['relatnom'],
                        'parametros' => $parametros,
                );
                
                $relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
                header('Location: ../relatorios/loj_cre01_lp.php'); 
        }
}

?>