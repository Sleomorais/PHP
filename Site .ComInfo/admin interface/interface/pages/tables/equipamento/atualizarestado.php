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
				<a href="#">Atualizar Estado</a>
				
				</li>
				<li>
				<a href="listaequipamento.php">Voltar a Lista</a>
				</li>
				<li>
				<a href='../../../index.php'>Voltar Para Dashboard</a></a>
				</li>
			
				
			</ul>

		</div>
	</div><hr>
</head>
<center>
<meta charset="UTF-8">
<?php
    include("conexao.php");
	include('../../../autenticacao.php');
	$id=$_GET['id'];
    $sql="SELECT * FROM equipamento WHERE id='$id'";
	$c=mysqli_query($conexao,$sql);
	$r=mysqli_fetch_assoc($c);
	?>
<h3>Aualizar Estado do Equipamento</h3>
<form method="post">
<?php
echo  "Último Registro: ".$r['requisitos'];
?><br>
Tarefa: <br> <input type="text" required="" name="requisitos" placeholder="Digite a Tarefa"><br><br>
<?php 
echo "Último Registro: ".$r['descricao'];
?><br>
Estado Atual: <br> <input type="text" required="" name="descricao" placeholder="Digite o Estado"><br>

				<br><br>
		<input type="submit" value="Adicionar Novo Equipamento">
</form>
<?php
	
	@$requisitos=$_POST['requisitos'];
	@$descricao=$_POST['descricao'];
	
	if($requisitos && $descricao ){
	
		$sql="UPDATE equipamento SET requisitos='$requisitos', descricao='$descricao' WHERE id='$id'";
	mysqli_query($conexao,$sql);
		header('Location:listaequipamento.php');

	}
	
?>