<?php
	$r=file_get_contents(
'http://localhost/commerce/json.php?comando=inserirCliente');
	$resultado = json_decode($r);
	print_r($resultado);
?>