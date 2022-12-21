<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../styleeditar.css">
<title>Editar Equipamentos</title>
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
				<a href="#">Editar Equipamento</a>
				
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
<?php
	include("conexao.php");
	include('../../../autenticacao.php');
	$id=$_GET['id'];
	$sql="SELECT * FROM equipamento WHERE id='$id'";
	$c=mysqli_query($conexao,$sql);
	$r=mysqli_fetch_assoc($c);
?>
<center>
<form method="post" action="editarequipamento.php">
	<input type="hidden" name="id" value="<?=$r['id']?>">
	Marca:<br><input type="text" name="marca" value="<?=$r['marca']?>"><br>
	Modelo:<br><input type="text" name="modelo" value="<?=$r['modelo']?>"><br>
	Requisitos:<br><input type="text" name="requisitos" value="<?=$r['requisitos']?>"><br>
	Descrição:<br><input type="text" name="descricao" value="<?=$r['descricao']?>"><br>
	Preço:<br><input type="float" name="preco" value="<?=$r['preco']?>"><br>
	Id do Administrador:<br><select id="select" required="" name="adiministradores">
					<option>Selecione o Administrador</option>
					<?php
					require_once "../administradores/conexao.php";
						$result_administradores = "SELECT * FROM administradores";
						$resultado_administradores = mysqli_query($conexao, $result_administradores);
						while($row_administradores = mysqli_fetch_assoc($resultado_administradores)){
							 ?>
							<option value="<?php echo $row_administradores['id']; ?>"><?php echo 
							$row_administradores['nome']; ?></option> <?php
						}
					?>
				</select><br>
	<br><input type="submit" value="ATUALIZAR">
</form>
</center>