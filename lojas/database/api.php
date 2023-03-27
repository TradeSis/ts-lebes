<?php
// helio 17022023 (L 22) coloquei direto a URL da Lebes e o Metodo POST 
// helio 01022023 usando padrao defineConexaoApi
// helio 31012023 16:16 -  criado

function chamaAPI ($api,$apiUrlParametros,$apiEntrada,$apiMethod) {

	$apiIP = defineConexaoApi();
	
	$apiRetorno = array();
    
    switch ($api) {
        case "seguros":
            $apiUrl = $apiIP.'/api/ts/' . $apiUrlParametros;
        break;
        case "relatorios":
            $apiUrl = $apiIP.'/api/ts/' . $apiUrlParametros;
        break;
		case "crediario/contrato":
            $apiUrl = $apiIP.'/api/ts/' . $apiUrlParametros;
        break;
        case "crediario/cliente":
            $apiUrl = $apiIP.'/api/ts/' . $apiUrlParametros;
        break;		
        case "consultaMargemDesconto":
            // helio 17022023 coloquei direto a URL da Lebes e o Metodo POST
			// $apiUrl = $apiIP.'/api/ts/' . $apiUrlParametros;
			$apiMethod = "POST";
			$apiUrl = "http://172.19.130.175:5555/gateway/pdvRestAPI/1.0/consultaMargemDescontoRestResource";
			// helio 17022023
        break;
        default:
			if (!$api=="") {
				$apiUrl = $api;
			}
            $apiUrl = $apiIP.$apiUrlParametros;   
        break;
    }

	
	$apiHeaders = array(
		"Content-Type: application/json"
	);
	
 	$apiCurl = curl_init($apiUrl);

	curl_setopt($apiCurl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($apiCurl, CURLOPT_CUSTOMREQUEST, $apiMethod);
	curl_setopt($apiCurl, CURLOPT_HTTPHEADER, $apiHeaders );
	
	if (isset($apiEntrada)) { 
		
		curl_setopt($apiCurl, CURLOPT_POSTFIELDS, $apiEntrada); 
	}

	$apiResponse = curl_exec($apiCurl);

	$apiInfo     = curl_getinfo($apiCurl);

	curl_close($apiCurl);
        
	if ($apiInfo['http_code'] == 200) {

		$apiRetorno = json_decode($apiResponse, true);
	}
	

	return $apiRetorno;

}

?>


