<meta charset="UTF-8">
<?php
	$host="127.0.0.1:3306";
	$user="root";
	$senha="";
	$conexao=mysqli_connect($host,$user,$senha);
	mysqli_select_db($conexao, 'info');
?>