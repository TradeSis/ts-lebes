<?php

include_once('../conexao.php');

function buscaRelatorios($parametros)
{
	
	$relatorios = array();
	$apiEntrada = array(
		'parametros' => $parametros,
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
	}
	
	//-EXTRATO DE COBRANCA SIMPLES
	if ($operacao == "cred01") {
		$parametros = array(
			'posicao' => $_POST['posicao'],
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
	}
	
	//-POSICAO DE CLIENTE POR PERIODO - A
	if ($operacao == "cre01_ma") {
		$parametros = array(
			'modalidade' => $_POST['modalidade'],
			'posicao' => $_POST['posicao'],
			'codigoFilial' => $_POST['codigoFilial'],
			'dataInicial' => $_POST['dataInicial'],
			'dataFinal' => $_POST['dataFinal'],
			'consideralp' => $_POST['consideralp'],
			'considerafeirao' => $_POST['considerafeirao'],
		);
		$apiEntrada = array(
			'usercod' => $_POST['usercod'],
			'progcod' => $_POST['progcod'],
			'relatnom' => $_POST['relatnom'],
			'parametros' => $parametros,
		);
		$relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
	}
	
	//-POSICAO DE CLIENTE POR PERIODO - B
	if ($operacao == "cre01_lp") {
		$parametros = array(
			'modalidade' => $_POST['modalidade'],
			'posicao' => $_POST['posicao'],
			'codigoFilial' => $_POST['codigoFilial'],
			'dataInicial' => $_POST['dataInicial'],
			'dataFinal' => $_POST['dataFinal'],
			'consideralp' => $_POST['consideralp'],
			'considerafeirao' => $_POST['considerafeirao'],
		);
		$apiEntrada = array(
			'usercod' => $_POST['usercod'],
			'progcod' => $_POST['progcod'],
			'relatnom' => $_POST['relatnom'],
			'parametros' => $parametros,
		);
		$relatorios = chamaAPI(null, '/relatorios/inserir', json_encode($apiEntrada), 'PUT');
	}

	header('Location: ../consultas/relatorios.php'); 
}

?>