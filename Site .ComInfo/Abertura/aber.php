<html>
    <meta charset="utf-8">
    <style>
        body{
            background-color:black;
            /*background-image:url('images/pcd.png');*/
            background-size:100%;
            background-repeat:none;
            background-position:center;
            /*background-image: linear-gradient(to top, rgb(0, 0, 0),rgb(20, 18, 18));*/
        }
        h1{
            color: darkgoldenrod;
            text-align: center;
            font-size: 100px;
            margin-top: 230px;

        }
        a{
            text-decoration: none;
        }
        img{
            width:180px;
            height:68px;
            float:left;
            border: 3px double gold;
            margin:0 auto;
            margin-top:-7px;
        }
        #logo {
	float: left;
    display: inline-block;
	margin-left: 5px;
}
#logo img {
	float: left;
    display: inline-block;
	
}
#navigation {
	display: inline-block;
	height: 60px;
	list-style: none;
	margin: 0 10px;
	padding: 0;
*   width: 516px; 
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
      color: #fceb00;
      background-color: #fceb00;
      height: 1px;
    }
    </style>
    <head>
    <link rel="stylesheet" href="../cliente interface/Pagina do cliente/assets/css/reposive.css">
    </head>
    <body>
    <div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="index.html"><img src="images/logo2.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
                <br>
				<li class="selected">
					<a href="aber.php" style="font-size:14px;">Home</a>
				</li>
				<li>
					<a href="../admin interface/index.php" style="font-size:14px;">Login Adm</a>
				</li>
				<li>
					<a href="../cliente interface/index.php" style="font-size:14px;">Login Cliente</a>
				</li>
                <li>
					<a href="../cliente interface/cadastrar.php" style="font-size:14px;">Cliente, Faça Aqui o Seu Cadastro</a>
				</li>
				<li>
					<!--<a href="#">Cadastrar</a>-->
				</li>
			</ul>
		</div>
	</div><hr>
        
        <meta charset="UTF-8">
<svg viewBox="0 0 960 300">
        <symbol id="s-text">
            <text text-anchor="middle" x="50%" y="80%">.ComInformática</text>
        </symbol>
    
        <g class = "g-ants">
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
        </g>
    </svg>
    <style>
        @media screen and (max-width: 540px){
	
            #s-text{font-size: 24px;}
            #g-ants{font-size: 24px;}
}
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

html, body{
  height: 100%;
  font-weight: 800;
}

body{
  background: #000000;
  font-family: Arial;
  font-size:10px;
}

svg {
    display: block;
    font: 10.5em 'Montserrat';
    width: 960px;
    height: 300px;
    margin: 0 auto;
   
}

.text-copy {
    fill: none;
    stroke: white;
    stroke-dasharray: 6% 29%;
    stroke-width: 5px;
    stroke-dashoffset: 0%;
    animation: stroke-offset 5.5s infinite linear;
}

.text-copy:nth-child(1){
	stroke: rgb(255, 238, 0);
	animation-delay: -1;
}

.text-copy:nth-child(2){
	stroke: rgb(255, 217, 0);
	animation-delay: -2s;
}

.text-copy:nth-child(3){    
	stroke: rgb(29, 29, 29);
	animation-delay: -3s;
}

.text-copy:nth-child(4){
	stroke: rgb(53, 52, 52);
	animation-delay: -4s;
}

.text-copy:nth-child(5){
	stroke: #FDB731;
	animation-delay: -5s;
}

@keyframes stroke-offset{
	100% {stroke-dashoffset: -35%;}
}
    </style>
    </body>
    </html>
