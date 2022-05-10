<?php
    session_start();

    if(!isset($_SESSION["qtd"])){
        $qtd = 1;
    }else{
        $qtd = $_SESSION["qtd"] + 1;
    }

    $prod = $_GET["produto"];
    $preco = $_GET["preco"];

    $_SESSION["produto"][$qtd] = $prod;
    $_SESSION["preco"][$qtd] = $preco;
    $_SESSION["qtd"] = $qtd;

    echo $_SESSION["qtd"];

    header("location:javascript://history.go(-1)");

?>