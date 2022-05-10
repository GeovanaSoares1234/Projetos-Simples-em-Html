<?php
	session_start();

	if(!isset($_SESSION["email"]) || $_SESSION["email"] != "admin@vendcel.com"){
		header("Location: user.php");
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Projeto 2019</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" src="js/js.js"></script>

</head>

<body>
	<style>
		nav ul li a {
			margin-top: 30px;
			background-color: rgb(108, 21, 21);
			text-decoration: none;
			color: white;
			font-size: 18px;
			font-weight: bold;
			font-family: calibri;
			padding: 10px;
			height: 22px;
			border-radius: 10px 10px;
			width: 110px;
			margin-left: 170px;
		}
		
		.primeira {
			border: 1px solid #000000;
			margin-bottom: 3em;
			padding: 0.9em;
			background-color: rgba(255, 255, 255, 0.54);
			border-radius: 10px 10px;
			width: 30%;
			margin: 31.25;
			margin-top: 0.1em;
		}
        
		input {
			padding: 0.5em;
			border-radius: 10px 10px;
		}
		
		p {
			margin: 0px;
			font-family: calibri;
			color: #000000;
			text-align: center;
			font-size: 25px;
		}
	</style>
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

	<div class="container">
		<h2 class="w-100 text-center">Relatórios</h2>

		<div class="row mt-5">
			<div class="col-md-4 text-center">
				<h4>últimos usuários cadastrados</h4>		

				<a class="btn btn-primary btn-block" href="lastest-users.php" target="_blank" role="button">Ver relatório</a>
			</div>
		</div>

		<div class="text-right">
			<a href="logout.php" class="btn btn-primary" role="button">Sair</a>
		</div>
	</div>


    </body>
</html>