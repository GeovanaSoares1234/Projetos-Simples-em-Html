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
                      <center><img src="image/logosamsung.png"></center>
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
                            <h3>PRODUTO: Galaxy Note10 </h3>
                            <img src="image/gala10.png" height="200px" width="100px">
                            <p>Capacidade: 256 GB RAM</p>
                            <p id="valor1">5399,00</p>
                            <button onclick="comprar()">Comprar</button><br>
                       <br>&nbsp;<br>
                    </div>
                 <div class="produto">
                       <h3>PRODUTO: Galaxy A80</h3>
                        <img src="image/a80.jpg" height="200px" width="100px">
                        <p>Capacidade: 128 GB RAM</p>
                        <p id="valor2">2999,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                 <div class="produto">
                        <h3>PRODUTO: Galaxy A70</h3>
                        <img src="image/a70.jpg" height="218px" width="100px">
                        <p>Capacidade: 128 GB RAM</p>
                        <p id="valor3">2499,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                   <br>&nbsp;<br>
                </div>
                 <div class="produto">
                        <h3>PRODUTO: Galaxy Note9</h3>
                        <img src="image/note9.jpg" height="218px" width="100px">
                        <p>Capacidade: 128 GB RAM</p>
                        <p id="valor4">6449,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                  <div class="produto">
                        <h3>PRODUTO: Galaxy Note8</h3>
                        <img src="image/samsung/samsungUm.jpg" height="185px" width="100px">
                        <p>Capacidade: 128 GB RAM</p>
                        <p id="valor4">1469,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                  <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy s9</h3>
                        <img src="image/samsung/samsungDois.jpg" height="223px" width="100px">
                        <p>Capacidade: 128 GB</p>
                        <p id="valor1">1569,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                   <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy s8</h3>
                        <img src="image/samsung/samsungTres.jpg" height="200px" width="100px">
                        <p>Capacidade: 256 GB | 8 GB RAM</p>
                        <p id="valor1">5399,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy s10 </h3>
                        <img src="image/samsung/samsungQuatro.jpg" height="223px" width="100px">
                        <p>Capacidade: 128 GB</p>
                        <p id="valor1">3399,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                   <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy s7 </h3>
                        <img src="image/samsung/samsungCinco.jpg" height="223px" width="100px">
                        <p>Capacidade: 16 GB</p>
                        <p id="valor1">700,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                  <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy s6</h3>
                        <img src="image/samsung/samsungSeis.jpg" height="223px" width="100px">
                        <p>Capacidade: 16 GB</p>
                        <p id="valor1">700,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                   <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy a30 </h3>
                        <img src="image/samsung/samsungSete.jpg" height="223px" width="100px">
                        <p>Capacidade: 64 GB</p>
                        <p id="valor1">1055,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy a10 </h3>
                        <img src="image/samsung/samsungOito.jpg" height="223px" width="100px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">750,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy a20 </h3>
                        <img src="image/samsung/samsungNove.jpg" height="210px" width="100px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">850,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy a80 </h3>
                    <img src="image/samsung/samsungDez.jpg" height="210px" width="100px">
                        <p>Capacidade: 128 GB</p>
                        <p id="valor1">2050,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy a70 </h3>
                        <img src="image/samsung/samsungOnze.jpg" height="210px" width="100px">
                        <p>Capacidade: 128 GB</p>
                        <p id="valor1">1759,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy a50 </h3>
                        <img src="image/samsung/samsungDoze.jpg" height="210px" width="100px">
                        <p>Capacidade: 128 GB</p>
                        <p id="valor1">5399,00</p>
                    <button onclick="comprar()">Comprar</button><br>
                        <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy j6 </h3>
                        <img src="image/samsung/samsungTreze.jpg" height="210px" width="100px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">709,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy j7 Pro </h3>
                        <img src="image/samsung/samsungQua.jpg" height="210px" width="100px">
                        <p>Capacidade: 64 GB</p>                                   
                        <p id="valor1">1499,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy j7 </h3>
                        <img src="image/samsung/samsungQuinze" height="210px" width="100px">
                        <p>Capacidade: 32 GB</p>
                        <p id="valor1">1999,00</p>
                        <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                <div class="produto">
                        <h3>PRODUTO: Galaxy j7 Prime </h3>
                        <img src="image/samsung/samsungDe" height="210px" width="100px">
                        <p>Capacidade: 16 GB</p>
                        <p id="valor1">1995,00</p>
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