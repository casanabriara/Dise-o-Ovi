<?php

class BaseController{

    public function MensajeError($mensaje){
global $err_msgs;
        if(!empty($err_msgs))
        {
          array_push($err_msgs, $mensaje);
        }
        else {
          $err_msgs = array($mensaje);
        }
    }

    public function MensajeInfo($mensaje){
        if(isset($info_msgs))
        {
          array_push($info_msgs, $mensaje);
        }
        else {
          $info_msgs = array($mensaje);
        }
    }
}
