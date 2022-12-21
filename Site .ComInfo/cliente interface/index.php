<?php
include('conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    

    <title>.ComInformática - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      
    <![endif]-->
    <!-- BARRA DE NAVEGAÇÃO-->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- SAIR DA BARRA DE NAVEGAÇÃO-->
  </head>
  <body style="margin:0; background-image:url('mack.jpg'); background-size:100%;">
    <!-- BARRA DE NAVEGAÇÃO-->
  <nav class="navbar navbar-inverse" style="margin-top:-45px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-family:'Times New Roman'; font-size:25px;text-shadow: 2px 2px #232a28">.ComInformática</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Login</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="../admin interface/index.php">Entrar Como <span class="caret"></span></a>
     <ul class="dropdown-menu">
          <li><a href="../admin interface/index.php">Adm</a></li>
          
        </ul>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="../Abertura/aber.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>
  <!-- SAIR DA BARRA DE NAVEGAÇÃO-->
  

    <div class="container">
     <!--SEGURANÇA-->
   <?php
require('conexao.php');
session_start();
// Se o formulário for enviado, insira valores no banco de dados.
if (isset($_POST['numusuario'])){
        // Remover backslashes ... Sql Injection
  $numusuario = stripslashes($_REQUEST['numusuario']);
        //Escapa caracteres especiais em uma string
  $numusuario = mysqli_real_escape_string($conexao,$numusuario);
  $password = stripslashes($_REQUEST['senha']);
  $password = mysqli_real_escape_string($conexao,$password);
  
	//Verificar se usuário existe no banco de dados ou não
        $query = "SELECT * FROM `cliente` WHERE numusuario='$numusuario'
and senha='".md5($password)."'";
	$result = mysqli_query($conexao,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['numusuario'] = $numusuario;
            // Redireciona o usuario para dashboard
      $user=mysqli_fetch_assoc($result);
	    header("Location:Pagina do cliente/index.php?id=".$user['id']);
         }else{
          header("Location:index.php");
	}
    }else{
?>
    <!--Sair Segurança-->

      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading" style="-webkit-text-stroke: 1px black;
   color: white;
   text-shadow:
       3px 3px 0 #000,

     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000; font-size:35px;">Login Cliente</h2>
        <label for="inputEmail" class="sr-only">Numero de Usuario</label>
        <input type="number" name="numusuario" id="inputEmail" class="form-control" placeholder="N° Usuário" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit" 
        style="background-color:yellow;
        color:#020202; border-color:black; box-shadow: 4px 3px black;">Acessar</button>
      </form>
    <p class="text-center text-danger" style="font-size:20px;
     color:#FE0000; text-shadow:2px black;">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
      <?php }?>
		</p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <div class="container body-content">
    <footer class="fixarRodape">
        
        <p>&copy; @Squad.Software</p>
    </footer>
</div>
  </body>
</html>
<style>
  .fixarRodape {
    margin-left:-7%;
        bottom: 0;
        position: fixed;
        width: 90%;
        text-align: center;
    }
</style>


