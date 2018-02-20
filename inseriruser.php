<?php
require_once('lib/nusoap.php');
    $client = new nusoap_client(
      "http://localhost/commerce/servidor.php?wsdl","wsdl");
    $erro = $client->getError();
    if($erro){
      echo 'Erro: '.$erro;
      exit();
    }else{
      $r = $client->call('inserirUsuario',
      array('nome'=>$_POST['nome'],
        'sobrenome'=>$_POST['sobrenome'],
        'email'=>$_POST['email'],
        'datanascimento'=>$_POST['datanascimento'],
        'senha'=>$_POST['senha']
      ));
    }

?>