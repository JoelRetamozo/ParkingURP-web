var tablaAutos;
var tablaMotos;
var tablaBicicletas;

function init(){

	$("#datosdelConductor").hide();

	$("#frmIngreso").on("submit", function(e){
		registrarControl(e);
	});
}

function ClearAll(){
	$("#codigo").val("");
	ClearFormBusqueda();
	ClearRegistroControl();
}

function ClearFormBusqueda(){
	$("#codigo").val("");
	$("#nombre").val("");
	$("#ape_paterno").val("");
	$("#ape_materno").val("");
	$("#carrera").val("");
	$('#tipo_persona').val("");

	mostrarFormBusqueda(false);
}
function ClearRegistroControl(){
	$("#placa").val("");
	$("#modelo").val("");
	$("#marca").val("");
	$("#color").val("");
	$("#id_persona").val("");
	$('#checkInvitado').prop("checked", false);
	mostrarAddInvitados($('#checkInvitado'));
}

function mostrarFormBusqueda(flag){
	if(flag){
		$("#datosdelConductor").show();
	}else{
		$("#datosdelConductor").hide();
	}
}

function buscarConductor(){

	var codigo = $("#codigo").val();

	if(codigo == ""){

	}else if(codigo == ""){

	}else{
		mostrarFormBusqueda(true);

		$.post("../ajax/C_Persona.php?op=buscarByCodigo", {codigo : codigo}, function(data, status){
		data = JSON.parse(data);

		$("#codigo").val(data.codigo);
		$("#nombre").val(data.nombre);
		$("#ape_paterno").val(data.ape_paterno);
		$("#ape_materno").val(data.ape_materno);
		$("#carrera").val(data.carrera);
		$('#tipo_persona').val(data.tipo_persona);

		});

		listarAutos(codigo);
		listarMotos(codigo);
	}
}

function listarAutos($codigo){
	tablaAutos = $('#tblAutos').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": false, //Paginacion y filtrado realizados por el servidor
		dom: "Bfrtip", //Definimos los elementos del control de tabla
		buttons: [
				],
		"ajax":
				{
					url: '../ajax/C_Vehiculo.php?op=listarVehiculo&codigo='+ $codigo +'&tipo_vehiculo=Auto',
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

function listarMotos($codigo){
	tablaMotos = $('#tblMotos').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": false, //Paginacion y filtrado realizados por el servidor
		dom: "Bfrtip", //Definimos los elementos del control de tabla
		buttons: [
				],
		"ajax":
				{
					url: '../ajax/C_Vehiculo.php?op=listarVehiculo&codigo='+ $codigo +'&tipo_vehiculo=Moto',
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

function datosVehiculo(placa, id_persona){
	$('#id_persona').val(id_persona);

	$.post("../ajax/C_WS_Vehiculo.php?op=mostrarVehiculo", {placa : placa}, function(data, status){
		data = JSON.parse(data);	

		$('#placa').val(data.placa);
		$("#marca").val(data.marca);
		$("#modelo").val(data.modelo);
		$("#color").val(data.color);
		$('#tipo_vehiculo').text(data.tipo_vehiculo);

		if(data.tipo_vehiculo == "Auto"){
			$("#icono_tipo_vehiculo").addClass('fa-car');
			$("#icono_tipo_vehiculo").removeClass('fa-motorcycle');
		}else if(data.tipo_vehiculo == "Moto"){
			$("#icono_tipo_vehiculo").addClass('fa-motorcycle');
			$("#icono_tipo_vehiculo").removeClass('fa-car');
		}else{
			$("#icono_tipo_vehiculo").removeClass('fa-car');
			$("#icono_tipo_vehiculo").removeClass('fa-motorcycle');
		}

	});
}

function mostrarAddInvitados(elemento){
	if(elemento.checked){

		var fieldInicio = '<div id="invitado_field_wrapper"><div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><label>Ingrese DNI: </label><input type="text" class="form-control" type="number" name="invitados[]" id="invitados[]" required="true"></div><div><button type="button" id="add_button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir</button></div></div>'
		$('#masInvitado').append(fieldInicio);


		var maxField = 6; //Input fields increment limitation
		var addButton = $('#add_button'); //Add button selector
		var wrapper = $('#invitado_field_wrapper'); //Input field wrapper
		var fieldHTML = '<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12"><label>Ingrese DNI: </label><input type="text" class="form-control" type="number" name="invitados[]" id="invitados[]" required="true"><button type="button" id="remove_button" class="btn btn-danger"><i class="fa fa-minus-circle"></i> Borrar</button></div>' 
		var x = 1; //Initial field counter is 1
		$(addButton).click(function(){ //Once add button is clicked
		    if(x < maxField){ //Check maximum number of input fields
		        x++; //Increment field counter
		        $(wrapper).append(fieldHTML); // Add field html
		    }
		});
		$(wrapper).on('click', '#remove_button', function(e){ //Once remove button is clicked
		    e.preventDefault();
		    $(this).parent('div').remove(); //Remove field html
		    x--; //Decrement field counter
		});
	}else{
		$('#invitado_field_wrapper').remove();
	}
}

function registrarControl(e){
	e.preventDefault();
	var formData = new FormData($("#frmIngreso")[0]);

	$.ajax({
		url: "../ajax/C_Control.php?op=guardar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos){
			bootbox.alert("Se registró correctamente.", function(){$(location).attr('href',"../vistas/controlarIngreso.php");});
		}
	});
}

init();