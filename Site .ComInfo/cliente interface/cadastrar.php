<html>
	<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/styleadd.css">

    <style>
        
#navigation {
	float:left;
	display: inline-block;
	height: 60px;
	list-style: none;
	margin-top: -18px;
	margin-left: -15px;
	margin-right: -19px;
	margin-bottom: -15px;
	padding: 0;
  width: 107%; 
  background-color:black;
  border-radius:9px;

/** Needed for IE7 **/
}
#navigation li {
	float: left;
	margin: 0 30px;
}
#navigation li:first-child {
	margin-left: 0;
}
#navigation li a {
	color: #efefef;
	line-height: 30px;
	padding: 0;
    text-decoration: none;
    
}
#navigation li a:hover, #navigation li.selected a {
	color: #fceb00;
}
hr {
	width: 107%;
	float:left;
	margin-top:15px;
	margin-left: -15px;
	margin-right: -19px;
	margin-bottom: -15px;
      color: #fceb00;
      background-color: #fceb00;
	  height: 1px;
	  margin-bottom:35px;
    }
    </style>
    <head></head>
    <body>
    <div id="header">
		
			<ul id="navigation">
                <br>
				<li class="selected">
				<a href="#">Cadastrar Cliente</a>
				
				</li>
				<li>
				<a href="../Abertura/aber.php">Voltar a Para Login</a>
				</li>
				
			
				
			</ul>

		</div>
	</div><hr>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<center>
<meta charset="UTF-8">
<h3>Cadastro</h3>
<form method="post">
Nome:<br> <input type="text" required="" name="nome" placeholder="Digite Nome"><br>
Sobrenome:<br> <input type="text" required="" name="sobrenome" placeholder="Digite Sobrenome"><br>
CPF:<br> <input type="text" required="" id="cpf" name="cpf" placeholder="Digite CPF"  minlength="13" maxlength="13"><br>
<script type="text/javascript">
    $("#cpf").mask("999.999.99-99");
    </script>
Email:<br> <input type="email" required="" name="email" placeholder="Digite Email"><br>
<!--N° de Usuário: <input type="number" name="numusuario">-->
Senha:<br> <input type="password" required="" name="senha" placeholder="Senha"><br>
<br>
		<input  type="submit" value="cadastrar">
</form></center>
<?php
	include('conexao.php');
	@$nome=$_POST['nome'];
	@$sobrenome=$_POST['sobrenome'];
	@$cpf=$_POST['cpf'];
	@$email=$_POST['email'];
	//@$numusuario=$_POST['numusuario'];
	@$senha=$_POST['senha'];
	$senha=md5($senha);
	$numusuario;
	if($nome && $sobrenome && $cpf && $email && $senha){
		$numusuario = rand(10000000, 99999999);
        $sql="INSERT INTO cliente VALUES(0,'$nome','$sobrenome','$cpf','$email','$numusuario','$senha')";
		mysqli_query($conexao,$sql);
		header('Location:Pagina do cliente/index.php');}		
?>