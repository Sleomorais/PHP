<!doctype html>
<html class="no-js" lang="pt-br">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Timeline Cliente</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
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
      <link rel="stylesheet" href="assets/timeline/css/style2.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.html">.ComInformática</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                <li class=" smooth-menu active"></li>
			                    <li class=" smooth-menu"><a href="#timeline">Timeline</a></li>
			                    <li class="smooth-menu"><a href="../sair.php">Sair</a></li>
			                    
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
							<h2>olá <span>,</span> Bem Vindo <br> A Página<br> do cliente<span>.</span>   </h2>
							<p>.Com Informática</p>
							<!--<a href="assets/download/browney.txt" download>download resume</a>-->
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->
		
		<!--Timeline start -->
		<div class="container">
			<div class="page-header">
				<h1 id="timeline"><center>TIMELINE DO EQUIPAMENTO</center></h1>
			</div>
			<ul class="timeline">
				<li>
				<?php 
				include('conexao.php');
			    @$id_Cliente=$_GET['id'];
				$sql="SELECT * FROM equipamento WHERE id='$id_Cliente'";
				$consulta=mysqli_query($conexao,$sql);
				while($e=mysqli_fetch_assoc($consulta)){
				echo'
				  <div class="timeline-badge primary"><i class="fas fa-laptop-medical" style="color:rgb(0, 0, 0)"></i></div>
				  <div class="timeline-panel">

					<div class="timeline-heading">
					  <h4 class="timeline-title">'.$e['marca'].'</h4>
					  <p><small class="text-muted"  style="color:rgb(0, 0, 0)">
					  <i class="fas fa-laptop-medical" ></i> <?php ?></small></p>
					</div>
					<div class="timeline-body">
					  <p>'.$e['modelo'].'</p>
					  <p>'.$e['preco'].'</p>
					</div>
					</div>
					';}
					?>
				</li>
				<li class="timeline-inverted">
				  <div class="timeline-badge warning"><i class='fas fa-pause-circle' style="color:rgb(0, 0, 0)"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title">Em progresso</h4>
					  <p><small class="text-muted"  style="color:rgb(0, 0, 0)"><i class="fas fa-laptop-medical" ></i> 21 de maio de 2019</small></p>
					</div>
					<div class="timeline-body">
					  <p>Problema encontrado</p>
					  <p>Estamos Tentando arrumar seus problemas</p>
					</div>
				  </div>
				</li>
				<li>
				  <div class="timeline-badge danger"><i class='fas fa-pause-circle' style="color:rgb(0, 0, 0)" ></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title">Em progresso</h4>
					  <p><small class="text-muted"  style="color:rgb(0, 0, 0)"><i class="fas fa-laptop-medical"></i> 22 de maio de 2019</small></p>
					</div>
					<div class="timeline-body">
					  <p>Foi necessário trocar o HD, seu PC já está 50% pronto para a devolução </p>
					</div>
				  </div>
				</li>
				<li class="timeline-inverted">
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title">Estamos corrigindo </h4>
					  <p><small class="text-muted"  style="color:rgb(0, 0, 0)"><i class="fas fa-laptop-medical"></i> 23 de maio de 2019</small></p>
					</div>
					<div class="timeline-body">
					  <p>O problema está sendo corrigido, após isso iremos verificar se não tem a existência de nenhum outro defeito em seu equipamento</p>
					</div>
				  </div>
				</li>
				
				<li>
				  <div class="timeline-badge info"><i class="fas fa-pause-circle" style="color:rgb(0, 0, 0)"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title">Emissão de Relatório</h4>
					  <p><small class="text-muted"  style="color:rgb(0, 0, 0)"><i class="fas fa-laptop-medical"></i> 25 de maio de 2019</small></p>
					</div>
					<div class="timeline-body">
					  <p>Seu Relatório já está disponivel para leitura</p>
					  <hr>
					  <div class="btn-group">
						<button type="button"  style='font-size:24px' color='yellow'>
				  
							Relatório <i class='far fa-check-circle'></i>
						  <!--<i class="far fa-check-circle"></i> <span class="far fa-check-circle"></span>-->
						</button>
					   
					  </div>
					</div>
				  </div>
				</li>
				
				<li class="timeline-inverted">
				  <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up" style="color:rgb(0, 0, 0)"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title">Concluido com sucesso</h4>
					  <p><small class="text-muted"><i class="glyphicon glyphicon-thumbs-up"></i> 28 de maio de 2019</small></p>
					</div>
					<div class="timeline-body">
					  <p>Seu Equipamento foi concertado com sucesso, agradecemos a preferencia volte sempre.</p>
					</div>
				  </div>
				</li>
			</ul>
		</div>
		  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<!--Timeline end -->
				

		
		

		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; copyright yourname. design and developed by <a href="">SQUAD SOFTWARE</a>
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