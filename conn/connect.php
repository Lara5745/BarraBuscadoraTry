<?php

  $host = "localhost";  #El símbolo de $ significa variable
  $user = "root";
  $pass = "";
  $db   = "buscador";   #Nombre de la base de datos

  $connect = new mysqli($host,$user,$pass,$db) or die ("error" . mysqli_errno($connect));
 ?>
