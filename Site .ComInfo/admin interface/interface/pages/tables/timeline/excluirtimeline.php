<meta charset="UTF-8">
<?php
	include("conexao.php");
	include('../../../autenticacao.php');
	$id=$_GET['id'];

	$sql="DELETE FROM timeline WHERE id='$id'";
	mysqli_query($conexao,$sql);
	$sql="ALTER TABLE timeline AUTO_INCREMENT = 1";
	mysqli_query($conexao,$sql);

	header("location:listatimeline.php");
?>