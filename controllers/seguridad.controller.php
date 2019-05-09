<?php
require_once PATH_TO_CONTROLLERS.'/base.controller.php';

class SeguridadController extends BaseController{

  public function __CONSTRUCT(){
    // Validar que se halla iniciado sesión

    if(!isset($_SESSION['usuario']))
    {
      header('Location: index.php');
    }
  }

}
