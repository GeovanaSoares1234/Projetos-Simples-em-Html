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
                  <center><img src="image/xiaomilog.png"></center>
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
                    <h3>PRODUTO: Mi NOTE 9</h3>
                    <img src="image/xiaomi/xiaUm.jpg" height="223px" width="100px">
                    <p>Capacidade: 64 GB RAM</p>
                    <p id="valor2">3999,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: MI 9T PRO</h3>
                    <img src="image/xiaomi/xiaDois.jpg" height="223px" width="100px">
                    <p>Capacidade: 128 GB RAM</p>
                    <p id="valor3">2499,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                   <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: XIAOMI A3</h3>
                    <img src="image/xiaomi/xiaTres.jpg" height="223px" width="100px">
                    <p>Capacidade: 128 GB RAM</p>
                    <p id="valor4">6449,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                 
                  <div class="produto">
                    <h3>PRODUTO: XIAOMI MI 9T</h3>
                    <img src="image/xiaomi/xiaQuatro.jpg" height="238px" width="100px">
                    <p>Capacidade: 64 GB RAM</p>
                    <p id="valor4">3449,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                    <h3>PRODUTO: Mi MIX 3 5G </h3>
                    <img src="image/xiaomi/xiaCinco.jpg" height="238px" width="100px">
                    <p>Capacidade: 128 GB</p>
                    <p id="valor1">2199,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                    <h3>PRODUTO: MI 9 </h3>
                    <img src="image/xiaomi/miSeis.jpg" height="238px" width="100px">
                    <p>Capacidade: 64 GB </p>
                    <p id="valor1">2399,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                    <h3>PRODUTO: MI PRO 8 </h3>
                    <img src="image/xiaomi/xiaSete.jpg" height="238px" width="100px">
                    <p>Capacidade: 128 GB</p>
                    <p id="valor1">2210,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
               <div class="produto">
                    <h3>PRODUTO: MI 8 </h3>
                    <img src="image/xiaomi/xiaOito.jpg" height="238px" width="100px">
                    <p>Capacidade: 128 GB</p>
                    <p id="valor1">2199,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: MI 8 LITE</h3>
                    <img src="image/xiaomi/xiaNove.jpg" height="238px" width="100px">
                    <p>Capacidade: 128 GB</p>
                    <p id="valor1">1299,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: MI Max 3 </h3>
                    <img src="image/xiaomi/xiaDez.jpg" height="238px" width="100px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">1680,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: MI A2 </h3>
                    <img src="image/xiaomi/xiaOn.jpg" height="238px" width="100px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">1089,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: MI 2s </h3>
                    <img src="image/xiaomi/xiaDoze.jpg" height="238px" width="100px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">1829,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: Redmi Note 8 </h3>
                    <img src="image/xiaomi/xiaTreze.jpg" height="238px" width="100px">
                    <p>Capacidade: 128 GB</p>
                    <p id="valor1">1269,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: Redmi 8A </h3>
                    <img src="image/xiaomi/xiaQua.jpg" height="238px" width="100px">
                    <p>Capacidade: 32 GB</p>
                    <p id="valor1">700,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: Redmi 8 </h3>
                    <img src="image/xiaomi/xiaQuinze.jpg" height="238px" width="100px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">1049,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: Redmi Note 8 Pro </h3>
                    <img src="image/xiaomi/xiaDeze.jpg" height="238px" width="100px">
                    <p>Capacidade: 128 GB</p>
                    <p id="valor1">1499,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: MI 7A </h3>
                    <img src="image/xiaomi/xiaDsete.jpg" height="238px" width="100px">
                    <p>Capacidade: 32 GB</p>
                    <p id="valor1">588,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                    <h3>PRODUTO: Redmi 7 </h3>
                    <img src="image/xiaomi/Dezoito.jpg" height="238px" width="80px">
                    <p>Capacidade: 32 GB</p>
                    <p id="valor1">889,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                    <h3>PRODUTO: Redmi Note 7 </h3>
                    <img src="image/xiaomi/xiaDezenove.jpg" height="238px" width="80px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">1029,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: Redmi 6 pro </h3>
                    <img src="image/xiaomi/xiaVinte.jpg" height="238px" width="80px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">929,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                 <div class="produto">
                    <h3>PRODUTO: Redmi 6 </h3>
                    <img src="image/xiaomi/xiaVinteUm.jpg" height="238px" width="80px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">829,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                
                <div class="produto">
                    <h3>PRODUTO: Redmi S2</h3>
                    <img src="image/xiaomi/xiaVinteDois.jpg" height="238px" width="80px">
                    <p>Capacidade: 64 GB</p>
                    <p id="valor1">1999,00</p>
                    <br>
                    <button onclick="comprar()">Comprar</button><br>
                    <br>&nbsp;<br>
                </div>
                 
                  <div class="produto">
                    <h3>PRODUTO: POCOPHONE F1</h3>
                    <img src="image/xiaomi/xiaVinteTres.jpg" height="238px" width="80px">
                    <p>Capacidade: 128 GB</p>
                    <p id="valor1">1799,00</p>
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