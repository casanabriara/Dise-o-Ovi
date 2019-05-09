<?php
require_once PATH_TO_CONTROLLERS.'/seguridad.controller.php';
require_once PATH_TO_MODEL.'/cargo.php';

class CargoController extends SeguridadController{

    private $model;

    public function __CONSTRUCT(){
      parent::__construct();
        $this->model = new Cargo();
    }

    public function Index(){
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/cargo/index.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Detalle(){
        $cargo = new Cargo();

        if(isset($_REQUEST['id_cargo'])){
            $cargo = $this->model->Obtener($_REQUEST['id_cargo']);
        }

        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/cargo/detalle.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Nuevo(){
        $cargo = new Cargo();

        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/cargo/detalle.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Guardar(){
        global $err_msgs;
        $ok = false;
        $cargoOk = true;
        $cargo = new Cargo();

        $cargo->id_cargo = $_REQUEST['id_cargo'];
        $cargo->nombre = $_REQUEST['nombre'];


        $valida = new Cargo();
        $valida = $this->model->ObtenerXNombre($_REQUEST['nombre']);
        if(!empty($valida))
        {
          if($cargo->id_cargo != $valida->id_cargo)
          {
            $this->MensajeError("!!! Nombre de cargo ya existe");
            $cargoOk = false;
          }
        }
        if($cargoOk)
        {
            if($cargo->id_cargo > 0)
            {
                $this->model->Actualizar($cargo);
              $ok = true;
            }
            else{
              $this->model->Registrar($cargo);
              $ok = true;
            }
        }
        if($ok == true)
        {
          header('Location: index.php?c=Cargo');
        }
        else {
              require_once PATH_TO_VIEWS.'/header.php';
              require_once PATH_TO_VIEWS.'/menu.php';
              require_once PATH_TO_VIEWS.'/cargo/detalle.php';

              require_once PATH_TO_VIEWS.'/footer.php';
            }

    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_cargo']);
        header('Location: index.php?c=Cargo');
    }
}
