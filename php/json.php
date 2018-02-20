<?php 
	require_once 'cliente.class.php';

	$c1 = new cliente();
	$resposta=array();
	if (isset($_GET['comando'])) {
		$c=$_GET['comando'];
		
		switch ($c) {
			case 'inserir':
				if(isset($_GET['nome']) &&
					isset($_GET['sobrenome']) &&
					isset($_GET['datanascimento']) &&
					isset($_GET['cpf']) && 
					isset($_GET['endereco'])){
					$c1->setNome($_GET['nome']);
					$c1->setSobrenome($_GET['sobrenome']);
					$c1->setDataNascimento($_GET['datanascimento']);
					$c1->setCpf($_GET['cpf']);
					$c1->setEndereco($_GET['endereco']);
					$r=$c1->inserirCliente();
					if($r){
						$resposta['codigo']=1;
						$resposta['mensagem']="Inserido com sucesso";
						echo json_encode($resposta);
					}else{
						$resposta['codigo']=0;
						$resposta['mensagem']=
							"Erro ao inserir";
						echo json_encode($resposta);
					}
				}else{
					$resposta['codigo']=0;
					$resposta['mensagem']=
						"Campos ausentes";
					echo json_encode($resposta);
				}
				break;
				case "buscarTodos":
				$r=$c1->buscarTodos();
				if(!empty($r[0]['idCliente'])){
					$resposta['codigo']=1;
					$resposta['mensagem']=
						"Buscado com sucesso";
					$resposta['e-commerce']=$r;
					echo json_encode($resposta);
				}else{
					$resposta['codigo']=0;
					$resposta['mensagem']=
						"Erro ao buscar";
					echo json_encode($resposta);
				}
			break;
			default:
				$resposta['codigo']=0;
				$resposta['mensagem']=
						"Comando invalido";
				echo json_encode($resposta);
				break;
		}
	}else{
		$resposta['codigo']=0;
		$resposta['mensagem']=
			"Campo obrigatorio ausente";
		echo json_encode($resposta);	
	}
 ?>