<html>
	<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../styleadd.css">

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
				<a href="#">Adicionar ADM</a>
				
				</li>
				<li>
				<a href="listaadministradores.php">Voltar a Lista</a>
				</li>
				<li>
				<a href='../../../index.php'>Voltar Para Dashboard</a></a>
				</li>
			
				
			</ul>

		</div>
	</div><hr>
</head>
<body>
	<center>
<h3>Adicionar Novo Administrador</h3>
<form method="post">
Nome:<br> <input type="text" required="" name="nome" placeholder="Digite Nome"><br>
Sobrenome:<br> <input type="text" required="" name="sobrenome" placeholder="Digite Sobrenome"><br>
Senha:<br> <input type="password" required="" name="senha" placeholder="Digite Senha"><br>
Email:<br> <input type="email" required="" name="email" placeholder="Digite Email"><br>
<br>
		<input id="btn" type="submit" value="Adicionar Novo ADM">
</form></center>
<?php
	include('conexao.php');
    include('../../../autenticacao.php');
	@$nome=$_POST['nome'];
	@$sobrenome=$_POST['sobrenome'];
	@$senha=$_POST['senha'];
	@$email=$_POST['email'];
	$senha=md5($senha);
	if( $nome && $sobrenome && $email && $senha){
		$sql="INSERT INTO administradores VALUES(0,'$nome','$sobrenome','$senha','$email')";
		mysqli_query($conexao,$sql);

		header('Location:listaadministradores.php');
	}
?>
</body>
</html>