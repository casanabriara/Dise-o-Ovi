$(document).ready(function () {
	console.log("cargo");
	 $(document).on('click', '#btn1', function () {
       var datos = {
	   }
        console.log("entro");
        consulta('filete.php', datos, function (result) {
            bootbox.dialog({
                title: 'Insertar nuevo rol',
                message: result,
                buttons: {
                                    }
            });
        });
    });


});
