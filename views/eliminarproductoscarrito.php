<?php
	include("../controllers/conectar.php");
	$idproducto=$_GET["id"];
	$sql="Delete From restbar.productos_carrito where id_prodcarrito=" . $idproducto ;
	$resultado=$base->prepare($sql);
	$resultado->execute(array());
	header ("Location:../views/carrito.php");
	$resultado->closeCursor();

?>
