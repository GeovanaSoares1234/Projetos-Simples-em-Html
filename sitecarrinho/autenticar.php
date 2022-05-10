<?php

//retorna a variavel de conexão
include_once("db/conexao.php");

$email = $_POST['email'];
$pswrd = md5($_POST['senha']);

//String de comando SQL
$_sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$pswrd'"; //statement
//conexao e comando
$_query = mysqli_query($_conecta, $_sql) or die (mysqli_error()); //query recebe o resultado de select

$_rows = mysqli_num_rows($_query);

mysqli_close($_conecta);

if($_rows > 0)
{
    session_start();
    
    $_SESSION['email'] = $email;
    //$_SESSION['pswrd'] = $pswrd;
    header("Location: home.php");
    
} else {
    header("Location: login.php?acao=invalido");
}

?>