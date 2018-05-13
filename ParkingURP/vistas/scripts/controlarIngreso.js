var tablaAutos;
var tablaMotos;
var tablaBicicletas;

function init(){

	//$("#datosdelConductor").hide();
}

function limpiar(){
	$("#codigo").val("");
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

	console.log(codigo);

	if(codigo == ""){

	}else if(codigo == ""){

	}else{
		//mostrarFormBusqueda(true);

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


init();