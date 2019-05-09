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
  <body>
    <nav class="navbar navbar-inverse ">
      <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">RESTBAR.NET</a>
              </div>
         <div id="navbar" class="navbar-collapse collapse">

                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="../homec/index.php?c=homec"><i class="glyphicon glyphicon-shopping-cultery"></i>Platos </a></li>
                      <li><a href="../clientes/index.php?c=galeriagaseo"><i class="glyphicon glyphicon-shopping-cultery"></i>Gaseosas  </a></li>
                      <li><a href="../clientes/index.php?c=postres"><i class="glyphicon glyphicon-shopping-cultery"></i>Postres  </a></li>
                      <li><a href="../personal/index.php?c=carrito"><i class="glyphicon glyphicon-shopping-cart"></i>  Carrito</a></li>
                      <li><a href="?c=Loginclientes&a=CerrarSesion">Cerrar sesión</a></li>
                    </ul>
         </div><!--/.nav-collapse -->
              </div>
              </nav>
              <div id="catalogoventana" style="margin-left: 450px;">
                  <?php
                  include("../controllers/conectar.php");
                  $codigo=$_GET["jajaja"];
                  $sql="select * From restbar.productos WHERE id_pruductos=" . $codigo;
                  $resultado=$base->prepare($sql);
                  $resultado->execute(array());

                  while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){


                echo "
                          <div class='col-sm-6 col-md-4'>
                              <div class='thumbnail' style='height:500px;'>
                                <img src='../platosimg/". $fila["ruta_imagen"] ."'style='height:170px; width:250px;'>
                                <div class='caption'>
                                <input type='text' name='id' value='".$codigo."'>
                                  <h3>". $fila['nombre'] ."<small class='text-right'><br>$". $fila['valor_producto'] ." Pesos</small></h3>
                                  <p>". $fila['descripcion'] . "</p>
                                    <ul>
                                      <li>". $fila['descripcion1'] . "</li>
                                      <li>". $fila['descripcion2'] . "</li>
                                      <li>". $fila['descripcion3'] . "</li>
                                    </ul>

                                      <select name='cbx_unidades' class='control-select form-control' >
                                      <option value=''>seleccionar</option>
                                      <option value='1'>1</option>
                                      <option value='2'>2</option>
                                      <option value='3'>3 </option>
                                      <option value='4'>4 </option>
                                      <option value='5'>5 </option>
                                      <option value='6'>6 </option>
                                      <option value='7'>7 </option>
                                      <option value='8'>8 </option>
                                      <option value='9'>9 </option>
                                      <option value='10'>10 </option>
                                      </select>
                                  <a href='recibo_valor.php?1=".$codigo."'><input type='submit' name='insertar' id='button' value='Enviar' class='btn btn-success btn-rounded'/></a>

                                </div>
                              </div>
                          </div>";

                  }
                  ?>
          </div>
