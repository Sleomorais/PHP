<meta charset="UTF-8">
<body>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../styletab.css">
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
				<a href="#">Lista</a>
				
				</li>
				<li>
				<a href="addequipamento.php">Adicionar Equipamento</a>
				</li>
				<li>
				<a href='../../../index.php'>Voltar Para Dashboard</a></a>
				</li>
				<li>
				<form  style="margin-top:5px;" class="navbar-form navbar-left" method="post" action="pesquisa.php">
      <div class="form-group">
        <input style="border:0.5px solid white; border-radius:3px;" type="text" class="form-control" placeholder="Pesquisar Equipamento" name="nome">
      </div></li><li>
	  <button style="float:left; margin-top:5px; margin-left:-57px; border-radius:3px; background-color:rgb(41, 41, 41);
	  border:0.5px solid white; color:rgb(251, 246, 246);"
	   type="submit" class="btn btn-default" value="busca">BUSCAR</button>
</form></li>
				
			</ul>

		</div>
	</div><hr>
<br><br>
<?php
	include('conexao.php');
	include('../../../autenticacao.php');
	//@$busca=$_POST['busca'];
	@$marca=$_POST['marca'];
	@$modelo=$_POST['modelo'];
	if($marca || $modelo ){
		$sql="SELECT * FROM equipamento WHERE marca or modelo LIKE '%$marca%' or '%$modelo%'";
        $busca=mysqli_query($conexao,$sql);
        echo "
		<table id='b'>
			<tr>
			<th>ID</th><th>marca</th><th>Modelo</th><th>componentes</th><th>descrição</th><th>preço R$</th><th>ID ADM</th>
			</tr>";
		while($dados = mysqli_fetch_assoc($busca)) {
			echo 
			"<tr><td>".$dados['id']."</td>
			<td>".$dados['marca']."</td>
			<td>".$dados['modelo']."</td>
			<td>".$dados['requisitos']."</td>
            <td>".$dados['descricao']."</td>
            <td>".$dados['preco']."</td>
			<td>".$dados['id_Administradores']."</td>
			<td>".$dados['id_Cliente']."</td>
			
			<td class='ed'><a href='editarc.php?id=".$dados['id']."'><img src='../img/editar.png' alt='Editar'></a></td>
			<td class='ex'><a href='excluircliente.php?id=".$dados['id']."'><img id='ex' src='../img/lixofechado.png''></a></td>
            </tr>";
            echo "</table>";
			
}}else{
    echo "NENHUM DADO ENCONTRADO";
}?>
</div></body></center>