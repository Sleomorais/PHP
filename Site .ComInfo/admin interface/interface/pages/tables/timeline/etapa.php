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
				<a href="#">Adicionar Timeline</a>
				
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
	
<?php
include('conexao.php');
$id=$_GET['id'];
$sql="SELECT * FROM timeline WHERE id='$id'";
	$c=mysqli_query($conexao,$sql);
    $r=mysqli_fetch_assoc($c);
    ?><div id="a" style=" background-image:url('assets/images/about/folha1.jpg');
    background-size:100%; background-position:center;  border: 3px double black; margin:0px;
     height:180px; width:200px;"><?php
   ECHO "<samp style='color:gray; margin:0px; '>ID:".$r['id']."</samp><BR>";
   ECHO "<samp style='color:gray; margin:0px;'> DATA DE CHEGADA: ".$r['datadechegada']."</samp><BR>";
    ECHO "<samp style='color:gray; margin:0px;'> DATA DE ENTREGA: ".$r['datadeentrega']."</samp><BR>";
   ECHO "<samp style='color:gray; margin:0px;'> EQUIPAMENTO: ". $r['equipamento']."</samp><BR>";
   ECHO "<samp style='color:gray; margin:0px;'> ID CLIENTE: ". $r['id_Cliente']."</samp><BR>";
  ECHO "<samp style='color:gray; margin:0px;'> ETAPAS: ". $etapa =  $r['quantidadedeetapas']."</samp><BR>";
  ?> 
</div><center><?php
  if($etapa==1){
    ?> <form method="post" action="#">
       Etapa 1:<br>
    
    <textarea cols="30" rows="5" name="etapa_feita">
   </textarea><br>
 <input type="submit" value="Enviar" >
 </form><br><br>
 <?php } ?>
 <?php
  if($etapa==2){
    ?> <form method="post" action="#">
       Etapa 1:
    
    <textarea cols="30" rows="5" name="etapa_feita">
   </textarea>
   Etapa 2:
   <textarea cols="30" rows="5" name="etapa_feita">
   </textarea><br>
 <input type="submit" value="Enviar" >
 </form><br><br>
 <?php } ?>
  <?php
  if($etapa==3){
    ?> <form method="post" action="#">
       Etapa 1:
    
    <textarea cols="30" rows="5" name="etapa_feita">
   </textarea>
   Etapa 2:
   <textarea cols="30" rows="5" name="etapa_feita">
   </textarea>
   Etapa 3:
   <textarea cols="30" rows="5" name="etapa_feita">
   </textarea><br>
   <br>
 <input type="submit" value="Enviar" >
 </form><br><br>
 <?php } ?>
  <?php
  if($etapa==4){
    ?> <form method="post" action="#">
      Etapa 1:
    
    <textarea cols="30" rows="5" name="etapa_feita">
   </textarea>
   Etapa 2:
   <textarea cols="30" rows="5" name="etapa_feita">
   </textarea>
   Etapa 3:
   <textarea cols="30" rows="5" name="etapa_feita">
   </textarea><br>
   Etapa 4:
   <textarea cols="30" rows="5" name="etapa_feita">
   </textarea><br>
 <input type="submit" value="Enviar" >
 </form><br><br>
 <?php } ?>
<?php
if($etapa==5){
   ?> <form method="post" action="#">
     Etapa 1:
    
     <textarea cols="30" rows="5" name="etapa_feita">
    </textarea>
    Etapa 2:
    <textarea cols="30" rows="5" name="etapa_feita">
    </textarea>
    Etapa 3:
    <textarea cols="30" rows="5" name="etapa_feita">
    </textarea><br>
    Etapa 4:
    <textarea cols="30" rows="5" name="etapa_feita">
    </textarea>
    Etapa 5:
    <textarea cols="30" rows="5" name="etapa_feita">
    </textarea><br>
	<input type="submit" value="Enviar" >
</form><br><br>
<?php } ?></center>
<style>
form textarea{
    width:200px;
    height:100px;
    margin:5px;
    border-radius:4px;
    border:2px solid black;
}
</style>
