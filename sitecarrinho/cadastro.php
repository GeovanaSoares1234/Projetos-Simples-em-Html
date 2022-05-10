<?php
if(isset($_GET['acao'])){
    include_once("db/conexao.php");
    
    $_nome = $_POST['nome'];
    $_cpf = $_POST['cpf'];
    $_email = $_POST['email'];
	$_senha = md5($_POST['senha']);
	# $_data = date('Y-m-d H:i:s');
    
    
/*
objeto->método();
Este simbolo (->) significa que o objeto esta invocando a execução de um método da classe da qual ele (o objeto) pertence
*/
   
    $_sql = "INSERT INTO usuarios(nome, cpf, email, senha) VALUES ('$_nome', '$_cpf', '$_email', '$_senha')";
    $_insere = mysqli_query($_conecta, $_sql) or die(mysqli_error());
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Projeto 2019</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js./js.js"></script>

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
				<a href="cadastro.php">CADASTRO/LOGIN<img src="image/icones/cadastro.png" width="80px" height="80px"></a>
			</li>
				
			
		</ul>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>

	<center>
		<p>Cadastro:</p>

        <?php if(isset($_GET['acao'])){ ?> <h3 class="text-success">Usuário cadastrado com sucesso</h3> <?php } ?>

		<div class="primeira mt-2">

			<font face="Arial">
				<form method="post" action="cadastro.php?acao=ok" name="forminserir" id="idforminserir">
                    <div class="form-group">
                        <label for="idnome">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="idnome" required>
                    </div>

                    <div class="form-group">
                        <label for="idcpf">CPF:</label>
                        <input type="number" name="cpf" class="form-control" id="idcpf" required>
                    </div>

                    <div class="form-group">
                        <label for="idemail">Email:</label>
                        <input type="text" name="email" class="form-control" id="idemail" required>
                    </div>

                    <div class="form-group">
                        <label for="idsenha">Senha:</label>
                        <input type="password" name="senha" class="form-control" id="idsenha" required>
                    </div>
                    
                    <br>

                    <a href="login.php" class="btn btn-link btn-lg btn-block" role="button">Já tenho uma conta</a>

                    <br>
                    
                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                    <button type="reset" class="btn btn-danger btn-block">Limpar</button>

				</form>
			</font>
		</div>
	</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>