<meta charset="UTF-8">
<?php
	include("conexao.php");
	$id=$_POST['id'];
	$datadechegada=$_POST['datadechegada'];
	$datadeentrega=$_POST['datadeentrega'];
	$equipamento=$_POST['equipamento'];
	$quantidadedeetapas=$_POST['quantidadedeetapas'];
	
	$sql="UPDATE timeline SET datadechegada='$datadechegada',datadeentrega='$datadeentrega',
	equipamento='$equipamento', quantidadedeetapas='$quantidadedeetapas' WHERE id=$id";
	echo $sql;
	mysqli_query($conexao,$sql);
	header("location:listatimeline.php");
?>