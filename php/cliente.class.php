<?php
	require_once 'conexao.class.php';
	class cliente{
		private $idCliente;
		private $nome;
		private $sobrenome;
		private $datanascimento;
		private $cpf;
		private $endereco;

		public function getIdCliente(){
			return $this->idCliente;
		}
		public function setIdCliente($idCliente){
			if(!empty($idCliente)) $this->idCliente=$idCliente;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function getSobrenome(){
			return $this->sobrenome;
		}
		public function setSobrenome($sobrenome){
			$this->sobrenome=$sobrenome;
		}
		public function getDataNascimento(){
			return $this->datanascimento;
		}
		public function setDataNascimento($datanascimento){
			$this->datanascimento=$datanascimento;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function setEndereco($endereco){
			$this->endereco=$endereco;
		}

		#Inserindo cliente.
		public function inserirCliente(){
			$conect = new conexao();
			try{
				#echo "nome : ".$this->getNome()." sobrenome : ".$this->getSobrenome()."datanascimento : ".$this->getDataNascimento()."cpf : ".$this->getCpf()."endereco : ".$this->getEndereco();
				$stmt = $conect->conn->prepare(
				"INSERT INTO cliente(nome,sobrenome,datanascimento,cpf,endereco)
				VALUES(:nome,:sobrenome,:datanascimento,:cpf,:endereco)");
				$stmt->bindValue(":nome",$this->getNome());
				$stmt->bindValue(":sobrenome",$this->getSobrenome());
				$stmt->bindValue(":datanascimento",$this->getDataNascimento());
				$stmt->bindValue(":cpf",$this->getCpf());
				$stmt->bindValue(":endereco",$this->getEndereco());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		#Alterar Cliente.
		public function alterarCliente(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"UPDATE cliente set nome=:nome,sobrenome=:sobrenome,
				datanascimento=:datanascimento,cpf=:cpf,endereco=:endereco where idCliente=:idCliente");
				$stmt->bindValue(":id",$this->getId());
				$stmt->bindValue(":nome",$this->getNome());
				$stmt->bindValue(":telefone",$this->getTelefone());
				$stmt->bindValue(":email",$this->getEmail());
				$stmt->bindValue(":datanascimento",$this->getDataNascimento());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		#Apagar Cliente.
		public function apagarCliente(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"DELETE from cliente where idCliente=:idCliente");
				$stmt->bindValue(":idCliente",$this->getIdCliente());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		#BUscar todas informaçoes da tabela cliente.
		public function buscarTodos(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"select * from cliente order by nome");
				$stmt->execute();
				$r=$stmt->fetchAll();
				$resposta= array();
				foreach($r as $row){
					$temp=array("idCliente"=>$row['idCliente'],
					"nome"=>$row['nome'],
					"sobrenome"=>$row['sobrenome'],
					"datanascimento"=>$row['datanascimento'],
					"cpf"=>$row['cpf'],
					"endereco"=>$row['endereco']);
					array_push($resposta,$temp);
				}
				return $resposta;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		#Buscar informações da tabela por Id do cliente.
		public function buscarId(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"select * from cliente where idCliente=:idCliente");
				$stmt->bindValue(':idCliente',$this->getIdCliente());
				$stmt->execute();
				$row=$stmt->fetch();
				$r=array("idCliente"=>$row['idCliente'],
					"nome"=>$row['nome'],
					"sobrenome"=>$row['sobrenome'],
					"datanascimento"=>$row['datanascimento'],
					"cpf"=>$row['cpf'],
					"endereco"=>$row['endereco']);
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
	}
?>