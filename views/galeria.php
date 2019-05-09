<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<h2>Ejemplo de slide</h2> 

	<?php
		include("conexion.php");
		$sql = "SELECT archivoimg FROM facturacion.subirimagenes";
		$resultado=$base->prepare($sql);
		$resultado->execute(array());
		$fila=$resultado->fetch(PDO::FETCH_ASSOC);
		$num_filas=$resultado->rowCount();
	?>
    <div class="container">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
              <div class="item active">
                <img src="../imagenes/<?php echo $fila["archivoimg"] ?>" style="width:50%; height:50%;">
        </div>
        <?php
            while($fila=$resultado->fetch(PDO::FETCH_ASSOC)):
        ?>
              <div class="item">
                <img src="../imagenes/<?php echo $fila["archivoimg"] ?>" style="width:50%;height:50%;">
              </div>
        <?php
            endwhile;
        ?>
         </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

</body>
</html>
