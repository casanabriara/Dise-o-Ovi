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
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?c=Home">Pagina Principal</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?c=personal">Personal</a></li>
                <li><a href="index.php?c=cargo">Cargos</a></li>
                <li><a href="../Productos/Frm_ListarProductos.php">carrito</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./"><?php echo $_SESSION['usuario']; ?> <span class="sr-only">(current)</span></a></li>
              <li><a href="?c=Login&a=CerrarSesion">Cerrar sesión</a></li>
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
