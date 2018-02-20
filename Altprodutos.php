<?php
require_once('produto.class.php');

require_once('lib/nusoap.php');

if(isset($_GET['id'])){

    $client = new nusoap_client(
      "http://localhost/commerce/servidor.php?wsdl","wsdl");
    $erro = $client->getError();
    if($erro){
      echo 'Erro: '.$erro;
      exit();
    }else{
      $resp = $client->call('buscarID',
      array('id'=>$_GET['id']
      ));
    }
?>

<h3>Alterar Produtos</h3>
	<form action="Altprodutos.php" method="POST">
		<p>id: <input type="int" name="id" value="<?php echo $resp['id'];?>"></p>
		<p>nome: <input type="text" name="nome" value="<?php echo $resp['nome'];?>"></p>
		<p>codigo: <input type="float" name="codigo" value="<?php echo $resp['codigo'];?>"></p>
		<p>tipo: <input type="text" name="tipo" value="<?php echo $resp['tipo'];?>"></p>
		<p>qtda: <input type="int" name="qtda" value="<?php echo $resp['qtda'];?>"></p>
		<p>descricao: <input type="text" name="descricao" value="<?php echo $resp['descricao'];?>"></p>
		<p><input type="submit" name="Alterar"></p>
	</form>
  <?php

}else{
  $id=$_POST['id'];
  $nome=$_POST['nome'];
  $codigo=$_POST['codigo'];
  $tipo=$_POST['tipo'];
  $qtda=$_POST['qtda'];
  $descricao=$_POST['descricao'];

  $client = new nusoap_client(
      "http://localhost/commerce/servidor.php?wsdl","wsdl");
    $erro = $client->getError();
    if($erro){
      echo 'Erro: '.$erro;
      exit();
    }else{
      $r = $client->call('AlterarProduto',
      array('id'=>$id,
        'nome'=>$nome,
        'serie'=>$codigo,
        'tipo'=>$tipo,
        'qtda'=>$qtda,
        'descricao'=>$descricao
      ));

      echo $r;
          print "<p>Produto alterado com sucesso!</p>";
    print "<p><a href='index.html'>Voltar</a></p>";
    }
  }
?> 