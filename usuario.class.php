<?php
	require_once 'conexao.class.php';

	class usuario{
		private $iduser;
		private $nome;
		private $sobrenome;
		private $email;
		private $datanascimento;
		private $senha;
		
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			if(!empty($id)) $this->id=$id;
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
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function getData(){
			return $this->datanascimento;
		}
		public function setData($datanascimento){
			$this->datanascimento=$datanascimento;
		}

		public function inserir(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"INSERT INTO Usuario(nome,sobrenome,email,datanascimento,senha)
				VALUES(:nome,:sobrenome,:email,:datanascimento,:senha)");
				$stmt->bindValue(":nome",$this->getNome());
				$stmt->bindValue(":sobrenome",$this->getSobrenome());
				$stmt->bindValue(":email",$this->getEmail());
				$stmt->bindValue(":datanascimento",$this->getData());
				$stmt->bindValue(":senha",$this->getSenha());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
	
		public function buscarId(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"select * from Usuario where iduser=:id");
				$stmt->bindValue(':id',$this->getId());
				$stmt->execute();
				$row=$stmt->fetch();
				$r=array("id"=>$row['id'],
					"nome"=>$row['nome'],
					"sobrenome"=>$row['sobrenome'],
					"email"=>$row['email'],
					"datanascimento"=>$row['datanascimento'],
					"senha"=>$row['senha'],);
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
	}
?>