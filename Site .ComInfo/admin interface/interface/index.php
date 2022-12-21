<?php
include('conexao.php');
include('../autenticacao.php');

 ?>
<html language="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>.ComInformática - Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <!--PAGINA INTEIRA-->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" >

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo ABREVIADA NO MENU -->
      <span class="logo-mini"><b>.INFO</b></span>
      <!-- logo DA EMPRESA -->
      <span class="logo-lg"><b>.COM</b>INFORMÁTICA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav  class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" id="a"
      class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span><style></style>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
            <ul class="dropdown-menu">
              <!--LOGO DAS MENSAGENS TEXTO-->
              
          
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user PAINEL DE USUARIO ESQUERDA -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/.ComInfo.png" class="img-circle" alt="User Image"  style="border:1px double gray;">
        </div>
        <div class="pull-left info">
          <p>
          <?php 
							@$id=$_POST['id'];
							$query="SELECT * FROM administradores WHERE email='$email'";
							$resultado=mysqli_query($conexao,$query);
							while($a = mysqli_fetch_assoc($resultado)){
								echo $a['nome'];
							}?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"style="color:lime" ></i> ONLINE</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"  style="background-color:black;">MENU DE NAVEGAÇÃO</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard" style="color: yellow"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span></a>
          </a>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-tasks" style="color: yellow"></i> <span>Tabelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/administradores/listaadministradores.php"><i class="ion ion-person"></i> Admintradores</a></li>
            <li><a href="pages/tables/cliente/listacliente.php"><i class="ion ion-ios-people"></i> Cliente</a></li>
            <li><a href="pages/tables/equipamento/listaequipamento.php"><i class="ion ion-android-laptop"></i> Equipamentos</a></li>
            <li><a href="pages/tables/timeline/listatimeline.php"><i class="fa fa-list-alt" ></i> Timeline</a></li>
          </ul>
        </li>
        
        <li><a href="sair.php"><i class=" fa  fa-sign-out" style="color: yellow"></i> <span>Sair</span></a></li></ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image:url('../imagens/backwork.jpg');
   background-size:100%; background-position:top; background-repeat: none;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="color:black;">
        Dashboard
        <small>Painel de Controle</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php include('conexao.php');
                  $sql = "SELECT id FROM cliente"; // Alterar condições para filtrar registros
                  $query = mysqli_query($conexao,$sql);
                  $qtde = mysqli_num_rows($query);
                  echo $qtde; // Seu resultad;?></h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="pages/tables/cliente/listacliente.php" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php include('conexao.php');
                  $sql = "SELECT id FROM equipamento"; // Alterar condições para filtrar registros
                  $query = mysqli_query($conexao,$sql);
                  $qtde = mysqli_num_rows($query);
                  echo $qtde; // Seu resultad;?><sup style="font-size: 20px"></sup></h3>

              <p>Equipamentos</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-laptop"></i>
            </div>
            <a href="pages/tables/equipamento/listaequipamento.php" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php include('conexao.php');
                  $sql = "SELECT id FROM administradores"; // Alterar condições para filtrar registros
                  $query = mysqli_query($conexao,$sql);
                  $qtde = mysqli_num_rows($query);
                  echo $qtde; // Seu resultad;?></h3>

              <p>Administradores</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="pages/tables/administradores/listaadministradores.php" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><br></h3>

              <p><b>Gerar Relatório</b></p>
            </div>
            <div class="icon">
            <i class="ion ion-ios-paper"></i>
            </div>
            <a href="pages/relatorios/index.php" class="small-box-footer">Mais Infomações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
      <!-- /.row -->
      <!-- Main row -->
      

         

          <!-- TIMELINE FIM  -->



<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
