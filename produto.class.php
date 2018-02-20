<?php
	require_once 'conexao.class.php';

	class produto{
		private $id;
		private $nome;
		private $serie;
		private $tipo;
		private $qtda;
		private $descricao;
		
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
		public function getSerie(){
			return $this->serie;
		}
		public function setSerie($serie){
			$this->serie=$serie;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function getQtda(){
			return $this->qtda;
		}
		public function setQtda($qtda){
			$this->qtda=$qtda;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}

		public function inserir(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"INSERT INTO produto(nome,serie,tipo,qtda,descricao)
				VALUES(:nome,:serie,:tipo,:qtda,:descricao)");
				$stmt->bindValue(":nome",$this->getNome());
				$stmt->bindValue(":serie",$this->getSerie());
				$stmt->bindValue(":tipo",$this->getTipo());
				$stmt->bindValue(":qtda",$this->getQtda());
				$stmt->bindValue(":descricao",$this->getDescricao());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		public function alterar(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"UPDATE produto set nome=:nome,serie=:serie,
				tipo=:tipo,qtda=:qtda,descricao=:descricao where id=:id");
				$stmt->bindValue(":id",$this->getId());
				$stmt->bindValue(":nome",$this->getNome());
				$stmt->bindValue(":serie",$this->getSerie());
				$stmt->bindValue(":tipo",$this->getTipo());
				$stmt->bindValue(":qtda",$this->getQtda());
				$stmt->bindValue(":descricao",$this->getDescricao());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		public function apagar(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"DELETE from produto where id=:id");
				$stmt->bindValue(":id",$this->getId());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		public function buscarTodos(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"select * from produto order by nome");
				$stmt->execute();
				$r=$stmt->fetchAll();
				$resposta= array();
				foreach($r as $row){
					$temp=array("id"=>$row['id'],
					"nome"=>$row['nome'],
					"serie"=>$row['serie'],
					"tipo"=>$row['tipo'],
					"qtda"=>$row['qtda'],
					"descricao"=>$row['descricao']);
					array_push($resposta,$temp);
				}
				return $resposta;
			}catch(PDOException $e){
				echo $e->getMessage();
		}
	}
	
		public function buscarId(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"select * from produto where id=:id");
				$stmt->bindValue(':id',$this->getId());
				$stmt->execute();
				$row=$stmt->fetch();
				$r=array("id"=>$row['id'],
					"nome"=>$row['nome'],
					"serie"=>$row['serie'],
					"tipo"=>$row['tipo'],
					"qtda"=>$row['qtda'],
					"descricao"=>$row['descricao'],);
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
	}
?>