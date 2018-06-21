function init(){
	//clear();

	$('#divBicicleta').hide();
	$('#divAutoMoto').hide();
	$('#datosVehiculoInvitado').hide();

	var tipo_vehiculo = $("#tipoVehiculoEnviado").val();
	$("#tipo_vehiculo").val(tipo_vehiculo);
	if (tipo_vehiculo != '000') {
		$("#tipo_vehiculo").prop("disabled", true);
	}else{
		$("#tipo_vehiculo").prop("disabled", false);
	}
	mostrarTipoVehiculo(tipo_vehiculo);
}

function clear(){

	clearForm();

	$("#tipo_vehiculoInvitado").val("000");
	mostrarTipoVehiculo("000");
}

function clearForm(){
	$("#placa").val("");
	$("#modelo").val("");
	$("#marca").val("");
	$("#color").val("");
	$("#marcaBici").val("");
	$("#colorBici").val("");
}


function consultarCodigoBarra(elemento){
	$('#lectorCodigo').show();

	//window.URL = window.URL || window.webkitURL;
	//navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

	//navigator.getUserMedia({video:true}, function(video){
		//document.querySelector("#barcode-scanner").src = window.URL.createObjectURL(video);
	//});

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
	});

	Quagga.onDetected(function(result){
		var code = result.codeResult.code;

		$('#spanScannerMsgError').empty();
		buscarVehiculoInvitado(code, elemento);

	});
}

function mostrarTipoVehiculo(elemento){
	clearForm();
	if(elemento == "000"){
		$('#divBicicleta').hide();
		$('#divAutoMoto').hide();
		$("#marcaBici").prop("required", false);
		$("#colorBici").prop("required", false);
		$('#btnRegistrar').hide();
	}else if(elemento == "Bicicleta"){
		$('#divBicicleta').show();
		$('#divAutoMoto').hide();
		$('#btnRegistrar').show();
		generarPlacaBici();
		$("#marcaBici").prop("required", true);
		$("#colorBici").prop("required", true);
	}else{
		$('#divBicicleta').hide();
		$('#divAutoMoto').show();
		$("#marcaBici").prop("required", false);
		$("#colorBici").prop("required", false);
		$('#btnRegistrar').hide();

		consultarCodigoBarra(elemento);
	}
	$('#tipoVehiculoEnviado').val(elemento);
}

function buscarVehiculoInvitado(placa, tipo_vehiculo){

	$.post("../ajax/C_WS_Vehiculo.php?op=mostrarVehiculo", {placa : placa}, function(data, status){
		if(data != 'null'){
			data = JSON.parse(data);

			if(data.tipo_vehiculo == tipo_vehiculo){
				$('#datosVehiculoInvitado').show();

				$('#placa').val(placa);
				$("#marca").val(data.marca);
				$("#modelo").val(data.modelo);
				$("#color").val(data.color);

				$('#lectorCodigo').hide();
				Quagga.stop();
				$('#btnRegistrar').show();
			}else{
				$('#spanScannerMsgError').empty();
				$('#spanScannerMsgError').append('<i class="fa fa-times-circle-o"></i> La placa ' + placa + ' no es ' + tipo_vehiculo);
				$('#spanScannerMsgError').show();
			}
		}else{
			$('#spanScannerMsgError').empty();
			$('#spanScannerMsgError').append('<i class="fa fa-times-circle-o"></i> La placa ' + placa + ' no existe');
			$('#spanScannerMsgError').show();
		}

	});
}

function generarPlacaBici(){
	var letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  	var placaBici = "BIC";
  	for (i=0; i<3; i++) placaBici += letras.charAt(Math.floor(Math.random()*letras.length));
  	var numeros = "0123456789";
  	for (i=0; i<3; i++) placaBici += numeros.charAt(Math.floor(Math.random()*numeros.length));

  	$.post("../ajax/C_Vehiculo.php?op=existePlaca", {placa : placaBici}, function(data, status){
		data = JSON.parse(data);

		if (data.count == 0) {
			console.log("no existe una igual");
			$('#placa').val(placaBici);
		}else{
			console.log("generando nueva placa");
			generarPlacaBici();
		}

	});
}

init();