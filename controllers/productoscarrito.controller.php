<?php
require_once PATH_TO_CONTROLLERS.'/seguridad.controller.php';
require_once PATH_TO_MODEL.'/clientes.php';

class productoscarritoController extends SeguridadController{

    private $model;
    public function __CONSTRUCT(){
      parent::__construct();
        $this->model = new productoscarritoController();
    }

    public function Index(){
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/productoscarrito/index.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

    public function Detalle(){
        $productoscarrito = new productoscarrito();

        if(isset($_REQUEST['$id_prodcarrito'])){
            $productoscarrito = $this->model->Obtener($_REQUEST['$id_prodcarrito']);
        }

        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/clientes/carrito.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }

public function Guardar(){
    global $err_msgs;
    $ok = false;
    $usuarioOk = true;
    $productoscarrito = new productoscarrito();

    $productoscarrito->$id_prodcarrito = $_REQUEST['$id_prodcarrito'];
    $productoscarrito->nombres = $_REQUEST['nombre_producto'];
    $productoscarrito->cantidad = $_REQUEST['cantidad'];
    $productoscarrito->valor_unitario = $_REQUEST['valor_unitario'];
    $productoscarrito->valor_total = $_REQUEST['valor_total'];
}

public function Eliminar(){
    $this->model->Eliminar($_REQUEST['id_prodcarrito']);
    header('Location: index.php?c=productoscarrito');
}
}
