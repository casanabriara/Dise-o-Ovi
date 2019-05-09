<?php
require_once PATH_TO_CONTROLLERS.'/base.controller.php';
require_once PATH_TO_MODEL.'/personal.php';

class LoginController extends BaseController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Personal();
    }

    public function Index(){
      $personal = new Personal();
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/login.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function AbrirSesion(){
      global $err_msgs;
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $personal = $this->model->ObtenerXUsuario($usuario);

        $ok = false;
        if (isset($personal->id_personal) && $personal->id_personal > 0) {
            if ($personal->contrasena == $contrasena) {
              session_start();
                $_SESSION['usuario']=$personal->usuario;
                $_SESSION['rol']=$personal->rol;
                $ok = true;
                $this->MensajeInfo("Bienvenido " . $personal->nombres);
              }
              else {
                  $ok = false;
                  $this->MensajeError("!!! Clave incorrecta");
              }
        }
        else {
          $personal = new Personal();
          $personal->usuario=$_POST['usuario'];
          $this->MensajeError("!!! Usuario no registrado");
        }
        if($ok == true)
        {
          header('Location: index.php');
        }
        else {

          require_once PATH_TO_VIEWS.'/header.php';
          require_once PATH_TO_VIEWS.'/login.php';
          require_once PATH_TO_VIEWS.'/footer.php';
        }

      }
    public function CerrarSesion(){
      session_start();
      if(!isset($_SESSION['usuario']) or !isset($_SESSION['rol']))
      {
        session_destroy();
        header('Location: index.php');
      }
      else
      {
        unset($_SESSION['usuario']);
        unset($_SESSION['rol']);
        session_destroy();
        header('Location: index.php');
      }
    }
}
