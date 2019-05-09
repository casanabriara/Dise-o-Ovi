$(document).ready(function () {
	console.log("cargo");
	 $(document).on('click', '#carrito', function () {
       var datos = {
	   }
        console.log("entro");
        consulta('galeriagaseo.php', datos, function (result) {			
            bootbox.dialog({
                title: 'Insertar nuevo rol',
                message: result,
                buttons: {
                                    }
            });
        });
    });


});
$(document).on('click', '.ayuda', function () {
        //$('.registro-nuevo-usuario').click( function(){
        console.log("ingreso");
        consulta('Prueba.php', {}, function (result) {
            $('.historial').load('Buscar.php');
            console.log("ingreso");
        });
    });
