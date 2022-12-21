<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "info";
	
	//Criar a conexao
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conexao){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>