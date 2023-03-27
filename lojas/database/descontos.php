<?php
// helio 17022023 buscaDescontos - consertei tratamento do retorno
// helio 17022023 buscaDescontos - criei array $retorno transitorio, caso $margemDesconto fique vazio
// helio 17022023 $apiEntrada nao estava no formato necessario para entrada
// helio 17022023 array $margemDesconto estava com $codigoLoja=null, possivelmente era parte do parametro
// helio 17022023 L.6 function buscaDescontos estava sem receber o codigoLoja
// gabriel 17022023 15:13

include_once('../conexao.php');

function buscaDescontos($codigoLoja)
{
	$margemDesconto = array();
	$retorno = array();
	$apiEntrada = 
		array("consultaMargemDescontoEntrada" => array(
			array('codigoLoja' => $codigoLoja)
		));
	

	$retorno = chamaAPI('consultaMargemDesconto', 'consultaMargemDesconto', json_encode($apiEntrada), 'GET');

   
	if (isset($retorno["consultaMargemDescontoSaida"])) {
		if (isset($retorno["consultaMargemDescontoSaida"]["margemDesconto"])) {
        	$margemDesconto = $retorno["consultaMargemDescontoSaida"]["margemDesconto"]; // TRATAMENTO DO RETORNO
		}
	}

	return $margemDesconto;
}



?>
