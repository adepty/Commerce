<?php
	require_once('lib/nusoap.php');
	$client = new nusoap_client(
		"http://localhost/commerce/servidor.php?wsdl",
		"wsdl");
	$erro = $client->getError();
	if($erro){
		echo 'Erro: '.$erro;
		exit();
	}else{
		/*$r = $client->call('inserirCliente',
			array('nome'=>'Pedro',
				'telefone'=>'00110011',
				'email'=>'pedro@usf.edu.br',
				'datanascimento'=>'1990-01-01'
			));*/
			
		$r = $client->call('procurarID',
			array('id'=>3));
		print_r($r);
	}
?>