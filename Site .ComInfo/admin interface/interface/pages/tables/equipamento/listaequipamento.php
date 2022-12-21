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
				
				
			</ul>

		</div>
	</div><hr>


<body><div id="b">
	<center>
	<br><br>
<?php
	include('conexao.php');
	@$id_Cliente=$_GET['id'];
     $sql="SELECT * FROM equipamento WHERE id_Cliente='$id_Cliente'";
    $consultar=mysqli_query($conexao,$sql);
	include('../../../autenticacao.php');
  	//$sql="SELECT * FROM equipamento";	
	$sql ="SELECT e.*, a. `nome` AS administradores FROM `equipamento` AS e
	INNER JOIN `administradores` AS a ON e.`id_Administradores` = a.`id`";
	
	
	$consulta=mysqli_query($conexao,$sql) or die("morri");

	echo "
		<table style='width:97%; border:none;' id='b'>
			<tr>
				<th ><b>ID</th>
				<th ><b>MARCA</th>
				<th ><b>MODELO/COMPONENTES</th>
				<th ><b>TAREFA</th>
				<th ><b>ESTADO</th>
				<th ><b>PREÇO</th>
				<th ><b>NOME DO ADM</th>
				<th ><b>ID DO CLIENTE</th>
				<th colspan=2>AÇÕES</th>
				
			</tr>";
			while($e=mysqli_fetch_assoc($consulta)){
				echo 
				"<tr> <td style='text-align:center;'>".$e['id']."</td>
				<td style='text-align:center;'>".$e['marca']."</td>
				<td style='text-align:center;'>".$e['modelo']."</td>
				<td style='text-align:center;'>".$e['requisitos']."</td>
				<td style='text-align:center;'>".$e['descricao']."</td>
				<td style='text-align:center;'>R$".$e['preco']."</td>
				<td style='text-align:center;'>".$e['administradores']."</td>
				<td style='text-align:center;'>".$e['id_Cliente']."</td>	
				<td class='ed' style='width:50px;'><a href='atualizarestado.php?id=".$e['id']."'><img src='../img/atualizar.png' title='Atualizar Estado' alt='Atualizar'></a></td>
				<td><button id='myBtn' onclick='clica(".$e['id_Cliente'].")' style='border-radius:7px;'>Notificar</button>
				</td>	   
				<td class='ex' style='width:50px;'><a href='excluirequipamento.php?id=".$e['id_Cliente']."'><img id='ex' src='../img/lixofechado.png' title='Excluir''></a>
						   </tr>";
			}
			echo "</table>";
			echo "<script type='text/javascript'>
			function clica(a) {
				var icon='logo2.png';
				var title='.Com Informatica';
				var mensagem='venha ver seu equipamento e acompanhe a etapa de conserto!';
				var link='../../../../../cliente interface/index.php?id='+a;    
			
			document.getElementById('myBtn').addEventListener('click',function(){   
				if(Notification.permission !=='granted'){
				Notification.requestPermission();
			}});
			function notifyMe(icon,title,mensagem,link){
				if(!Notification){
					alert('navegador nao presta');
					return;
				}
				if(Notification.permission !=='granted'){
				Notification.requestPermission();
			}else{
			 var notification=new Notification( title,{
				 icon:icon,
				 body:mensagem
			 });
			 notification.onclick=function(){
			  window.open(link);
			 };
			}
			}
			var icon='logo2.png';
			var title='.Com Informatica';
			var mensagem='venha ver seu equipamento e acompanhe a etapa de conserto!';
			var link='../../../../../cliente interface/index.php?id='+a; 
				notifyMe(icon,title,mensagem,link);
			}
			</script>";
?></center></div></body></html>
<style>

</style>
