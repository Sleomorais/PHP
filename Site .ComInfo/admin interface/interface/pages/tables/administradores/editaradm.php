<meta charset="UTF-8">
<?php
	include("conexao.php");
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$senha=$_POST['senha'];
	$email=$_POST['email'];
	
	$sql="UPDATE administradores SET nome='$nome',sobrenome='$sobrenome',
	senha='$senha', email='$email' WHERE id='$id'";
	mysqli_query($conexao,$sql);
	header("location:listaadministradores.php");
?>