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
				<a href="addtimeline.php">Adicionar Timeline</a>
				</li>
				<li>
				<a href='../../../index.php'>Voltar Para Dashboard</a>
				</li>
			
				
			</ul>

		</div>
	</div><hr>
	<center>
<?php
	include('conexao.php');
	include('../../../autenticacao.php');
	$sql ="SELECT t.*, c.`nome` AS cliente, e.`descricao` AS equipamento FROM `timeline` AS t
	INNER JOIN `cliente` AS c ON t.`id_Cliente` = c.`id` INNER JOIN `equipamento` AS e ON t.`equipamento` = e.`id`";
	$consulta=mysqli_query($conexao,$sql);

	echo "
		<table id='b'>
			<tr>
				<th>ID</th><th>Data Chegada</th><th>Data Entrega</th><th>Equipamento</th><th>Etapas</th><th>Nome do Cliente</th>
				<th colspan=3 border=1>Ações</th>
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
			}
			echo "</table>";
			
?></center></div></body>	
