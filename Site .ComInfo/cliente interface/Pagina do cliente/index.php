<?php 
include('conexao.php');
include('../autenticacao.php');?>
<html>

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Página do Cliente</title>

        
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!--flat icon css-->
		<link rel="stylesheet" href="assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<!-- Timeline CSS-->
		<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
      <link rel="stylesheet" href="assets/css/styletime.css">
        


    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav style="background-color:#3c8dbc;"class="navbar navbar-default bootsnav navbar-fixed dark no-background" >

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="#" style="text-shadow:2px 2px black;">.ComInformática</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                <li class=" smooth-menu active"></li>
			                    <li class=" smooth-menu"><a href="#timeline">Timeline</a></li>
			                    <li id="sair"><a href="sair.php">Sair</a></li>
			                    
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->
	
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>olá <span>
							<?php 
							@$id=$_POST['id'];
							$query="SELECT * FROM cliente WHERE numusuario='$numusuario'";
							$resultado=mysqli_query($conexao,$query);
							while($a = mysqli_fetch_assoc($resultado)){
								echo $a['nome'];
								
							}?>
								,</span> Bem Vindo <br> A Página<br> do cliente<span>.</span>   </h2>
							<p>.Com Informática</p><br>
							<h3 >Seu Número de Usuário é:<br>
							<p style=" tittle:'copiaaa'; color:black; background-color: lightblue; border: 5px double black; width:150px; margin-left:45%; border-radius: 18px;
							box-shadow: 5px 4px 7px 2px gray;">
							<?php 
							@$id=$_POST['id'];
							$query="SELECT * FROM cliente WHERE numusuario='$numusuario'";
							$resultado=mysqli_query($conexao,$query);
							while($a = mysqli_fetch_assoc($resultado)){
								echo $a['numusuario'];
								
							}?></p></h3>
							<!--<a href="assets/download/browney.txt" download>download resume</a>-->
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->
		
		<!--Timeline start -->
		<div class="container" id="timeline">
			<div class="page-header">
				<h1 id="timeline" style="text-shadow:3px 3px black"><center>TIMELINE DO EQUIPAMENTO</center></h1>
			</div>
			<ul class="timeline">
				<li>
				<?php 
				include('conexao.php');
			    @$id_Cliente=$_GET['id'];
				$sql="SELECT * FROM equipamento WHERE id_Cliente='$id_Cliente'";
				$consulta=mysqli_query($conexao,$sql);
				$rows = mysqli_num_rows($consulta);
                if($rows>=1){
	    
         
				while($e=mysqli_fetch_assoc($consulta)){
				echo'
				  <div class="timeline-badge primary"><i class="fas fa-laptop-medical" style="color:rgb(0, 0, 0);
				  margin-top:8px;"></i></div>
				  <div class="timeline-panel">

					<div class="timeline-heading">
					  <h4 class="timeline-title"><b>marca do equipamento:</b> '.$e['marca'].'</h4>
					  <p><small class="text-muted"  style="color:rgb(0, 0, 0)">
					  <i class="fas fa-laptop-medical" ></i> <?php ?></small></p>
					</div>
					<div class="timeline-body">
					  <p><b>modelo:</b> '.$e['modelo'].'</p>
					  <p><b>está sendo feito:</b> '.$e['requisitos'].'</p>
					  <p><b>Estado:</b> '.$e['descricao'].'</p>

					  <cite style="color:yellow;">by .Com Informatica</cite>


					</div>
					</div>
					
					
					<br><br><br><br><br><br><br><br><br><br><br><br><br>
					';}}
		
					?>
					<style>
						
					
						</style>
					<script>
						
					
					</script>

					<br><br>
					
			
		  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		  
		  
		<!--Timeline end -->
		
		<section id="skills" class="skills" >
				<div class="skill-content" >
					<div class="section-heading text-center">
						<h2  style="text-shadow:2px 3px black;">.Com Informática</h2>
					</div>
					<div class="container">
						<div class="row">
                           <center>
		
		<nav>
  <ul class="menu">
		<li><a >.Com Informática</a>
		       <ul>
                      <li><a  style="font-family: Franklin Gothic Heavy; font-size:15px;">A .Com Informática é uma empresa que trabalha com 
						  Assistência Técnica/Ordem de Serviço e é gerenciada por Fernando Peixoto,
						  a empresa busca atender as necessidades de seus clientes através de um
						  excelente serviço e uma ótima qualidade no seu atendimento.

					  </a></li>                    
				</ul>
				</li>
		<li><a >Sobre Pagina do Cliente</a>
		<ul>
					  <li><a  style="font-family: Franklin Gothic Heavy; font-size:15px;" >
					      A pagina do cliente é onde vôce pode saber um 
						pouco mais sobre seu equipamento, através de um sistema de
						um sistema que utiliza uma timeline para que o cliente possa saber
					   o que está acontecendo com seu equipamento de acordo com a sua etapa, experiencia
					   incrivel, provando que a .ComInformática sabe que o seu cliente quer.
					</a></li>                    
				</ul>
				</li>
</nav></center>





						</div><!-- /.row -->
					</div>	<!-- /.container -->		
				</div><!-- /.skill-content-->

		</section><!--/.skills-->
		<!--skills end -->
		<style>
 
	.menu{
	list-style:none; 
	border:1px solid black; 
	float:left; 
	font-family:Arial Black;
	margin-left:400px;
	border-radius:10px;
	background-color:lightseagreen;
	cursor:pointer;
	}
	.menu li{
	position:relative; 
	float:left; 
	border-right:1px solid #c0c0c0; 
	
	}
	
	.menu li a{
		color:#333;
		text-decoration:none;
		padding:5px 10px; 
		display:block;
		
	}
	 
	.menu li a:hover{
	background:lightseagreen; 
	color:white; 
	-moz-box-shadow:0 3px 10px 0 #CCC; 
	-webkit-box-shadow:0 3px 10px 0 #ccc; 
	text-shadow:0px 0px 5px #fff; 
	}
	.menu li  ul{
	position:absolute; 
	top:25px; 
	left:0;
	background-color:#fff; 
	display:none;
	
	}   
	.menu li:hover ul, .menu li.over ul{
		display:block;
	}
	.menu li ul li{
	border:1px solid #c0c0c0; 
	display:block; 
	width:300px;
	}
	</style>
		

		<!--footer-copyright start-->
		<br><br><br><br>
		
		<br><br>
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p style="text-shadow:2px 2px black;">
						&copy;developed by <a href="#" style="text-decoration:none;
						color:white; text-shadow:2px 2px black;">SQUAD SOFTWARE</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<!--BOTAO QUE SOBE-->
			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="assets/js/progressbar.js"></script>

		<!-- appear js -->
		<script src="assets/js/jquery.appear.js"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>