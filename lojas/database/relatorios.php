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

	header('Location: ../consultas/relatorios.php'); 
}

?>