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
				<a href='../../../index.php'>Voltar Para Dashboard</a>a>
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
<center>
<br><br>
<?php
	include('conexao.php');
	include('../../../autenticacao.php');
	//@$busca=$_POST['busca'];
	@$id_Cliente=$_POST['id_'];
	@$id=$_POST['id'];
	if($id_Cliente || $id ){
    $b ="SELECT t.*, c. `nome` AS cliente FROM `timeline` AS t
	INNER JOIN `cliente` AS c ON t.`id_Cliente` = c.`id`";
    $sql="SELECT * FROM timeline WHERE id LIKE '%$id_Cliente%' or '%$id%'";
        $consulta=mysqli_query($conexao,$sql,$b);
        echo "
        <table border id='b'>
        <tr>
          <th>ID</th><th>Data Chegada</th><th>Data Entrega</th><th>Equipamento</th><th>Etapas</th><th>Nome do Cliente</th><th colspan=2>A</th>
        </tr>";
        while($e=mysqli_fetch_assoc($consulta)){
          echo "<tr><td id='va'>".$e['id']."</td>
          <td id='va'>".$e['datadechegada']."</td>
          <td id='va'>".$e['datadeentrega']."</td>
          <td id='va'>".$e['equipamento']."</td>
                <td id='qt'>".$e['quantidadedeetapas']."</td>
                <td id='va'>".$e['cliente']."</td>
                <td class='ed'><a href='editare.php?id=".$e['id']."'><img src='../img/editar.png' alt='Editar'></a></td>
                <td class='ex'><a href='excluirtimeline.php?id=".$e['id']."'><img id='ex' src='../img/lixofechado.png''></a>
                </tr>";
        }}else{
    echo "NENHUM DADO ENCONTRADO";
}?>
</div></body></center>