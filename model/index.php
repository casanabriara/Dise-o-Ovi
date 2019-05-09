<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="./css/bootstrap-theme.css" media="screen" title="no title">
    <link rel="stylesheet" href="./css/theme.css" media="screen" title="no title">
  </head>
  <body
  <?php
  require_once 'model/conexion.php';

  $controller = 'login';

  // Todo esta lógica hara el papel de un FrontController
  if(!isset($_REQUEST['c']))
  {
      require_once "controller/$controller.controller.php";
      $controller = ucwords($controller) . 'Controller';
      $controller = new $controller;
      $controller->Index();
  }
  else
  {
      // Obtenemos el controlador que queremos cargar
      $controller = strtolower($_REQUEST['c']);
      $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

      // Instanciamos el controlador
      require_once "controller/$controller.controller.php";
      $controller = ucwords($controller) . 'Controller';
      $controller = new $controller;

      // Llama la accion
      call_user_func( array( $controller, $accion ) );
  }

    <script src="./js/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
