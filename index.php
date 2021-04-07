<?php require_once('conn/connect.php') ?> <!--requier_once es una función para que solo lo incluya una vez en el documento
                                            conn/connect hace referencía a la carpeta donde se encuentra el archivo de conexión y el nombre del mismo-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BuscadorMetro</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> <!--Google fonts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--https://developers.google.com/speed/libraries-->
    <script type="text/javascript" src="js/ajax.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <div class="form center">
          <img src="img/logo.jpg" width="300" height="150">
          <br><br><br>
        <form action ="" method="post" name="search_form" id="search_form">
          <input type="text" name="search" id="search">
        </form>
      </div>
      <div id="resultados"></div>
      <div class="footer center ">
        Copyright 2019 - Reservados todos los derechos <br>
      </div>
    </div>
  </body>
</html>
