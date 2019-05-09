<?php

require_once PATH_TO_CONTROLLERS.'/seguridad.controller.php';
require_once PATH_TO_MODEL.'/carrito.php';
require_once PATH_TO_MODEL.'/productos.php';

class carritoController extends SeguridadController{

    private $modelCarrito;
    private $modelProducto;

    public function __CONSTRUCT(){
      parent::__construct();
        $this->modelCarrito = new Carrito();
        $this->modelProducto = new Productos();
    }

    public function Index(){
        require_once PATH_TO_VIEWS.'/headerB.php';
        require_once PATH_TO_VIEWS.'/menuc.php';
        require_once PATH_TO_VIEWS.'/carrito/index.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }


    public function Agregar(){
        $producto = new Productos();
        if(isset($_REQUEST['id_pruductos'])){
            $producto = $this->modelProducto->Obtener($_REQUEST['id_pruductos']);
        }

        require_once PATH_TO_VIEWS.'/headerB.php';
        require_once PATH_TO_VIEWS.'/menuc.php';
        require_once PATH_TO_VIEWS.'/carrito/agregar.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }


    public function Guardar(){

        global $err_msgs;
        $ok = false;
        $carrito = new Carrito();
        $carrito->id_clientes = $_SESSION['id'];
        $carrito->id_productos = $_REQUEST['id_pruductos'];
        $carrito->cantidad = $_REQUEST['cantidad'];

        $validaCarrito = new Carrito();
        $validaCarrito = $this->modelCarrito->ObtenerXClienteProducto($carrito->id_clientes,$carrito->id_productos);
        if(!empty($validaCarrito))
        {
          $carrito->id_carrito = $validaCarrito->id_carrito;
            $this->modelCarrito->Actualizar($carrito);
            $ok = true;
        }
        else {
            $this->modelCarrito->Registrar($carrito);
            $ok = true;
        }
        if($ok == true)
        {
          header('Location: index.php?c=carrito');
        }
        else {
                require_once PATH_TO_VIEWS.'/header.php';
                require_once PATH_TO_VIEWS.'/menuc.php';
                require_once PATH_TO_VIEWS.'/carrito/agregar.php';
                require_once PATH_TO_VIEWS.'/footer.php';
            }
    }

    public function Eliminar(){
        $this->modelCarrito->Eliminar($_REQUEST['id_carrito']);
        header('Location: index.php?c=carrito');
    }
}
