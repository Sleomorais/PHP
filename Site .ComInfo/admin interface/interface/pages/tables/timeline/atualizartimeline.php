<meta charset="UTF-8">
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
				<a href="#">Atualizar Timeline</a>
				
				</li>
				<li>
				<a href="listatimeline.php">Voltar a Lista</a>
				</li>
				<li>
				<a href='../../../index.php'>Voltar Para Dashboard</a></a>
				</li>
			
				
			</ul>

		</div>
	</div><hr>
	<center>
<h3>Atualizar Timeline</h3>
<form method="post">
O que foi feito nessa etapa?:<br><br><textarea name="oqff" rows="6" cols="40" style=
"border-radius:4px; box-shadow: 0 0 3px 3px black;"></textarea><br><br>
Equipamento:<br><select id="select" required="" name="equipamento">
					<option>Selecione o Equipamento</option>
					<?php
					require_once "../equipamento/conexao.php";
						$result_administradores = "SELECT * FROM equipamento";
						$resultado_administradores = mysqli_query($conexao, $result_administradores);
						while($row_administradores = mysqli_fetch_assoc($resultado_administradores)){
							 ?>
							<option value="<?php echo $row_administradores['id']; ?>"><?php echo 
							$row_administradores['descricao']; ?></option> <?php
						}
					?>
				</select><br>
Quantidade de Etapas:
<br><select id="select" required="" name="quantidadedeetapas">
					<option>Selecione o Total de Etapas</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><br>
	Cliente:<br><select id="select" required="" name="id_Cliente">
					<option>Selecione o Cliente</option>
					<?php
					require_once "../cliente/conexao.php";
						$result_administradores = "SELECT * FROM cliente";
						$resultado_administradores = mysqli_query($conexao, $result_administradores);
						while($row_administradores = mysqli_fetch_assoc($resultado_administradores)){
							 ?>
							<option value="<?php echo $row_administradores['id']; ?>"><?php echo 
							$row_administradores['nome']; ?></option> <?php
						}
					?>
				</select><br><br><br>
		<input type="submit" value="Atualizar Timeline">
</form>
<?php
	include('conexao.php');
    include('../../../autenticacao.php');
	@$datadechegada=$_POST['datadechegada'];
	@$datadeentrega=$_POST['datadeentrega'];
	@$equipamento=$_POST['equipamento'];
	@$quantidadedeetapas=$_POST['quantidadedeetapas'];
	@$id_Cliente=$_POST['id_Cliente'];
	if( $datadechegada && $datadeentrega && $equipamento && $quantidadedeetapas && $id_Cliente){
		$sql="UPDATE timeline SET datadechegada='$datadechegada',datadeentrega='$datadeentrega',
	equipamento='$equipamento', quantidadedeetapas='$quantidadedeetapas', id_Cliente='$id_Cliente' WHERE id='$id'";
	mysqli_query($conexao,$sql);

		header('Location:listatimeline.php');
	}
?>