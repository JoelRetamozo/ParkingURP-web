var tablaAutos;
var tablaMotos;
var tablaBicicletas;

function init(){
	$('#spanCodigoBusqueda').hide();
	var codigo = $("#codigo").val();

	if(codigo == ''){
		$("#datosdelConductor").hide();

		$("#frmIngreso").on("submit", function(e){
			registrarControl(e);
		});

		var DNIInvitados = $("#codigoInvitado").val();
		if(DNIInvitados == ''){
			ClearAll();
		}else{
			$('.nav-tabs a[href="#tab_2"]').tab('show');
			var placa = $("#placaNuevoRegistro").val();
			if(placa == ''){
			}else{
				var tipoVehiculo = $('#tipoVehiculoNuevoRegistro').val();

				registrarInvitado();
				registrarVehiculo(DNIInvitados, placa);

				if(tipoVehiculo == 'Bicicleta'){
					console.log("Consultado datos de la Bici");
					datosBici(placa, DNIInvitados, "0");
				}else{
					$('#modal-default').modal('show');
					datosVehiculo(placa, DNIInvitados);
				}
			}
		}
	}else{
		validarConductor(codigo);
		var placa = $("#placaNuevoRegistro").val();
		if(placa == ''){
		}else{
			var tipoVehiculo = $('#tipoVehiculoNuevoRegistro').val();

			if(tipoVehiculo == 'Bicicleta'){
				datosBici(placa, codigo, "0");
			}else{
				$('#modal-default').modal('show');
				datosVehiculo(placa, codigo);
			}
			registrarVehiculo(codigo, placa);
			tablaAutos.ajax.reload();
			tablaMotos.ajax.reload();
		}
	}
}

function ClearAll(){
	ClearFormBusqueda();
	ClearRegistroControl();
	ClearInvitado();
}

function ClearFormBusqueda(){
	$("#codigo").val("");
	$("#nombre").val("");
	$("#ape_paterno").val("");
	$("#ape_materno").val("");
	$("#carrera").val("");
	$('#tipo_persona').val("");
	$('#codigoAEnviar').val("");

	tabBicicletaMarcado(false);

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

function ClearInvitado(){

	$("#codigoInvitado").val("");
	$("#nombreInvitado").val("");
	$("#ape_paternoInvitado").val("");
	$("#ape_maternoInvitado").val("");
}

function mostrarFormBusqueda(flag){
	if(flag){
		$("#datosdelConductor").show();
	}else{
		$("#datosdelConductor").hide();
	}
}

function buscarConductor(codigo){

	if(codigo == ""){

	}else if(codigo == ""){

	}else{

		$.post("../ajax/C_Persona.php?op=buscarByCodigo", {codigo : codigo}, function(data, status){
		data = JSON.parse(data);

		if(data != null){
			mostrarFormBusqueda(true);
			$("#nombre").val(data.nombre);
			$("#ape_paterno").val(data.ape_paterno);
			$("#ape_materno").val(data.ape_materno);
			if(data.carrera != null){
				$("#divCarrera").show();
				$("#carrera").val(data.carrera);
			}else{
				$("#divCarrera").hide();
			}
			$('#tipo_persona').val(data.tipo_persona);

			$('#codigoAEnviarAuto').val(codigo);
			$('#codigoAEnviarMoto').val(codigo);
			$('#codigoAEnviarBici').val(codigo);

			listarAutos(codigo);
			listarMotos(codigo);
		}else{
			$('#spanCodigoBusqueda').text("El codigo de Conductor no existe");
			$('#spanCodigoBusqueda').show();
		}

		});
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

function datosVehiculo(placa, codigo){
	$('#codigo_control').val(codigo);

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

	$('#modal-default').modal('handleUpdate');
}

function registrarVehiculo(codigo, placa){
	var marca = $('#marcaNuevoRegistro').val();
	var color = $('#colorNuevoRegistro').val();
	var tipoVehiculo = $('#tipoVehiculoNuevoRegistro').val();

	$.ajax({
		url: "../ajax/C_Vehiculo.php?op=registrar",
		type: "post",
		data: {
			placa: placa,
			marca: marca,
			color: color,
			tipo_vehiculo: tipoVehiculo,
			codigo: codigo
		},

		success: function(datos){
			bootbox.alert(datos);
		}
	});
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
			bootbox.alert("Se registró correctamente.", function(){$(location).attr('href',"../vistas/simular.php");});
		}
	});
}

function datosBici(placa, codigo, quagga){
	$('#codigo_Bici_control').val(codigo);
	$('#placa_Bici_control').val(placa);

	$.post("../ajax/C_Vehiculo.php?op=mostrarBici", {placa: placa, codigo: codigo}, function(data, status){
		console.log(data);
		if(data != null){
			if(quagga == "1"){
				Quagga.stop();
			}
			data = JSON.parse(data);
			var descripcion = data.descripcion;
			console.log("Esta es la descripcion de la Bicicleta: " + descripcion);
			separado = descripcion.split(";");

			$('#marca_modal_bici').val(separado[0]);
			$("#color_modal_bici").val(separado[1]);
		}

	});

	$('#modal-bici').modal('show');

}

function registrarInvitado(){
	var codigo = $('#codigoInvitado').val();
	var nombre = $('#nombreInvitado').val();
	var ape_paterno = $('#ape_paternoInvitado').val();
	var ape_materno = $('#ape_maternoInvitado').val();

	$.ajax({
		url: "../ajax/C_Persona.php?op=registrarInvitado",
		type: "post",
		data: {
			codigo: codigo,
			nombre: nombre,
			ape_paterno: ape_paterno,
			ape_materno: ape_materno
		},

		success: function(datos){
		}
	});
}

function tabBicicletaMarcado(flag){
	if(flag){
		var divScanner = '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="barcode-scanner"></div>';
		$('#divScannerControlBici').append(divScanner);

		Quagga.init({
			inputStream: {
				name: "Live",
				type: "LiveStream",
				numOfWorkers: 4,
				target: document.querySelector("#barcode-scanner")
			},
			decoder: {
				readers: ["code_128_reader"]
				}
			},  function(err){
				if(err){console.log(err); return}

				Quagga.start();
				$('#estaPrendidoScanner').val("1");
		});

		Quagga.onDetected(function(result){
			/*var code = result.codeResult.code;
			var codigo = $("#codigo").val();
			datosBici(code, codigo, "1");*/

		});
	}else{
		var estaPrendidoScanner = $('#estaPrendidoScanner').val();
		if(estaPrendidoScanner == "1"){
			Quagga.stop();
			$('#estaPrendidoScanner').val("");
		}
		$('#barcode-scanner').remove();
	}
}

function desactivar(placa, codigo){

	bootbox.confirm("¿Esta seguro de desea eliminar el Vehiculo con placa " + placa + "?", function(result){
		if(result){
			$.post("../ajax/C_Vehiculo.php?op=eliminarVehiculo", {placa : placa, codigo : codigo}, function(e){
				bootbox.alert(e);
				tablaAutos.ajax.reload();
				tablaMotos.ajax.reload();
			});
		}
	});
}

function registrarControlBici(e){
	e.preventDefault();
	var formData = new FormData($("#frmIngresoBici")[0]);

	$.ajax({
		url: "../ajax/C_Control.php?op=guardar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos){
			bootbox.alert("Se registró correctamente.", function(){$(location).attr('href',"../vistas/simular.php");});
		}
	});
}

function validarConductor(codigo){

	if(codigo.length == 8 || codigo.length == 9){

		$('#spanCodigoBusqueda').hide();
		$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Auto', codigo: codigo}, function(data, status){
			if(data != null){
				data = JSON.parse(data);
				if((data.estado) == '2'){
					$('#spanCodigoBusqueda').text("El Conductor está dentro del estacionamiento");
					$('#spanCodigoBusqueda').show();
				}else{
					$('#spanCodigoBusqueda').hide();
					buscarConductor(codigo);

					if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
						$('#btnAgregarAuto').prop('disabled', false);
					}else{
						$('#btnAgregarAuto').text('Ya tiene registrado 3 Autos');
						$('#btnAgregarAuto').prop('disabled', true);
					}
				}
			}

		});

		$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Moto', codigo: codigo}, function(data, status){
			if(data != null){
				data = JSON.parse(data);
				if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
						$('#btnAgregarMoto').prop('disabled', false);
					}else{
						$('#btnAgregarMoto').text('Ya tiene registrado 3 Motos');
						$('#btnAgregarMoto').prop('disabled', true);
					}
			}

		});

		$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Bicicleta', codigo: codigo}, function(data, status){
			if(data != null){
				data = JSON.parse(data);
				if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
						$('#btnAgregarBicicleta').prop('disabled', false);
					}else{
						$('#btnAgregarBicicleta').text('Ya tiene registrado 3 Bicicletas');
						$('#btnAgregarBicicleta').prop('disabled', true);
					}
			}

		});
	}else{
		$('#spanCodigoBusqueda').text("Ingrese un codigo de Conductor correcto");
		$('#spanCodigoBusqueda').show();
	}
	
}

init();