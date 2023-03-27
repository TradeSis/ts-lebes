<?php
// helio 17022023 (L 22) coloquei direto a URL da Lebes e o Metodo POST 
// helio 01022023 usando padrao defineConexaoApi
// helio 31012023 16:16 -  criado

function chamaAPI ($api,$apiUrlParametros,$apiEntrada,$apiMethod) {

	$apiIP = defineConexaoApi();
	
	$apiRetorno = array();
    
    switch ($api) {
        case "clientes":
            $apiUrl = $apiIP.'/api/tsservices/' . $apiUrlParametros;
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


