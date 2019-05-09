
  <?php
  define("PATH_TO_MODEL", $_SERVER['DOCUMENT_ROOT'].'\restbar.net\model');
  define("PATH_TO_CONTROLLERS", $_SERVER['DOCUMENT_ROOT'].'\restbar.net\controllers');
  define("PATH_TO_VIEWS", $_SERVER['DOCUMENT_ROOT'].'\restbar.net\views');
  require_once PATH_TO_MODEL."\conexion.php";
  global $err_msgs;
  global $info_msgs;
  $controller = 'pagina';
  session_start();
  if(!isset($_SESSION['usuario']))
  {
    $controller = 'loginclientes';
  }
  // Si no hay una sesión activa o no viene controlador
  if( !isset($_REQUEST['c']))
  {
      require_once PATH_TO_CONTROLLERS."/$controller.controller.php";

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
      require_once  PATH_TO_CONTROLLERS."/$controller.controller.php";
      $controller = ucwords($controller) . 'Controller';
      $controller = new $controller;

      // Llama la accion
      call_user_func( array( $controller, $accion ) );
  }
