<?php
	include("conexao.php");
	include('../../../autenticacao.php');
	$id=$_GET['id'];

	$sql="DELETE FROM administradores WHERE id='$id'";
	mysqli_query($conexao,$sql);
	$sql="ALTER TABLE administradores AUTO_INCREMENT = 1";
	mysqli_query($conexao,$sql);

	header("location:listaadministradores.php");
?>