<meta charset="UTF-8">
<?php
	include("conexao.php");
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$cpf=$_POST['cpf'];
	$email=$_POST['email'];
	$numusuario=$_POST['numusuario'];
	$senha=$_POST['senha'];
	
	
	$sql="UPDATE cliente SET nome='$nome',sobrenome='$sobrenome',cpf='$cpf',email='$email',numusuario='$numusuario',
	senha='$senha' WHERE id='$id'";
	
	mysqli_query($conexao,$sql);
	header("location:listacliente.php");
?>