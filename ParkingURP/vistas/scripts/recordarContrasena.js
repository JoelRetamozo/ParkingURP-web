function init(){
	$('#frmRecordarContra').hide();
}

function buscar(elemento){
	$.post("../ajax/C_Usuario.php?op=buscarCorreoByCodigo", {codigo : elemento}, function(data, status){
		if(data != null){
			data = JSON.parse(data);

			$('#mensajeCorreo').val("Ingrese el correo vinculado a este usuario <b/> Debe coincidir con " + data);
			$('#frmRecordarContra').show();
		}

	});
}

init();