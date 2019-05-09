<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/theme.css" media="screen" title="no title">
      <link rel="stylesheet" href="../css/postres.css" media="screen" title="no title">
      <script type="text/javascript" src="../js/java.js"></script>
      <script type="text/javascript" src="../js/bootbox.min.js"></script>
      <script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
  </head>
  <body background="../img/fondo psgins inicio.jpg" style=" background-size: cover ">

    <form>
      <div id="catalogo" style="  width:1300px; height:550px;">
    <?php
    include("../controllers/conectar.php");
    $sql="select * From restbar.productos where tipo_producto ='postres'";
    $resultado=$base->prepare($sql);
    $resultado->execute(array());
    while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
      echo "<div class='col-sm-6 col-md-4'>
          <div class='thumbnail'>
            <img src='../platosimg/". $fila["ruta_imagen"] ."' style='height:170px; width:250px;'>
            <div class='caption'>
              <h3>". $fila['nombre'] ."<small class='text-right'>". $fila['valor_producto'] ."</small></h3>
              <p>". $fila['descripcion'] . "</p>
                <ul>
                  <li>". $fila['descripcion1'] . "</li>
                  <li>". $fila['descripcion2'] . "</li>
                  <li>". $fila['descripcion3'] . "</li>
                </ul>

              <p>
                <a href='../views/elementoscarrito.php?jajaja=". $fila['id_pruductos'] . "'class='btn btn-primary btn-block ' role='button'><i class='glyphicon glyphicon-shopping-cart'></i> Agregar al carrito</a>
              </p>
            </div>
          </div>
        </div>";
    }
    ?>
  </div>
    </form>
