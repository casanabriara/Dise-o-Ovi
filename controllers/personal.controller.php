<?php
require_once PATH_TO_CONTROLLERS.'/seguridad.controller.php';
require_once PATH_TO_MODEL.'/personal.php';

class PersonalController extends SeguridadController{

    private $model;

    public function __CONSTRUCT(){
      parent::__construct();
        $this->model = new Personal();
    }

    public function Index(){
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/personal/index.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Detalle(){
        $personal = new Personal();

        if(isset($_REQUEST['id_personal'])){
            $personal = $this->model->Obtener($_REQUEST['id_personal']);
        }

        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/personal/detalle.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Nuevo(){
        $personal = new Personal();

        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/personal/nuevo.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function CambiarClave(){
        $personal = new Personal();

        if(isset($_REQUEST['id_personal'])){
            $personal = $this->model->Obtener($_REQUEST['id_personal']);
        }
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/personal/cambiarclave.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }
  public function GuardarClave(){
    $personal = new Personal();
    $personal->id_personal = $_REQUEST['id_personal'];
    $personal->contrasena = $_REQUEST['contrasena'];
    $this->model->ActualizarContrasena($personal);
    header('Location: index.php?c=Personal');
  }
    public function Guardar(){
        global $err_msgs;
        $ok = false;
        $usuarioOk = true;
        $personal = new Personal();

        $personal->id_personal = $_REQUEST['id_personal'];
        $personal->nombres = $_REQUEST['nombres'];
        $personal->apellidos = $_REQUEST['apellidos'];
        $personal->usuario = $_REQUEST['usuario'];

        if(!empty($_REQUEST['contrasena'])) // Solo cuando se crea un registro viene la clave
        {
          $personal->contrasena = $_REQUEST['contrasena'];
        }
        $personal->rol = $_REQUEST['rol'];
        $validaPersonal = new Personal();
        $validaPersonal = $this->model->ObtenerXUsuario($_REQUEST['usuario']);
        if(!empty($validaPersonal))
        {
          if($personal->id_personal != $validaPersonal->id_personal)
          {
            $this->MensajeError("!!! Nombre de usuario ya está en uso");
            $usuarioOk = false;
          }
        }
        if($usuarioOk)
        {
            if($personal->id_personal > 0)
            {
                $this->model->Actualizar($personal);
              $ok = true;
            }
            else{
              $personal->fecha_creacion = date("Y/m/d");
              $this->model->Registrar($personal);
              $ok = true;
            }
        }
        if($ok == true)
        {
          header('Location: index.php?c=Personal');
        }
        else {
              require_once PATH_TO_VIEWS.'/header.php';
              require_once PATH_TO_VIEWS.'/menu.php';
              if($personal->id_personal > 0)
              {
                require_once PATH_TO_VIEWS.'/personal/detalle.php';
              }
              else {
                require_once PATH_TO_VIEWS.'/personal/nuevo.php';
              }

              require_once PATH_TO_VIEWS.'/footer.php';
            }

    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_personal']);
        header('Location: index.php?c=Personal');
    }
}
