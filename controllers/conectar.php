<?php

	try{

		//Crear el objeto de conexion
		$base=new PDO("mysql:host:localhost; dbname=restbar","root","");
		//Activar la captura de errores
		$base-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//Definir el cotejamiento UTF8
		$base->exec("SET CHARACTER SET UTF8");

	}

	catch(Exception $e){

		echo "Error de conexion " . $e->getMessage() ;

	}

?>
