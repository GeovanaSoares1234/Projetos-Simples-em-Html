<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Projeto 2019</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<style>
	
	
    .header{
        float: left;
    }
    h4{
        font-family: calibri;
        font-size: 23px;
    }
</style>
<body>
	<div id="all">
		<ul class="menu">
	
			<li><a href="home.php">HOME PAGE<img src="image/icones/casa.png" width="80px" height="80px"></a></li>
			<li><a href="celulares.php">CELULARES<img src="image/icones/cel.png" width="80px" height="80px"></a>
			</li>
			<li><a href="conserto.php">CONSERTOS<img src="image/icones/consertos.png" width="70px" height="75px"></a>
			</li>
			
			
				<li>
				<?php if(isset($_SESSION["email"])){ ?>
					<a href="adm.php">MINHA CONTA<img src="image/icones/minha.png" width="70px" height="79px"></a>
				<?php } else { ?>
					<a href="cadastro.php">CADASTRO/LOGIN<img src="image/icones/cadastro.png" width="80px" height="80px"></a>
				<?php } ?>
			</li>
				
		</ul>
    </div>
	
	<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
	<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
	
	    <div id="conteudo">
		<header>
			<center><img src="image/rostos%20da%20cidade.png"></center>
			<br><br><br><br>
		</header>
		<nav>
			<ul>

				<li><a href="iphoslice.php">IPHONE</a></li>
				<li><a href="xiaslice.php">XIAOMI</a></li>
				<li><a href="motoslice.php">MOTOROLA</a></li>
				<li><a href="lgslice.php">LG</a></li>
				<li><a href="samslice.php">SAMSUNG</a></li>
	        </ul>
	    </nav>
        </div>

        <header>
           <br><br><br>
        <br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
            
             <center><img src="image/vendcellogosite.png" height="190px" width="190px"></center>
             <center><img src="image/samsungslice.jpg" height="190px" width="200px"></center>
             <center><img src="image/motoslice.png" height="190px" width="200px"></center>
             <center><img src="image/lgslice.jpg" height="190px" width="230px"></center>
             <center><img src="image/xiaomislice.jpg" height="190px" width="220px"></center>
             
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>	
		</header>
	    <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;    <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
         <br>&nbsp;
<hr>
	
	<center><h4>Site realizado: Geovana Novelli Soares<br><br>TWITTER: @gegesoares6 <br> FACEBOOK: Geovana Novelli Soares <br><br>Senai Alvares Romi <br>(10/12/2019)</h4></center>
	
	<hr>
</body>
</html>