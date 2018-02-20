<?php
	if(isset($_POST['email']) && 
		isset($_POST['senha'])){
		$conn =new PDO("mysql:host=localhost;".
			"dbname=dados","root","");
		$stmt=$conn->prepare(
			"select * from Usuario where ".
			"email=:email and senha=:senha");
		$stmt->bindValue(":email",$_POST['email']);
		$stmt->bindValue(":senha",$_POST['senha']);
		$stmt->execute();
		if($stmt->fetchColumn()==1){
			session_start();
			$_SESSION['email']=$_POST['email'];
			header("Location:index.html");
		}else{
			echo "<p>email ou senha invalido!</p>";
			echo "<p><a href='login.html'>".
			"Tente Novamente</a></p>";
		}
	}else{
		echo "<p>Dados invalidos!</p>";
		echo "<p><a href='login.html'>".
			"Tente Novamente</a></p>";
	}
?>