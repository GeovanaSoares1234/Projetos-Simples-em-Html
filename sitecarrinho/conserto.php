<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Projeto 2019</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<style>
		img {
			float: left;
			border-radius: 10px 10px;
			
		}
	</style>
	
	<center>
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
		
	</center>
	
	
	<center>
		&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
		&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
           
            <div class="dois">
                <img src="image/jf.jpeg" height="200px" width="200px">
                <p>J.F. Celulares</p>
                <p>Loja de celulares em Carapicuíba, Brasil</p>
                <p>Endereço: Av. Inocêncio Seráfico, 3609 B - Vila Silva Ribeiro, Carapicuíba - SP, 06380-021</p>
                <p>Telefone: (11) 4207-9990</p>
                <br>
			</div>
		<center>
            <div class="tres">
				<img src="image/embu%5B.jpg" height="200px" width="200px">
				<p>Arte Celular</p>
				<p>Loja de celulares em Embu das Artes, Brasil</p>
				<p>Endereço: Av. João Batista Medina, 163 - Centro, Embu das Artes - SP, 06840-050</p>
				<p>Telefone: (11) 4557-1837</p>
				<br>
			</div>
			
		</center>
		<div class="quatro">
			<img src="image/inove.png" height="200px" width="200px">
			<p>i9 Cel</p>
			<p>Loja de celulares em Jandira, Brasil</p>
			<p>Endereço: R. Ricarte Sewaybricker, 52 - Centro, Jandira - SP, 06600-045</p>
			<p>Telefone: (11) 4619-6252</p>
			<br>
		</div>

		<div class="cinco">
			<img src="image/primos.jpg" height="200px" width="200px">
			<p>Primo Celulares</p>
			<p>Oficina de conserto de eletrônicos em Jundiaí, Brasil</p>
			<p>Endereço: Av. Bento do Amaral Gurgel, 1164 - Vila Nambi, Jundiaí - SP, 13219-070</p>
			<p>Telefone: (11) 4533-2522</p>
			<br>
		</div>

		<div class="seis">
			<img src="image/sppedd.jpg" height="200px" width="200px">
			<p>Speedcell Celulares</p>
			<p>Serviço de reparos de aparelhos telefônicos em Jundiaí, Brasil</p>
			<p>Endereço: R. José do Patrocínio, 325 - Vila Arens/Vila Progresso, Jundiaí - SP, 13201-640</p>
			<p>Telefone: (11) 4587-2525</p>
			<br>
		</div>
		    <br><br>
	</center>
	<br>&nbsp;<br>&nbsp;<br>
	<hr>
	
	<center><h4>Site realizado: Geovana Novelli Soares<br><br>TWITTER: @gegesoares6 <br> FACEBOOK: Geovana Novelli Soares <br><br>Senai Alvares Romi <br>(10/12/2019)</h4></center>
	
	<hr>
</body>
</html>