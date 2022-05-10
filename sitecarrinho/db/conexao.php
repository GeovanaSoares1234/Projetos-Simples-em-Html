<?php
  $_servidor = "localhost";
  $_nome = "root";
  $_senha = "";
  $_db = "projeto";

  $_conecta = mysqli_connect($_servidor,$_nome,$_senha,$_db) or die(mysqli_error());
?>