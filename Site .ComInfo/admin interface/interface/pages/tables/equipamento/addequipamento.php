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
<h3>Adicionar Equipamento</h3>
<form method="post">
Marca: <br> <input type="text" required="" name="marca" placeholder="Digite a Marca"><br>
Modelo/Componentes: <br> <input type="text" required="" name="modelo" placeholder="Digite o Modelo"><br>
Tarefa Inicial <br> <input type="text" required="" name="requisitos" placeholder="Digite a Tarefa"><br>
Estado Inicial: <br> <input type="text" required="" name="descricao" placeholder="Digite a Estado"><br>
Preço: <br> <input type="float" name="preco" required="" placeholder="Digite o Preço"><br>
Id do Administrador:<br><select id="select" required="" name="id_Adiministradores">
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
				Id do cliente:<br><select id="select" required="" name="id_Cliente">
					<option>Selecione o cliente</option>
					<?php
					require_once "../cliente/conexao.php";
						$result_cliente = "SELECT * FROM cliente";
						$resultado_cliente  = mysqli_query($conexao, $result_cliente);
						while($row_cliente  = mysqli_fetch_assoc($resultado_cliente )){
							 ?>
							<option value="<?php echo $row_cliente['id']; ?>"><?php echo 
							$row_cliente ['nome']; ?></option> <?php
						}
					?>
				</select>
				<br><br>
		<input type="submit" value="Adicionar Novo Equipamento">
</form>
<?php
	include('conexao.php');
	include('../../../autenticacao.php');
	@$marca=$_POST['marca'];
	@$modelo=$_POST['modelo'];
	@$requisitos=$_POST['requisitos'];
	@$descricao=$_POST['descricao'];
	@$preco=$_POST['preco'];
	@$id_Adiministradores=$_POST['id_Adiministradores'];
	@$id_Cliente=$_POST['id_Cliente'];
	$erro="ADM NAO EXISTE";
	if( $marca && $modelo && $requisitos && $descricao && $preco && 
	$id_Adiministradores && $id_Cliente){
	
		$sql="INSERT INTO equipamento VALUES(0,'$marca','$modelo','$requisitos',
		'$descricao','$preco','$id_Adiministradores','$id_Cliente')";
		mysqli_query($conexao,$sql);
		header('Location:listaequipamento.php');

	}
	
?>