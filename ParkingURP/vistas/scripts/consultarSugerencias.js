var tablaSugerencias;

function init(){
	listarSugerencias();
}

function ClearDatosSugerencia(){
	$('#codigo').val("");
	$("#nombre").val("");
	$("#ape_paterno").val("");
	$("#ape_materno").val("");
	$('#detalle').val("");
	$('#imagen').prop("src", "");
}

function listarSugerencias(){
	tablaSugerencias = $('#tblSugerencias').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
		dom: "Bfrtip", //Definimos los elementos del control de tabla
		buttons: [
				],
		"ajax":
				{
					url: '../ajax/C_Sugerencia.php?op=listar',
					type: "get",
					dataType: "json",
					error: function(e){
						console.log(e.responseText);
					}
				},
		"bDestroy": true,
		"iDisplayLength": 20, //Paginacion de 20 en 20
        "paging":   true,
        "info":     true,
        "searching": true,
        columnDefs: [
            {
                targets: [ 0, 4],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]

	}).DataTable();
}

function mostrarSugerencia(id_sugerencia){
	$.post("../ajax/C_Sugerencia.php?op=buscarPorCodigo", {id_sugerencia : id_sugerencia}, function(data, status){
		if(data != null){
			data = JSON.parse(data);

			$('#codigo').val(data.codigo);
			$("#nombre").val(data.nombre);
			$("#ape_paterno").val(data.ape_paterno);
			$("#ape_materno").val(data.ape_materno);
			$('#detalle').val(data.detalle);
			$('#imagen').prop("src", "data:image/jpeg;base64," + data.imagen);

		}

	});
}

init();