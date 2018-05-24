function init(){
	clear();
}

function clear(){
	$('#divBicicleta').hide();
	$('#divAutoMoto').hide();
	$('#datosVehiculoInvitado').hide();

	$("#placaInvitado").val("");
	$("#modeloInvitado").val("");
	$("#marcaInvitado").val("");
	$("#colorInvitado").val("");

	$("#tipo_vehiculoInvitado").val("000");
	mostrarTipoVehiculo("000");
}


function consultarCodigoBarra(){
	$('#lectorCodigo').show();
	Quagga.init({
		inputStream: {
			name: "Live",
			type: "LiveStream",
			numOfWorkers: navigator.hardwareConcurrency,
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

		Quagga.stop();;
		$('#placa').val(code);

		buscarVehiculoInvitado(code);

	});
}

function mostrarTipoVehiculo(elemento){
	if(elemento == "000"){
		$('#divBicicleta').hide();
		$('#divAutoMoto').hide();
	}else if(elemento == "Bicicleta"){
		$('#divBicicleta').show();
		$('#divAutoMoto').hide();
	}else{
		$('#divBicicleta').hide();
		$('#divAutoMoto').show();

		consultarCodigoBarra();
	}
}

function buscarVehiculoInvitado(placa){

	$.post("../ajax/C_WS_Vehiculo.php?op=mostrarVehiculo", {placa : placa}, function(data, status){
		data = JSON.parse(data);

		if(data != null){
			$('#placaInvitado').val(placa);
			$("#marcaInvitado").val(data.marca);
			$("#modeloInvitado").val(data.modelo);
			$("#colorInvitado").val(data.color);

			Quagga.stop();

			$('#lectorCodigo').hide();
		}

	});
}

init();