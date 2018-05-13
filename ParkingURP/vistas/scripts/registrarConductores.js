function init(){
	$("#estaCargando").hide();
	$("#formulario").on("submit", function(e){
		registrarConductor(e);
	});
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
			bootbox.alert(datos);
		}
	});
}

init();