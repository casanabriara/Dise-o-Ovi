<?php

require_once PATH_TO_CONTROLLERS.'/base.controller.php';
require_once PATH_TO_MODEL.'/clientes.php';

class LoginclientesController extends BaseController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Clientes();
    }

    public function Index(){
      $clientes = new Clientes();
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/loginclientes.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function AbrirSesion(){
      global $err_msgs;
        $documento = $_POST['documento'];
        $clientes = $this->model->ObtenerXDocumento($documento);

        $ok = false;
        if (isset($clientes->id_clientes) && $clientes->id_clientes > 0) {
              session_start();
                $_SESSION['usuario']=$clientes->documento;
                $_SESSION['id'] =  $clientes->id_clientes;
                $ok = true;
                $this->MensajeInfo("Bienvenido " . $clientes->nombres);
                header('Location: index.php');
        }
        else {
          header('Location: index.php?c=Loginclientes&a=Registrar&documento='.$documento);
        }

      }

      public function Registrar(){
        $clientes = new Clientes();
        $clientes->documento = $_REQUEST['documento'];
          require_once PATH_TO_VIEWS.'/header.php';
          require_once PATH_TO_VIEWS.'/registrarcliente.php';
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
            session_start();
              echo $clientes->id_clientes;
              $_SESSION['id']=  $clientes->id_clientes;
              $_SESSION['usuario']=$clientes->documento;
            //  $_SESSION['usuario']=$clientes->documento;
              $ok = true;
              $this->MensajeInfo("Bienvenido " . $clientes->nombres);
              header('Location: index.php');
          }
          else {

                require_once PATH_TO_VIEWS.'/header.php';
                require_once PATH_TO_VIEWS.'/registrarcliente.php';
                require_once PATH_TO_VIEWS.'/footer.php';
              }

      }

    public function CerrarSesion(){
      session_start();
      if(!isset($_SESSION['usuario']))
      {
        session_destroy();
        header('Location: index.php');
      }
      else
      {
        unset($_SESSION['usuario']);
        session_destroy();
        header('Location: index.php');
      }
    }
}
