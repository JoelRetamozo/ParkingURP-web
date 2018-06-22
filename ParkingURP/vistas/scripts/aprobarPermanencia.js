var tabla; // variable donde voy a implementar mi estado

function init(){
	listarSolicitud();
}

function listarSolicitud(){
	tabla = $('#tblSolicitud').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
		dom: "Bfrtip", //Definimos los elementos del control de tabla
		buttons: [
				],
		"ajax":
				{
					url: '../ajax/C_Control.php?op=listarSolicitud',
					type: "get",
					dataType: "json",
					error: function(e){
						console.log(e.responseText);
					}
				},
		"bDestroy": true,
		"iDisplayLength": 15, //Paginacion de 15 en 15
		"order": [[ 0, "desc" ]], //Ordenar(columna, orden)

	}).DataTable();
}

/*function desaprobarEstadoSolicitud(placa)
{
	bootbox.confirm("¿Està seguro que desea desactivar la Solicitud?", function(result){
		if(result)
		{
			$.post("../ajax/C_Control.php?op=desaprobarEstadoSolicitud", {placa : placa}, function(e){
				bootbox.alert(e);
				tabla.ajax.reload();
			});
		}
	})
}

function aprobarEstadoSolicitud(placa)
{
	bootbox.confirm("¿Està seguro que desea activar la Solicitud?", function(result){
		if(result)
		{
			$.post("../ajax/C_Control.php?op=aprobarEstadoSolicitud", {placa : placa}, function(e){
				bootbox.alert(e);
				tabla.ajax.reload();
			});
		}
	})
}*/

function verDatSolicitud(placa, id_control)
{
	$.post("../ajax/C_Control.php?op=verDatSolicitud", {placa : placa}, function(data, status){
		if(data != null){
			data = JSON.parse(data);

			$("#id_control").val(id_control);
			$("#placa").val(data.placa);	

			$('#nombre').val(data.nombre);
			$('#ape_paterno').val(data.ape_paterno);
			$('#ape_materno').val(data.ape_materno);
			$('#tipo_persona').val(data.tipo_persona);
			$('#marca').val(data.marca);
			$('#modelo').val(data.modelo);
			$('#color').val(data.color);
			$('#tipo_vehiculo').val(data.tipo_vehiculo);
			$('#motivo').val(data.motivo);
		}

	});
}
function aprobarEstadoSolicitud(){

	var id_control = $("#id_control").val();
	console.log(id_control);
	$.ajax({
		url: "../ajax/C_Control.php?op=aprobarEstadoSolicitud",
		type: "POST",
		data: {
			"id_control": id_control
		},

		success: function(e){
			bootbox.alert(e);
			
			tabla.ajax.reload();

			$('#verDatos').modal('hide');
		}
	});

}

function desaprobarEstadoSolicitud(){

	var id_control = $("#id_control").val();
	console.log(id_control);

	var respuesta = $("#respuesta").val();
	console.log(respuesta);

	if(respuesta.trim() == ""){
		bootbox.alert("Debe ingresar una respuesta")
		$("#respuesta").val("");
		$('#verDatos').modal('handleUpdate');
	}else{
		$.ajax({
			url: "../ajax/C_Control.php?op=desaprobarEstadoSolicitud",
			type: "POST",
			data: {
				"id_control": id_control,
				"respuesta": respuesta
			},
			success: function(e){
				bootbox.alert(e);
				tabla.ajax.reload();
				$('#verDatos').modal('hide');
				$('#verDatos').modal('handleUpdate');
			}
		});
	}
}

init();


