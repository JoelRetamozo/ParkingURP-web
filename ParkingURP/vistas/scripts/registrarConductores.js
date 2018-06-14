function init(){
	$("#estaCargando").hide();

	$("#spanMsgError").hide();

	$("#formulario").on("submit", function(e){
		registrarConductor(e);
	});
}

function validarExcel(archivo){
	var aux = archivo.split('.');

	if (aux[aux.length - 1] == 'xls' || aux[aux.length - 1] == 'xlsx') {
		$("#btnRegistrar").prop("disabled", false);
		$("#divArchivo").removeClass('has-error');
		$("#spanMsgError").hide();
	}else{
		$("#btnRegistrar").prop("disabled", true);
		$("#divArchivo").addClass('has-error');
		$("#spanMsgError").show();
	}
}

function registrarConductor(e){
	e.preventDefault();

	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/C_Persona.php?op=registrarExcel",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		beforeSend: function(){
			$("#estaCargando").show();
		},

		complete:function(data){
			$("#estaCargando").hide();
		},

		success: function(datos){
			bootbox.alert(datos, function(){$(location).attr('href',"registrarConductor.php");});
		}
	});
}

init();