<?php
  session_start();
  unset($_SESSION["email"]);
  unset($_SESSION["qtd"]);
  unset($_SESSION["produto"]);
  unset($_SESSION["preco"]);

  header("Location: home.php");
?>