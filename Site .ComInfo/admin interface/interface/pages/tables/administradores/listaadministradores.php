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
				<a href="addadm.php">Adicionar ADM</a>
				</li>
				<li>
				<a href='../../../index.php'>Voltar Para Dashboard</a></a>
				</li>
				
				
			</ul>

		</div>
	</div><hr>
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
--><!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">.ComInformática</a>
    </div>
    <ul class="nav navbar-nav">
      
	  <li><a href="addadm.php">Adicionar ADM</a></li>
      <li><a href='../../../index.php'>Voltar Para Dashboard</a></li>
    </ul>
    <form class="navbar-form navbar-left" method="post" action="pesquisa.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Pesquisar ADM" name="nome">
      </div>
      <button type="submit" class="btn btn-default" value="busca">BUSCAR</button>
</form>
  </div>
</nav>-->
	<center>
<?php
	include('conexao.php');
	include('../../../autenticacao.php');
	$sql="SELECT * FROM administradores";	
	$consulta=mysqli_query($conexao,$sql);

	echo "<br><br><br>
		<table  id='b'>
			<tr>
				<th>ID</th><th>Nome</th><th>Sobrenome</th><th>Email</th><th colspan=2>Ações</th>
			</tr>";
			while($e = mysqli_fetch_assoc($consulta)){
				echo "<tr><td id='va'>".$e['id']."</td>
				<td id='va'>".$e['nome']."</td>
				<td id='va'>".$e['sobrenome']."</td>
				<td id='qt'>".$e['email']."</td>
						  <td class='ed'><a href='editara.php?id=".$e['id']."' ><img src='../img/editar.png' alt='Editar'></a></td>
						  <td class='ex'><a href='excluiradm.php?id=".$e['id']."' '><img id='ex' src='../img/lixofechado.png''></a>
						  </tr>";
			}
			echo "</table>";
			
?></center></div></body>	
