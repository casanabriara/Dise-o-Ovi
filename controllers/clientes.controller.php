<?php
require_once PATH_TO_CONTROLLERS.'/seguridad.controller.php';
require_once PATH_TO_MODEL.'/clientes.php';

class ClientesController extends SeguridadController{

    private $model;

    public function __CONSTRUCT(){
      parent::__construct();
        $this->model = new Clientes();
    }

    public function Index(){
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/clientes/index.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Detalle(){
        $clientes = new Clientes();

        if(isset($_REQUEST['id_clientes'])){
            $clientes = $this->model->Obtener($_REQUEST['id_clientes']);
        }

        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/clientes/detalle.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Nuevo(){
        $clientes = new Clientes();

        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/clientes/nuevo.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }


    public function Guardar(){
        global $err_msgs;
        $ok = false;
        $clienteOk = true;
        $clientes = new Clientes();

        $clientes->id_clientes = $_REQUEST['id_clientes'];
        $clientes->nombres = $_REQUEST['nombres'];
        $clientes->apellidos = $_REQUEST['apellidos'];
        $clientes->documento = $_REQUEST['documento'];
        $clientes->celular = $_REQUEST['celular'];
        $clientes->correo = $_REQUEST['correo'];
        $clientes->puntos_disponibles = $_REQUEST['puntos_disponibles'];
        $clientes->puntos_consumidos = $_REQUEST['puntos_consumidos'];


        $validaCliente = new Clientes();
        $validaCliente = $this->model->ObtenerXDocumento($_REQUEST['documento']);
        if(!empty($validaCliente))
        {
          if($clientes->id_clientes != $validaCliente->id_clientes)
          {
            $this->MensajeError("!!! Número de documento ya existe");
            $clienteOk = false;
          }
        }
        if($clienteOk)
        {
            if($clientes->id_clientes > 0)
            {
                $this->model->Actualizar($clientes);
              $ok = true;
            }
            else{
              $this->model->Registrar($clientes);
              $ok = true;
            }
        }
        if($ok == true)
        {
          header('Location: index.php?c=Clientes');
        }
        else {
              require_once PATH_TO_VIEWS.'/header.php';
              require_once PATH_TO_VIEWS.'/menu.php';
              if($clientes->id_clientes > 0)
              {
                require_once PATH_TO_VIEWS.'/clientes/detalle.php';
              }
              else {
                require_once PATH_TO_VIEWS.'/clientes/nuevo.php';
              }

              require_once PATH_TO_VIEWS.'/footer.php';
            }

    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_clientes']);
        header('Location: index.php?c=Clientes');
    }
}
