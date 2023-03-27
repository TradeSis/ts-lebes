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

	if ($operacao == "inserir") {
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

	header('Location: ../consultas/relatorios_parametros.php'); 
}

?>