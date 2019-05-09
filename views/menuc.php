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
            <li><a href="index.php?c=homec"><i class="glyphicon glyphicon-shopping-cultery"></i>Platos </a></li>
              <li><a href="index.php?c=galeriagaseo"><i class="glyphicon glyphicon-shopping-cultery"></i>Gaseosas  </a></li>
              <li><a href="index.php?c=postres"><i class="glyphicon glyphicon-shopping-cultery"></i>Postres  </a></li>
              <li><a href="index.php?c=carrito"><i class="glyphicon glyphicon-shopping-cart"></i>  Carrito</a></li>
              <li class="active"><a href="./"><?php echo $_SESSION['usuario']; ?> <span class="sr-only">(current)</span></a></li>
              <li><a href="?c=Loginclientes&a=CerrarSesion">Cerrar sesión</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php
    if(isset($err_msgs))
    {
      echo "<div class='container alert alert-danger' role='alert'>";
      foreach ($err_msgs as $mensage) {
          echo "$mensage <br>";
          }

        echo "</div>";
      }
      ?>
