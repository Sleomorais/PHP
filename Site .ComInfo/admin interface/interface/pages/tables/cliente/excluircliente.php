<?php
	include("conexao.php");
	include('../../../autenticacao.php');
	$id=$_GET['id'];

	$sql="DELETE FROM cliente WHERE id='$id'";
	mysqli_query($conexao,$sql);
	$sql="ALTER TABLE cliente AUTO_INCREMENT = 1";
	mysqli_query($conexao,$sql);

	header("location:listacliente.php");
?>