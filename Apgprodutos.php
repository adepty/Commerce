<?php
require_once ('produto.class.php');
require_once('lib/nusoap.php');

    $client = new nusoap_client(
      "http://localhost/commerce/servidor.php?wsdl","wsdl");
    $erro = $client->getError();
    if($erro){
      echo 'Erro: '.$erro;
      exit();
    }else{
      $r = $client->call('excluirProduto',
      array('id'=>$_GET['id']
      ));


        print "<p>Produto apagado com sucesso!</p>";
        print "<p><a href='visualizar.html'>Voltar</a></p>";
    }