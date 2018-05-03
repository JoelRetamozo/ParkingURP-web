var tabla;

//Funcion que se va a ejecutar al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit", function(e){
		guardaryeditar(e);
	});

	$("#spanCodigo").hide();
	$("#spanPlaca").hide();

	$("#btnActivar").hide();
	$("#btnDesactivar").hide();

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
	$('#id_tipo_persona').val("000");
	$('#id_tipo_persona').selectpicker('render');

	$("#codigo").val("");
	$("#nombre").val("");
	$("#ape_paterno").val("");
	$("#ape_materno").val("");
	$("#celular").val("");
	$("#correo").val("");
	
	$('#id_carrera').val("000");
	$('#id_carrera').selectpicker('render');

	$('#id_color').val("000");
	$('#id_color').selectpicker('render');

	$('#id_tipo_vehiculo').val("000");
	$('#id_tipo_vehiculo').selectpicker('render');

	$("#placa").val("");
	$("#modelo").val("");

	$("#divCodigo").removeClass('has-error');
	$("#divCodigo").removeClass('has-success');
	$("#divPlaca").removeClass('has-error');
	$("#divPlaca").removeClass('has-success');
	$("#spanCodigo").hide();
	$("#spanPlaca").hide();

}

function queTipoPersona(elemento){
	$("#divCodigo").removeClass('has-error');
	$("#divCodigo").removeClass('has-success');
	$("#codigo").val("");
	$("#spanCodigo") .hide();
	if(elemento.value!="1"){
		$("#selectCarrera").hide();
		$("#id_carrera").prop("required", false);
		$('#id_carrera').val("2");
		$('#id_carrera').selectpicker('render');
	}else{
		$("#selectCarrera").show();
		$("#id_carrera").prop("required", true);
	}
}

function llenarMarcaVehiculo(elemento){
	$.post("../ajax/C_Marca_Vehiculo.php?op=selectMarcaVehiculo&id_tipo_vehiculo=" + elemento, function(r){
		$("#id_marca_vehiculo").html(r);
		$('#id_marca_vehiculo').selectpicker('refresh');
	});
}

function validarCod(elemento){

$.post("../ajax/C_Persona.php?op=existeCodigo", {codigo : elemento.value}, function(data, status){
		data = JSON.parse(data);

		if($("#id_tipo_persona").val() == "000"){
		$("#spanCodigo") .hide();
	}else if($("#id_tipo_persona").val() == "1"){
		if((elemento.value).length == 9){
			$("#spanCodigo").hide();
			$("#btnGuardar").prop("disabled", false);
			if(data.count != 0){
				$("#spanCodigo") .show();
				$("#iconErrorCodigo").prop("class", "fa fa-times-circle-o");
				$("#divCodigo").addClass('has-error');
				$("#divCodigo").removeClass('has-success');
				$("#spanCodigo").text("Ya existe este codigo");
				$("#btnGuardar").prop("disabled", true);
			}else{
				$("#iconErrorCodigo").prop("class", "fa fa-check");
				$("#divCodigo").removeClass('has-error');
				$("#divCodigo").addClass('has-success');
				$("#spanCodigo").text("");
				$("#spanCodigo") .hide();
				$("#btnGuardar").prop("disabled", false);
			}
		}else{
			$("#spanCodigo").show();
			$("#divCodigo").addClass('has-error');
			$("#divCodigo").removeClass('has-success');
			$("#spanCodigo").text("Ingrese un codigo de 9 digitos");
			$("#btnGuardar").prop("disabled", true);
		}
	}else{
		if((elemento.value).length == 8){
			$("#spanCodigo").hide();
			if(data.count != 0){
				$("#spanCodigo").show();
				$("#iconErrorCodigo").prop("class", "fa fa-times-circle-o");
				$("#divCodigo").addClass('has-error');
				$("#divCodigo").removeClass('has-success');
				$("#spanCodigo").text("Ya existe este DNI");
				$("#btnGuardar").prop("disabled", true);
			}else{
				$("#iconErrorCodigo").prop("class", "fa fa-check");
				$("#divCodigo").removeClass('has-error');
				$("#divCodigo").addClass('has-success');
				$("#spanCodigo").text("");
				$("#spanCodigo").hide();
				$("#btnGuardar").prop("disabled", false);
			}
		}else{
			$("#spanCodigo").show();
			$("#divCodigo").addClass('has-error');
			$("#divCodigo").removeClass('has-success');
			$("#spanCodigo").text("Ingrese un DNI de 8 digitos");
			$("#btnGuardar").prop("disabled", true);
		}
	}
	});
};

function validaPlaca(elemento){
	$.post("../ajax/C_Vehiculo.php?op=existePlaca", {placa : elemento}, function(data, status){
		data = JSON.parse(data);

			if(data.count != 0){
				$("#spanPlaca").show();
				$("#iconErrorPlaca").prop("class", "fa fa-times-circle-o");
				$("#divPlaca").addClass('has-error');
				$("#divPlaca").removeClass('has-success');
				$("#spanPlaca").text("Ya existe esta placa");
				$("#btnGuardar").prop("disabled", true);
			}else{
				$("#spanPlaca").hide();
				$("#iconErrorPlaca").prop("class", "fa fa-check");
				$("#divPlaca").removeClass('has-error');
				$("#divPlaca").addClass('has-success');
				$("#spanPlaca").text("");
				$("#btnGuardar").prop("disabled", false);
			}
	});
};

//funcion mostrar formulario
function mostrarform(flag){
	limpiar();

	if(flag){
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled", false);
		$("#btnActivar").prop("disabled", false);
		$("#btnDesactivar").prop("disabled", false);
		$("#btnNuevo").hide();
	}else{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnNuevo").show();

		$("#id_persona").prop("disabled", false);
	$("#id_tipo_persona").prop("disabled", false);
	$("#codigo").prop("disabled", false);
	$("#nombre").prop("disabled", false);
	$("#ape_paterno").prop("disabled", false);
	$("#ape_materno").prop("disabled", false);
	$("#celular").prop("disabled", false);
	$("#correo").prop("disabled", false);
	$("#id_carrera").prop("disabled", false);

	$("#id_vehiculo").prop("disabled", false);
	$("#placa").prop("disabled", false);
	$("#modelo").prop("disabled", false);
	$("#id_color").prop("disabled", false);
	$("#id_tipo_vehiculo").prop("disabled", false);
	$("#id_marca_vehiculo").prop("disabled", false);
	$("#spanCodigo").hide();
	$("#spanPlaca").hide();
	}
}

//Funcion cancelarform
function cancelarform(){
	limpiar();
	$("#btnGuardar").show();
	$("#btnActivar").hide();
	$("#btnDesactivar").hide();

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

function activemos(){
	$("#btnGuardar").show();
	$("#btnActivar").prop("disabled", true);
			
			$("#btnActivar").hide();
			$("#btnDesactivar").hide();
	var id_persona = $("#id_persona").val();

	$.ajax({
		url: "../ajax/C_Usuario.php?op=activar",
		type: "POST",
		data: {
			"id_persona": id_persona
		},

		success: function(datos){
			bootbox.alert(datos);
			mostrarform(false);
			tabla.ajax.reload();
		}
	});
}

function desactivemos(){
	$("#btnGuardar").show();

	$("#btnDesactivar").prop("disabled", true);
			
			$("#btnActivar").hide();
			$("#btnDesactivar").hide();
	var id_persona = $("#id_persona").val();

	$.ajax({
		url: "../ajax/C_Usuario.php?op=desactivar",
		type: "POST",
		data: {
			"id_persona": id_persona
		},

		success: function(datos){
			bootbox.alert(datos);
			mostrarform(false);
			tabla.ajax.reload();
		}
	});
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
			guardarUsuario(datos);
			guardaryeditarVehiculo(datos);
		}
	});
}

function guardarUsuario(id_persona_new){
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/C_Usuario.php?op=guardar&id_persona_new=" + id_persona_new,
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos){
		}
	});
}

function guardaryeditarVehiculo(id_persona_new){

	var formData = new FormData($("#formulario")[0]);

		$.ajax({
		url: "../ajax/C_Vehiculo.php?op=guardaryeditar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos){
			guardarPersonaXVehiculo(id_persona_new, datos);
		}
	});
}

function guardarPersonaXVehiculo(id_persona_new, id_vehiculo_new){

		$.ajax({
		url: "../ajax/C_Persona_X_Vehiculo.php?op=guardar",
		type: "POST",
		data: {
			"id_persona": id_persona_new,
			"id_vehiculo": id_vehiculo_new
		},

		success: function(datos){
			bootbox.alert("Se registró exitosamente.");
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

		$('#id_tipo_persona').val(data.id_tipo_persona);
		$('#id_tipo_persona').selectpicker('render');

		$("#codigo").val(data.codigo);
		$("#nombre").val(data.nombre);
		$("#ape_paterno").val(data.ape_paterno);
		$("#ape_materno").val(data.ape_materno);
		$("#celular").val(data.celular);
		$("#correo").val(data.correo);

		$('#id_carrera').val(data.id_carrera);
		$('#id_carrera').selectpicker('render');
	});

	$.post("../ajax/C_Vehiculo.php?op=mostrar", {id_persona : id_persona}, function(data, status){
		data = JSON.parse(data);

		$("#id_vehiculo").val(data.id_vehiculo);		

		$("#placa").val(data.placa);
		$("#modelo").val(data.modelo);

		$('#id_color').val(data.id_color);
		$('#id_color').selectpicker('render');

		$('#id_tipo_vehiculo').val(data.id_tipo_vehiculo);
		$('#id_tipo_vehiculo').selectpicker('render');

		console.log("Tipo de Vehiculo: " + $('#id_tipo_vehiculo').val());

		llenarMarcaVehiculo(data.id_tipo_vehiculo);

		$('#id_marca_vehiculo').val(data.id_marca_vehiculo);
		$('#id_marca_vehiculo').selectpicker('render');
		$('#id_marca_vehiculo').selectpicker('refresh');
	});
}

function activar(id_persona){

	mostrar(id_persona);

	$("#btnGuardar").hide();
	$("#btnActivar").show();

	$("#id_persona").prop("disabled", true);
	$("#id_tipo_persona").prop("disabled", true);
	$("#codigo").prop("disabled", true);
	$("#nombre").prop("disabled", true);
	$("#ape_paterno").prop("disabled", true);
	$("#ape_materno").prop("disabled", true);
	$("#celular").prop("disabled", true);
	$("#correo").prop("disabled", true);
	$("#id_carrera").prop("disabled", true);

	$("#id_vehiculo").prop("disabled", true);
	$("#placa").prop("disabled", true);
	$("#modelo").prop("disabled", true);
	$("#id_color").prop("disabled", true);
	$("#id_tipo_vehiculo").prop("disabled", true);
	$("#id_marca_vehiculo").prop("disabled", true);
}

function desactivar(id_persona){

	mostrar(id_persona);

	$("#btnGuardar").hide();
	$("#btnDesactivar").show();

	$("#id_persona").prop("disabled", true);
	$("#id_tipo_persona").prop("disabled", true);
	$("#codigo").prop("disabled", true);
	$("#nombre").prop("disabled", true);
	$("#ape_paterno").prop("disabled", true);
	$("#ape_materno").prop("disabled", true);
	$("#celular").prop("disabled", true);
	$("#correo").prop("disabled", true);
	$("#id_carrera").prop("disabled", true);

	$("#id_vehiculo").prop("disabled", true);
	$("#placa").prop("disabled", true);
	$("#modelo").prop("disabled", true);
	$("#id_color").prop("disabled", true);
	$("#id_tipo_vehiculo").prop("disabled", true);
	$("#id_marca_vehiculo").prop("disabled", true);
}

init();