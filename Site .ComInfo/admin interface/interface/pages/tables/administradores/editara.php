<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../styleeditar.css">
<title>Editar Administradores</title>
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
				<a href="#">Editar Administrador</a>
				
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
<?php
	include("conexao.php");
	include('../../../autenticacao.php');
	$id=$_GET['id'];
	$sql="SELECT * FROM administradores WHERE id='$id'";
	$c=mysqli_query($conexao,$sql);
	$r=mysqli_fetch_assoc($c);
?>
<center>
<form method="post" action="editaradm.php">
	<input type="hidden" name="id" value="<?=$r['id']?>">
	Nome:<br><input type="text" name="nome" value="<?=$r['nome']?>"><br>
	Sobrenome:<br><input type="text" name="sobrenome" value="<?=$r['sobrenome']?>"><br>
	Senha:<br><input type="password" name="senha" value="<?=$r['senha']?>"><br>
	Email:<br><input type="email" name="email" value="<?=$r['email']?>"><br><br>
	<input type="submit" value="ATUALIZAR">
</form>
</center>