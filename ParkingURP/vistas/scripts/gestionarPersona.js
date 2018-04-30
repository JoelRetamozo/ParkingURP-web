var tabla;

//Funcion que se va a ejecutar al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit", function(e){
		guardaryeditar(e);
	});

	$.post("../ajax/C_Tipo_Persona.php?op=selectTipoPersonaMovil", function(r){
		$("#id_tipo_persona").html(r);
		$('#id_tipo_persona').selectpicker('refresh');
	});

	$.post("../ajax/C_Carrera.php?op=selectCarrera", function(r){
		$("#id_carrera").html(r);
		$('#id_carrera').selectpicker('refresh');
	});

	$.post("../ajax/C_Tipo_Vehiculo.php?op=selectTipoVehiculo", function(r){
		$("#id_tipo_vehiculo").html(r);
		$('#id_tipo_vehiculo').selectpicker('refresh');
	});

	$.post("../ajax/C_Color.php?op=selectColor", function(r){
		$("#id_color").html(r);
		$('#id_color').selectpicker('refresh');
	});
}

//Funcion limpiar
function limpiar(){
	$("#id_tipo_persona").val("");
	$("#codigo").val("");
	$("#nombre").val("");
	$("#ape_paterno").val("");
	$("#ape_materno").val("");
	$("#celular").val("");
	$("#correo").val("");
	$("#id_carrera").val("");

	$("#placa").val("");
	$("#modelo").val("");

}

//funcion mostrar formulario
function mostrarform(flag){
	limpiar();
	if(flag){
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled", false);
	}else{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
	}
}

//Funcion cancelarform
function cancelarform(){
	limpiar();
	mostrarform(false);
}

//Funcion Listar
function listar(){
	tabla = $('#tbllistado').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
		dom: "Bfrtip", //Definimos los elementos del control de tabla
		buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		"ajax":
				{
					url: '../ajax/C_Persona.php?op=listar',
					type: "get",
					dataType: "json",
					error: function(e){
						console.log(e.responseText);
					}
				},
		"bDestroy": true,
		"iDisplayLength": 15, //Paginacion de 15 en 15
		"order": [[ 0, "desc" ]] //Ordenar(columna, orden)

	}).DataTable();
}

//Funcion Actualizar
function guardaryeditar(e){
	e.preventDefault(); //No se activara la accion predeterminada del evento
	$("#btnGuardar").prop("disabled", true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/C_Persona.php?op=guardaryeditar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos){
			guardaryeditarVehiculo(datos);
			bootbox.alert(datos);
		}
	});
}

function guardaryeditarVehiculo($id_persona_new){

	var formData = new FormData($("#formulario")[0]);

		$.ajax({
		url: "../ajax/C_Vehiculo.php?op=guardaryeditar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos){
			guardarPersonaXVehiculo($id_persona_new, datos);
			bootbox.alert(datos);
		}
	});
}

function guardarPersonaXVehiculo($id_persona_new, $id_vehiculo_new){

		$.ajax({
		url: "../ajax/C_Persona_X_Vehiculo.php?op=guardar",
		type: "POST",
		data: {
			"id_persona": $id_persona_new,
			"id_vehiculo": $id_vehiculo_new
		},
		//contentType: false,
		//processData: false,

		success: function(datos){
			bootbox.alert(datos);
			mostrarform(false);
			tabla.ajax.reload();
		}
	});

	limpiar();
}

function mostrar(id_persona){
	$.post("../ajax/C_Persona.php?op=mostrar", {id_persona : id_persona}, function(data, status){
		data = JSON.parse(data);
		mostrarform(true);

		$("#id_persona").val(data.id_persona);		

		$("#id_tipo_persona").val(data.id_tipo_persona);
		$("#codigo").val(data.codigo);
		$("#nombre").val(data.nombre);
		$("#ape_paterno").val(data.ape_paterno);
		$("#ape_materno").val(data.ape_materno);
		$("#celular").val(data.celular);
		$("#correo").val(data.correo);
		$("#id_carrera").val(data.id_carrera);
	});

	/*$.post("../ajax/C_Vehiculo.php?op=mostrar", {id_vehiculo : id_vehiculo}, function(data, status){
		data = JSON.parse(data);
		mostrarform(true);

		$("#id_vehiculo").val(data.id_vehiculo);		

		$("#placa").val(data.id_placa);
		$("#modelo").val(data.modelo);
		$("#id_color").val(data.id_color);
		$("#id_tipo_vehiculo").val(data.id_tipo_vehiculo);
	});*/
}

init();