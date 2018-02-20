<?php
	$nome=$_GET['nome'];
	$sobrenome=$_GET['sobrenome'];
	$datanascimento=$_GET['datanascimento'];
	$cpf=$_GET['cpf'];
	$endereco=$_GET['endereco'];	

    $r=file_get_contents('http://localhost/commerce/php/json.php?comando=inserir'
    	.'&nome='.
    	$nome.'&sobrenome='.
    	$sobrenome.'&datanascimento='.
    	$datanascimento.'&cpf='.
    	$cpf.'&endereco='.$endereco);
	$resultado = json_decode($r,true);
	if($resultado['codigo']==1) echo "inseriu";
?>