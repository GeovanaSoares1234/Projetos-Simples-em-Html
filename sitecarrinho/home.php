<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Projeto 2019</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<style>
		.nome {
			color: aliceblue;
			background-image: linear-gradient(to right, #000, #251e4a, #000);
			margin: 0px;
			font-family: calibri;
			font-size: 30px;
			padding: 0.1px;
			text-align: center;
		}

        p{
            font-family:Arial;
            font-size: 1.25em;
            display: inline-block;
            padding: 20px;
            width: 43%;
            
           
        }
        hr{
            
            border: solid 1px black;
        
        }
        .apresentacao{
            margin-bottom: 300px;
            padding: 90px;
            width: 70%;
          
            
            
        
        }
        #imga{

            border-radius: 10px 10px;
        }
        h3{
            font-family: Arial;
            font-size: 23px;
            font-weight: bold;
            border: solid 2px black;
            width: 33%;
            display: inline-block;

        
        }
        .logo{
           margin-bottom: 300px;
            padding: 90px;
            width: 80%;
            margin-left: 120px;
            float: left;
        }
        #as{
            float: right;
            margin-left: 70px;
            border-radius: 10px 10px;
        }
        #ass{
           float: left;
        }
        h6{
            font-family: calibri;
            font-size: 25px;
            text-align: center;
     
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
	</div>
	<br>&nbsp;
	<center>
	 <h6><b>Estes são o Banner e o logo da loja</b></h6>
	<div class="logo">
	    <img src="image/vero.png" width="360px" height="600px" id="ass"> &nbsp;
	    
	    <img src="image/vendcellogosite.png" width="360px" height="400px" id="as">
	     
	   
	</div>
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
	<div class="apresentacao">
         <center><img src="image/ven.png" id="imga"></center>
         
       <p>
         <b>Apresentação da empresa</b><br>   Foi criado essa empresa com objetivo de realizar compras Online, é realizado compras de celulares possuindo as marcas xiaomi, lg, motorola, samsung e iphone. <br>Possui também uma página para consertos caso o produto venha danificado. É também um meio fácil e acessivo, pois tem pessoas que possuem dificuldades para ir até a loja de sua escolha.
       </p> 
         
	</div>
	</center>

    <center>
        <h3>Geolocalização da empresa:</h3>
    </center>
    
    <br>&nbsp;<br>
    
     <center>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.381086328729!2d-47.416938084421346!3d-22.75123453806014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89de99161f17d%3A0x58a57e9ed56eb203!2s100%25%20celulares%20%2F%20S%C3%A3o%20Vicente-sbo!5e0!3m2!1spt-BR!2sbr!4v1575630832325!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </center>
       
    <br>&nbsp;
    <br>&nbsp;
	
<center>
		<ul class="slider">
			<li class="text-center">
				<input type="radio" id="slide1" name="slide" checked>
				<label for="slide1"></label>
				<img src="image/hl.jpg" class="img-fluid rounded" />
			</li>
			<li>
				<input type="radio" id="slide2" name="slide" checked>
				<label for="slide2"></label>
				<img src="image/celularr.jpg" class="img-fluid rounded"/>
			</li>
			<li>
				<input type="radio" id="slide3" name="slide" checked>
				<label for="slide3"></label>
				<img src="image/ipho.jpg" class="img-fluid rounded"/>
			</li>
		</ul>
	
</center>
	<center>
		<h2 align=center>SAIBA DE ALGUMAS DE SUAS CURIOSIDADES SOBRE A ORIGEM DE CADA MARCA DE CELULAR</h2>
	</center>

	<div class="container mt-3">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="card cards">
					<div class="card-body">
						<span>SAMSUNG</span>
					</div>
					<img src="image/negS.jpg" class="card-img-top">
				</div>
			</div>

			<div class="col-md-4">
				<div class="card cards">
					<div class="card-body">
						<span>XIAOMI</span>
					</div>
					<img src="image/negXi.jpg" class="card-img-top">
				</div>
			</div>

			<div class="col-md-4">
				<div class="card cards">
					<div class="card-body">
						<span>LG</span>
					</div>
					<img src="image/negLg.jpg" class="card-img-top">
				</div>
			</div>
		</div>

		<div class="row text-center mt-2">
			<div class="col-md-6">
				<div class="card cards">
					<div class="card-body">
						<span>MOTOROLA</span>
					</div>
					<img src="image/negMot.jpg" class="card-img-top">
                    </div>
			</div>

			<div class="col-md-6">
				<div class="card cards">
					<div class="card-body">
						<span>IPHONE</span>
					</div>
					<img src="image/negIpho.jpg" class="card-img-top">
				</div>
			</div>

		</div>
	</div>

	<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
	
	
</body>
</html>