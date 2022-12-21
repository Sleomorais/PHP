<meta charset="UTF-8">
<?php
	include('conexao.php');
	include('../../../autenticacao.php');
	$id=$_GET['id'];

	$sql="DELETE FROM equipamento WHERE id='$id'";
	mysqli_query($conexao,$sql);
	$sql="ALTER TABLE equipamento AUTO_INCREMENT = 1";
	mysqli_query($conexao,$sql);

	header("location:listaequipamento.php");
?>