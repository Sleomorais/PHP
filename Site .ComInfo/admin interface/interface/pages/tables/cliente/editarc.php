<html>
<head>
<link rel="stylesheet" type="text/css" href="../styleeditar.css">
<title>Editar Clientes</title>
</head>
<body>
<?php
	include("conexao.php");
	include('../../../autenticacao.php');
	$id=$_GET['id'];
	$sql="SELECT * FROM cliente WHERE id='$id'";
	$c=mysqli_query($conexao,$sql);
	$r=mysqli_fetch_assoc($c);
?>
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
				<a href="#">Editar Cliente</a>
				
				</li>
				<li>
				<a href="listacliente.php">Voltar a Lista</a>
				</li>
				<li>
				<a href='../../../index.php'>Voltar Para Dashboard</a></a>
				</li>
			
				
			</ul>

		</div>
	</div><hr>
<center>
<form method="post" action="editarcliente.php">
	<input type="hidden" name="id" value="<?=$r['id']?>">
	NOME:<BR><input type="text" required="" name="nome" value="<?=$r['nome']?>"><BR>
	SOBRENOME:<BR><input type="text" required="" name="sobrenome" value="<?=$r['sobrenome']?>"><br>
	CPF:<BR><input type="text" required="" name="cpf" value="<?=$r['cpf']?>"><BR>
	EMAIL:<BR><input type="email" required="" name="email" value="<?=$r['email']?>"><br>
	<input type="hidden" name="numusuario" value="<?=$r['numusuario']?>">
	SENHA:<BR><input required="" type="password" name="senha" value="<?=$r['senha']?>"><br>
	<BR><input type="submit" value="ATUALIZAR">
</form>
</body>
</center>
</html>