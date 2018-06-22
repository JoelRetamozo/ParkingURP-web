var tablaAutos;
var tablaMotos;
var tablaBicicletas;

function init(){
	$("#frmIngreso").on("submit", function(e){
			registrarControl(e);
		});
	$('#spanCodigoBusqueda').hide();
	var codigo = $("#codigo").val();

	if(codigo == ''){
		$("#datosdelConductor").hide();

		var DNIInvitados = $("#codigoInvitado").val();
		if(DNIInvitados == ''){
			console.log("Viene del Inicio");
			ClearAll();
		}else{
			$('.nav-tabs a[href="#tab_2"]').tab('show');
			var placa = $("#placaNuevoRegistro").val();
			if(placa == ''){
				console.log("Viene de Cancelar Registro Invitado");
			}else{
				console.log("Viene de registrar Vehiculo de Invitado y al Invitado");
				registrarInvitado();
				registrarVehiculo(DNIInvitados, placa);

				var tipoVehiculo = $('#tipoVehiculoNuevoRegistro').val();
				if(tipoVehiculo == 'Bicicleta'){
					console.log("Modal de la Bici");
					datosBici(placa, DNIInvitados);
				}else{
					console.log("Modal de Auto o Moto");
					$('#modal-default').modal('show');
					datosVehiculo(placa, DNIInvitados);
					$('#modal-default').modal('handleUpdate');
				}
			}
		}
	}else{
		var placa = $("#placaNuevoRegistro").val();
		if(placa == ''){
			console.log("Viene de cancelar Registro de Vehiculo de Conductor URP");
			validarConductor(codigo);
		}else{
			console.log("Viene de registrar Vehiculo de Conductor URP");
			registrarVehiculo(codigo, placa);

			var tipoVehiculo = $('#tipoVehiculoNuevoRegistro').val();
			if(tipoVehiculo == 'Bicicleta'){
				console.log("Modal de la Bici");
				datosBici(placa, codigo);
			}else{
				console.log("Modal de Auto o Moto");
				$('#modal-default').modal('show');
				datosVehiculo(placa, codigo);
			}

			validarConductor(codigo);
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

	mostrarFormBusqueda(false);
}
function ClearRegistroControl(){
	$("#placa").val("");
	$("#modelo").val("");
	$("#marca").val("");
	$("#color").val("");
	$("#id_persona").val("");
	$('#checkInvitado').prop("checked", false);
	mostrarAddInvitados($('#checkInvitado'), 'Auto');
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
	$.post("../ajax/C_Persona.php?op=buscarByCodigo", {codigo : codigo}, function(data, status){
		if(data != null){
			data = JSON.parse(data);
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
			listarBicicletas(codigo);
		}else{
			$('#divBusquedaConductor').addClass('has-error');
			$('#spanCodigoBusqueda').empty();
			$('#spanCodigoBusqueda').append('<i class="fa fa-times-circle-o"></i> El codigo de Conductor no existe');
			$('#spanCodigoBusqueda').show();
		}

		});
}

function listarAutos($codigo){
	tablaAutos = $('#tblAutos').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
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
		"iDisplayLength": 3, //Paginacion de 15 en 15
		"order": [[ 0, "desc" ]], //Ordenar(columna, orden)
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]

	}).DataTable();
}

function listarMotos($codigo){
	tablaMotos = $('#tblMotos').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
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
		"iDisplayLength": 3, //Paginacion de 15 en 15
		"order": [[ 0, "desc" ]], //Ordenar(columna, orden)
		"paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]

	}).DataTable();
}

function listarBicicletas($codigo){
	tablaBicicletas = $('#tblBicicletas').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
		dom: "Bfrtip", //Definimos los elementos del control de tabla
		buttons: [
				],
		"ajax":
				{
					url: '../ajax/C_Vehiculo.php?op=listarBicicleta&codigo='+ $codigo,
					type: "get",
					dataType: "json",
					error: function(e){
						console.log(e.responseText);
					}
				},
		"bDestroy": true,
		"iDisplayLength": 3, //Paginacion de 15 en 15
		"order": [[ 0, "desc" ]], //Ordenar(columna, orden)
		"paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        columnDefs: [
            {
                targets: [ 0, 1, 2, 3 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]

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

		$('#modal-default').modal('show');

	});
}

function mostrarAddInvitados(elemento, tipo_vehiculo){
	if(elemento.checked){

		var fieldInicio = '<div id="invitado_field_wrapper"><div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><label>Ingrese DNI: </label><input type="text" class="form-control" type="number" name="invitados[]" id="invitados[]" required="true"></div><div><button type="button" id="add_button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir</button></div></div>'
		$('#masInvitado').append(fieldInicio);


		var maxField = 4; //Input fields increment limitation
		var addButton = $('#add_button'); //Add button selector

		console.log(tipo_vehiculo);
		if(tipo_vehiculo == 'Moto'){
			$('#add_button').hide();
			console.log("Es moto no muestra boton añadir");
		}else{
			$('#add_button').show();
			console.log("Es carro si muestra boton añadir");
		}

		var wrapper = $('#invitado_field_wrapper'); //Input field wrapper
		var fieldHTML = '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><label>Ingrese DNI: </label><input type="text" class="form-control" type="number" name="invitados[]" id="invitados[]" required="true"><button type="button" id="remove_button" class="btn btn-danger"><i class="fa fa-minus-circle"></i> Borrar</button></div>' 
		var x = 1; //Initial field counter is 1
		$(addButton).click(function(){ //Once add button is clicked
		    if(x < maxField){ //Check maximum number of input fields
		        x++; //Increment field counter
		        $(wrapper).append(fieldHTML); // Add field html
		        $('#modal-default').modal('handleUpdate');
		    }
		});
		$(wrapper).on('click', '#remove_button', function(e){ //Once remove button is clicked
		    e.preventDefault();
		    $(this).parent('div').remove(); //Remove field html
		    x--; //Decrement field counter
		    $('#modal-default').modal('handleUpdate');
		});
	}else{
		$('#invitado_field_wrapper').remove();
	}
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

	var tipo_vehiculo = $('#tipo_vehiculo').text();

	$.ajax({
		url: "../ajax/C_Control.php?op=guardar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos){
			bootbox.alert("Se registró correctamente.", function(){$(location).attr('href',"../vistas/simular.php?tv="+tipo_vehiculo);});
		}
	});
}

function datosBici(placa, codigo){
	$('#codigo_Bici_control').val(codigo);
	$('#placa_Bici_control').val(placa);

	$.post("../ajax/C_Vehiculo.php?op=mostrarBici", {placa: placa, codigo: codigo}, function(data, status){
		console.log(data);
		if(data != 'null'){
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

function estadoScanner(flag){
	if(flag){
		$('#btnOnScanner').prop("disabled", true);
		$('#btnOffScanner').prop("disabled", false);
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
					$('#barcode-scanner').show();
			});

			Quagga.onDetected(function(result){
				var code = result.codeResult.code;
				var codigo = $("#codigo").val();
				validarPlacaScanner(code, codigo);

			});
	}else{
		$('#btnOnScanner').prop("disabled", false);
		$('#btnOffScanner').prop("disabled", true);
		$('#barcode-scanner').hide();
		Quagga.stop();
	}
}

function validarPlacaScanner(placa, codigo){
	$.post("../ajax/C_Vehiculo.php?op=existeVehiculoByCodigo", {placa: placa, codigo: codigo}, function(data, status){
		if(data!='null'){
			data = JSON.parse(data);
			console.log(data);
			if(data.estado == '2'){
				$('#spanScannerMsgError').empty();
				$('#spanScannerMsgError').append('<i class="fa fa-times-circle-o"></i> El vehiculo con placa ' + placa + ' ya ingresó al estacionamiento');
				$('#spanScannerMsgError').show();
			}else if(data.estado == '0'){
				$('#spanScannerMsgError').empty();
				$('#spanScannerMsgError').append('<i class="fa fa-times-circle-o"></i> El vehiculo con placa ' + placa + ' está inactivo');
				$('#spanScannerMsgError').show();
			}else{
				$('#spanScannerMsgError').empty();
				$('#spanScannerMsgError').hide();
				if(data.tipo_vehiculo == 'Bicicleta'){
					datosBici(placa, codigo);
				}else{
					datosVehiculo(placa, codigo);
				}
			}
		}else{
			console.log('El vehiculo con placa ' + placa + ' no está aignado al usuario ' + codigo);
			$('#spanScannerMsgError').empty();
			$('#spanScannerMsgError').append('<i class="fa fa-times-circle-o"></i> El vehiculo con placa ' + placa + ' no está aignado al usuario ' + codigo);
			$('#spanScannerMsgError').show();
		}

	});
}

function desactivar(placa, codigo){

	bootbox.confirm("¿Esta seguro de desea eliminar el Vehiculo con placa " + placa + "?", function(result){
		if(result){
			$.post("../ajax/C_Vehiculo.php?op=eliminarVehiculo", {placa : placa, codigo : codigo}, function(e){
				bootbox.alert(e);
				tablaAutos.ajax.reload();
				tablaMotos.ajax.reload();
				tablaBicicletas.ajax.reload();

				$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Auto', codigo: codigo}, function(data, status){
					if(data != null){
						data = JSON.parse(data);

						if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
							$('#btnAgregarAuto').empty();
							$('#btnAgregarAuto').append('<i class="fa fa-plus-circle"></i> Agregar');
							$('#btnAgregarAuto').prop('disabled', false);
						}else{
							$('#btnAgregarAuto').empty();
							$('#btnAgregarAuto').text('Ya tiene registrado 3 Autos');
							$('#btnAgregarAuto').prop('disabled', true);
						}
					}

				});

				$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Moto', codigo: codigo}, function(data, status){
					if(data != null){
						data = JSON.parse(data);
						if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
								$('#btnAgregarMoto').empty();
								$('#btnAgregarMoto').append('<i class="fa fa-plus-circle"></i> Agregar');
								$('#btnAgregarMoto').prop('disabled', false);
							}else{
								$('#btnAgregarMoto').empty();
								$('#btnAgregarMoto').text('Ya tiene registrado 3 Motos');
								$('#btnAgregarMoto').prop('disabled', true);
							}
					}

				});

				$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Bicicleta', codigo: codigo}, function(data, status){
					if(data != null){
						data = JSON.parse(data);
						if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
								$('#btnAgregarBicicleta').empty();
								$('#btnAgregarBicicleta').append('<i class="fa fa-plus-circle"></i> Agregar');
								$('#btnAgregarBicicleta').prop('disabled', false);
							}else{
								$('#btnAgregarBicicleta').empty();
								$('#btnAgregarBicicleta').text('Ya tiene registrado 3 Bicicletas');
								$('#btnAgregarBicicleta').prop('disabled', true);
							}
					}

				});
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
			bootbox.alert("Se registró correctamente.", function(){$(location).attr('href',"../vistas/simular.php?tv=Bici");});
		}
	});
}

function validarConductor(codigo){

	if(codigo.length == 8 || codigo.length == 9){

		$('#spanCodigoBusqueda').hide();
		$('#divBusquedaConductor').removeClass('has-error');
		$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Auto', codigo: codigo}, function(data, status){
			if(data != null){
				data = JSON.parse(data);

				if((data.estado) == '2'){
					$('#divBusquedaConductor').addClass('has-error');
					$('#spanCodigoBusqueda').empty();
					$('#spanCodigoBusqueda').append('<i class="fa fa-times-circle-o"></i> El Conductor ya está dentro del estacionamiento');
					$('#spanCodigoBusqueda').show();
				}else if((data.estado) == '0'){
					$('#divBusquedaConductor').addClass('has-error');
					$('#spanCodigoBusqueda').empty();
					$('#spanCodigoBusqueda').append('<i class="fa fa-times-circle-o"></i> El Conductor está inactivo, Registre como invitado');
					$('#spanCodigoBusqueda').show();
				}else{
					buscarConductor(codigo);
					$('#spanCodigoBusqueda').hide();
					$('#divBusquedaConductor').removeClass('has-error');

					if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
						$('#btnAgregarAuto').empty();
						$('#btnAgregarAuto').append('<i class="fa fa-plus-circle"></i> Agregar');
						$('#btnAgregarAuto').prop('disabled', false);
					}else{
						$('#btnAgregarAuto').empty();
						$('#btnAgregarAuto').text('Ya tiene registrado 3 Autos');
						$('#btnAgregarAuto').prop('disabled', true);
					}

					$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Moto', codigo: codigo}, function(data, status){
						if(data != null){
							data = JSON.parse(data);
							if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
									$('#btnAgregarMoto').empty();
									$('#btnAgregarMoto').append('<i class="fa fa-plus-circle"></i> Agregar');
									$('#btnAgregarMoto').prop('disabled', false);
								}else{
									$('#btnAgregarMoto').empty();
									$('#btnAgregarMoto').text('Ya tiene registrado 3 Motos');
									$('#btnAgregarMoto').prop('disabled', true);
								}
						}

					});

					$.post("../ajax/C_Usuario.php?op=validarUsuarioDentro", {tipo_vehiculo: 'Bicicleta', codigo: codigo}, function(data, status){
						if(data != null){
							data = JSON.parse(data);
							if((data.cantidadVehiculo) == '1' || (data.cantidadVehiculo) == '2' || (data.cantidadVehiculo) == '0'){
									$('#btnAgregarBicicleta').empty();
									$('#btnAgregarBicicleta').append('<i class="fa fa-plus-circle"></i> Agregar');
									$('#btnAgregarBicicleta').prop('disabled', false);
								}else{
									$('#btnAgregarBicicleta').empty();
									$('#btnAgregarBicicleta').text('Ya tiene registrado 3 Bicicletas');
									$('#btnAgregarBicicleta').prop('disabled', true);
								}
						}

					});
				}
			}

		});

	}else{
		$('#divBusquedaConductor').addClass('has-error');
		$('#spanCodigoBusqueda').empty();
		$('#spanCodigoBusqueda').append('<i class="fa fa-times-circle-o"></i> Ingrese un codigo de Conductor correcto');
		$('#spanCodigoBusqueda').show();
	}
	
}

init();