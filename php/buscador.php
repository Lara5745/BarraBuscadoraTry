<?php
#CAPITULO 3!! ERROR FATAL no se pone en rojo SOLUCIÓN el error estaba en la consulta, solo faltaban unas comillas dobles
  require_once ('../conn/connect.php'); #El ../ sirve para salir de la carpeta actual (php)

  $search = '';
  if(isset($_POST['search'])){
    $search = $_POST['search'];
  }

  $consulta = "SELECT * FROM art WHERE articulo LIKE '%".$search."%' ORDER BY visitas LIMIT 5 "; #EL VIDEO USABA DOBLE COMILLAS ¿POR QUÉ? cap 2-3
  $resultado = $connect->query($consulta);
  $fila = mysqli_fetch_assoc($resultado);
  $total = mysqli_num_rows($resultado);
?>

<?php if($total>0 && $search!='') { ?>
  <h2 align ="center">Resultados de la búsqueda</h2>
  <?php do { ?>
    <div class="art">
    <?php echo $fila ['nombre'] ?> <br> <?php echo $fila ['articulo'] ?>
    </div>
  <?php }while($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } ?>
