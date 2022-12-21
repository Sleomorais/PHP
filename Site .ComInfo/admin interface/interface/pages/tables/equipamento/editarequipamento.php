<meta charset="UTF-8">
<?php
	include("conexao.php");
	$id=$_POST['id'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$requisitos=$_POST['requisitos'];
	$descricao=$_POST['descricao'];
	$preco=$_POST['preco'];
	$id_Administradores=$_POST['administradores'];
	$sql="UPDATE equipamento SET marca='$marca',modelo='$modelo',
	requisitos='$requisitos', descricao='$descricao',preco='$preco', administradores='$id_Administradores' WHERE id='$id'";
	mysqli_query($conexao,$sql);
	header("location:listaequipamento.php");
?>