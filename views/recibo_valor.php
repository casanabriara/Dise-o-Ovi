<?php

  include("../controllers/conectar.php");
  $id=$_POST['1'];
  $sql="Insert into restbar.carrito values(1,:productos,:cantidad)";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":productos"=>$id,":cantidad"=>$cantidad));
  header("Location: carrito.php");
?>
