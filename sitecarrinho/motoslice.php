<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projeto 2019</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<style>
    img{
       margin-left: 1px;
        margin-top: 5px;
    }
   
    h4{
        color: black;
        border: black solid;
    }
    h3{
        font-family: calibri;
        color: white;
        background-color: black;
        border-radius: 20px 20px;
        padding: 10px;
        width: 80%;
        text-align: center;
        margin-left: 20px;
    }
    button{
        width: 50%;
        padding: 8px;
        border-radius: 10px 10px;
        font-family: calibri;
        font-size: 18px;
        color: aliceblue;
        background-color: black;
        
    }
    
    #produtos
    {
        border-radius: 50px;
        height: 100%;
        margin-left: 6%;
        margin-right: 5%;
    }

    .produto
    {
        width: 465px;
        height: 450px;
        margin-top: 25px;
        border: 2px solid black;
        border-radius: 10px;
        float: left;
        margin: 15px;
        margin-left: 65px;
        margin-right: 30px;
        text-align: center;
        background-color: #ffffff;
        padding: 20px;
         -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .produto:hover img {
            -webkit-transform: scale(1.0);
            transform: scale(1.1);
        }
    </style>
<body>
     <div id="all">
		<ul class="menu">
	
			<li><a href="home.php">HOME PAGE<img src="image/icones/casa.png" width="80px" height="80px"></a></li>
			<li><a href="celulares.php">CELULARES<img src="image/icones/cel.png" width="80px" height="75px"></a>
			</li>
			<li><a href="conserto.php">CONSERTOS<img src="image/icones/consertos.png" width="70px" height="75px"></a>
			</li>
			
		
				<li>
				<?php if(isset($_SESSION["email"])){ ?>
					<a href="adm.php">MINHA CONTA<img src="image/icones/minha.png" width="70px" height="79px"></a>
				<?php } else { ?>
					<a href="cadastro.php">CADASTRO/LOGIN<img src="image/icones/cadastro.png" width="80px" height="75px"></a>
				<?php } ?>
			</li>
				
			
		</ul>
        </div>
        
            &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
            &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
          <div id="conteudo">
                <header>
                    <center><img src="image/motorolalogo.png"></center>
                    <br>
                    <br>
                    <br>
                    <br>
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
                <article>
          <div id="produtos">
           
            <div class="produto">
                <h3>PRODUTO: Moto G8 plus </h3>
                <img src="image/motorola/motoUm.jpg" height="223px" width="100px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">1445,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto g8 Play</h3>
                <img src="image/motorola/motoDois.jpg" height="223px" width="100px">
                <p>Capacidade: 32 GB RAM</p>
                <p id="valor2">1049,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto One Zoom</h3>
                <img src="image/motorola/motoTres.jpg" height="223px" width="100px">
                <p>Capacidade: 128 GB RAM</p>
                <p id="valor3">1671,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: G7 Play Edic Esp</h3>
                <img src="image/motorola/motoQuatro.jpg" height="223px" width="100px">
                <p>Capacidade: 32 GB RAM</p>
                <p id="valor4">749,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
             
            <div class="produto">
                <h3>PRODUTO: Moto G7 power</h3>
                <img src="image/motorola/motoCinco.jpg" height="238px" width="100px">
                <p>Capacidade: 32 GB </p>
                <p id="valor4">1249,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
            <div class="produto">
                <h3>PRODUTO: Moto G7 Play </h3>
                <img src="image/motorola/motoSeis.jpg" height="238px" width="100px">
                <p>Capacidade: 32 GB</p>
                <p id="valor1">615,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
            <div class="produto">
                <h3>PRODUTO: Motorola One </h3>
                <img src="image/motorola/motoSete.jpg" height="238px" width="100px">
                <p>Capacidade: 64 GB </p>
                <p id="valor1">879,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
            <div class="produto">
                <h3>PRODUTO: Moto E6 Play</h3>
                <img src="image/motorola/motoOito.jpg" height="238px" width="100px">
                <p>Capacidade: 32 GB</p>
                <p id="valor1">799,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
           <div class="produto">
                <h3>PRODUTO: Moto One Macro </h3>
                <img src="image/motorola/motoNove.jpg" height="238px" width="100px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">1299,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto One Action</h3>
                <img src="image/motorola/motoDez.jpg" height="238px" width="100px">
                <p>Capacidade: 128 GB</p>
                <p id="valor1">1402,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto One Vision</h3>
                <img src="image/motorola/motoOnze.jpg" height="238px" width="100px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">1080,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto G7 Plus </h3>
                <img src="image/motorola/motoDoze.jpg" height="238px" width="100px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">1489,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto E5 Play </h3>
                <img src="image/motorola/motoTreze.jpg" height="238px" width="100px">
                <p>Capacidade: 32 GB</p>
                <p id="valor1">729,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: E6 Plus </h3>
                <img src="image/motorola/motoQua.jpg" height="238px" width="100px">
                <p>Capacidade: 32 GB</p>
                <p id="valor1">669,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: G6 Plus </h3>
                <img src="image/motorola/motoQuinze.jpg" height="238px" width="100px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">960,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto Z3 Play </h3>
                <img src="image/motorola/motoDeze.jpg" height="238px" width="100px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">1509,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto G6 Play </h3>
                <img src="image/motorola/motoDSete.jpg" height="238px" width="100px">
                <p>Capacidade: 32 GB</p>
                <p id="valor1">1009,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto Z2 Force </h3>
                <img src="image/motorola/motoDezoito.jpg" height="238px" width="100px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">988,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
            <div class="produto">
                <h3>PRODUTO: Moto Z2 Play </h3>
                <img src="image/motorola/motoDezenove.jpg" height="238px" width="80px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">689,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
            <div class="produto">
                <h3>PRODUTO:Moto E4 Plus</h3>
                <img src="image/motorola/motoVin.jpg" height="238px" width="80px">
                <p>Capacidade: 64 GB</p>
                <p id="valor1">529,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto G4 Play </h3>
                <img src="image/motorola/motoVinteUm.jpg" height="238px" width="80px">
                <p>Capacidade: 16 GB</p>
                <p id="valor1">329,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
             <div class="produto">
                <h3>PRODUTO: Moto G5s Plus  </h3>
                <img src="image/motorola/motoVinteDois.jpg" height="238px" width="80px">
                <p>Capacidade: 32 GB</p>
                <p id="valor1">1299,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
            
            <div class="produto">
                <h3>PRODUTO: Moto G3</h3>
                <img src="image/motorola/motoVinteTres.jpg" height="238px" width="80px">
                <p>Capacidade: 16 GB</p>
                <p id="valor1">299,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
             
              <div class="produto">
                <h3>PRODUTO: Moto C Plus</h3>
                <img src="image/motorola/motoVinteQuatro.jpg" height="238px" width="80px">
                <p>Capacidade: 16 GB</p>
                <p id="valor1">499,00</p>
                <br>
                <button onclick="comprar()">Comprar</button><br>
                <br>&nbsp;<br>
            </div>
        </div>
    </article>

    <script>
        function comprar(e){
            e = e || window.event;
            e = e.target || e.srcElement;
            var divE = e.parentElement;

            var produto = divE.childNodes[1].textContent.replace("PRODUTO: ", "");
            var preco = divE.childNodes[7].textContent;
            console.log(produto, preco, e.parentNode.childNodes);
            
            alert("Item adicionado ao carrinho");
            window.location.href = "carrinho.php?produto=" + produto + "&preco=" + preco;
        }
    </script>
    </body>
</html>