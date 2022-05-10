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
    .bot{
        margin-top: 90px;
        float: left;
        margin-left: 450px;
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
                <center><img src="image/iphonelogo.png"></center>
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
                <article>
                <div id="produtos">
                    <div class="produto">
                        <h3>PRODUTO: Iphone 6 </h3>
                        <img src="image/iphone/iphoneDoze.jpg" height="233px" width="90px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">1600,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                    </div>
                   
                    <div class="produto">
                        <h3>PRODUTO: Iphone 6s </h3>
                        <img src="image/iphone/ihoneOnze.jpg" height="233px" width="90px">
                        <p>Capacidade: 16 GB</p>
                        <p id="valor1">1300,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                    </div>
                    
                     <div class="produto">
                        <h3>PRODUTO: Iphone 6s Plus </h3>
                        <img src="image/iphone/iphoneDez.jpg" height="233px" width="90px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">1599,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                    </div>

                    <div class="produto">
                        <h3>PRODUTO: Iphone 7 </h3>
                        <img src="image/iphone/um.jpg" height="233px" width="90px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">1999,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                    </div>

                     <div class="produto">
                        <h3>PRODUTO: Iphone 7 Plus</h3>
                        <img src="image/iphone/iphoneDois.jpg" height="233px" width="90px">
                        <p>Capacidade: 32 GB RAM</p>
                        <p id="valor2">2988,00</p>
                        <br>
                        <button onclick="comprar(2)">Comprar</button><br>
                        <br>&nbsp;<br>
                    </div>

                 <div class="produto">
                       <h3>PRODUTO: Iphone 8</h3>
                        <img src="image/iphone/tres.jpg" height="223px" width="100px">
                        <p>Capacidade: 64 GB RAM</p>
                        <br>
                        <p id="valor2">1999,00</p>
                        <button onclick="comprar(2)">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                        <h3>PRODUTO: Iphone 8 Plus</h3>
                        <img src="image/iphone/quatro.jpg" height="231px" width="90px">
                        <p>Capacidade: 64 GB</p>
                        <p id="valor1">2815,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                        <h3>PRODUTO: Iphone X</h3>
                        <img src="image/iphone/cinco.png" height="233px" width="20px">
                        <p>Capacidade: 64 GB</p>
                        <p id="valor1">4000,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                        <h3>PRODUTO: Iphone XR</h3>
                        <img src="image/iphone/Seis.jpg" height="220px" width="90px">
                        <p>Capacidade: 64 GB</p>
                        <p id="valor1">3255,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                        <h3>PRODUTO: Iphone XS</h3>
                        <img src="image/iphone/sete.jpg" height="220px" width="90px">
                        <p>Capacidade: 64 GB</p>
                        <p id="valor1">5015,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                        <h3>PRODUTO: Iphone XS Max</h3>
                        <img src="image/iphone/treze.jpg" height="220px" width="90px">
                        <p>Capacidade: 128 GB</p>
                        <p id="valor1">4999,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                        <h3>PRODUTO: Iphone 11</h3>
                        <img src="image/iphone/oito.jpg" height="220px" width="90px">
                        <p>Capacidade: 64 GB</p>
                        <p id="valor1">4399,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                        <h3>PRODUTO: Iphone 11 Pro</h3>
                        <img src="image/iphone/nove.jpg" height="220px" width="90px">
                        <p>Capacidade: 64 GB</p>
                        <p id="valor1">6000,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                 
                  <div class="produto">
                        <h3>PRODUTO: Iphone SE</h3>
                        <img src="image/iphone/qua.jpg" height="220px" width="90px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">1499,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                        <h3>PRODUTO: Iphone SE</h3>
                        <img src="image/iphone/deze.jpg" height="220px" width="90px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">1499,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                        <h3>PRODUTO: Iphone 5s</h3>
                        <img src="image/iphone/quinze.jpg" height="220px" width="90px">
                        <p>Capacidade: 16 GB</p>
                        <p id="valor1">400,00</p>
                        <br>
                        <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                          
                </div>
                  <br>&nbsp;<br> <br>&nbsp;<br> <br>&nbsp;<br>
                 
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