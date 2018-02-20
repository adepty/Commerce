<?php
require_once('lib/nusoap.php');
    $client = new nusoap_client(
      "http://localhost/commerce/servidor.php?wsdl","wsdl");
    $erro = $client->getError();
    if($erro){
      echo 'Erro: '.$erro;
      exit();
    }else{
      $r = $client->call('inserirProduto',
      array('nome'=>$_POST['nome'],
        'serie'=>$_POST['codigo'],
        'tipo'=>$_POST['tipo'],
        'qtda'=>$_POST['qtda'],
        'descricao'=>$_POST['descricao']
      ));
    }

?>