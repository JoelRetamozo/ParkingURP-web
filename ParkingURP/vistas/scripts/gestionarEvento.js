
var tabla;
var tablaSin;

//Funcion que se va a ejecutar al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit", function(e){
		guardaryeditar(e);
	});

	$.post("../ajax/C_Area.php?op=selectArea", function(r){
		$("#id_area").html(r);
		$('#id_area').selectpicker('refresh');
	});
}


//Funcion Listar Eventos
function listar(){
  tabla = $('#tbllistado').dataTable(
  {
    "aProcessing": true, //Activamos el procesamiento de datatables
    "aServerSide": true, //Paginacion y filtrado realizados por el servidor
    dom: "Bfrtip", //Definimos los elementos del control de tabla
    buttons: [

        ],
    "ajax":
        {
          url: '../ajax/C_Evento.php?op=listar',
          type: "get",
          dataType: "json",
          error: function(e){
            console.log(e.responseText);
          }
        },
    "bDestroy": true,
    "iDisplayLength": 15, 
    "order": [[ 0, "desc" ]] 

  }).DataTable();
}


//Funcion limpiar
function limpiar(){

	$("#nombre").val("");
	$("#decripcion").val("");
	$("#fecInicio").val("");
	$("#fecFin").val("");
	$("#id_area").val([""]);
	$("#id_area").selectpicker('refresh');
	$("#id_evento").val("");

}




//funcion mostrar formulario
function mostrarform(flag){
	limpiar();

	if(flag){
		$("#divPanels").hide();
		$("#formulario").show();
		$("#btnGuardar").prop("disabled", false);
		$("#btnNuevo").hide();
		$("#btnIniciarEvento").hide();
		$("#btnFinalizarEvento").hide();

	}else{
		$("#divPanels").show();
		$("#formulario").hide();
		$("#btnNuevo").show();



	$("#nombre").prop("disabled", false);
	$("#descripcion").prop("disabled", false);
	$("#fecInicio").prop("disabled", false);
	$("#fecFin").prop("disabled", false);
	
	}
}



//Funcion cancelarform
function cancelarform(){
	limpiar();
	$("#btnGuardar").show();
	$("#btnIniciarEvento").hide();
	$("#btnFinalizarEvento").hide();

	mostrarform(false);
}

function nombrevalido(elemento) { 
    $validos="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890-"; 
        $validez=1; 
        for ($i=0;$i<=strlen($nombre)-1;$i++) { 
            if (strpos($validos,substr($nombre,$i,1))===false) {$validez=0;} 
        } 
        return $validez;
}  



//Funcion Actualizar
function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento

	var hoy = new Date();
	console.log("HOY:" + hoy);

	var fecInicio =new Date($("#fecInicio").val());
	console.log("Fecha Inicio: " + fecInicio);

	var fecFin = new Date($("#fecFin").val());
	console.log("Fecha Fin: " + fecFin);

	if(hoy > fecInicio && (hoy.getDate() - 1) > fecInicio.getDate()){

		bootbox.alert("Ingrese una fecha inicio mayor a la actual: " + hoy);

	}else{
		if(fecInicio <= fecFin){

			$("#btnGuardar").prop("enabled",true);
			var formData = new FormData($("#formulario")[0]);

			$.ajax({
				url: "../ajax/C_Evento.php?op=insertar",
			    type: "POST",
			    data: formData,
			    contentType: false,
			    processData: false,

			    success: function(datos)
			    {                    
			          bootbox.alert(datos);	          
			          mostrarform(false);
			          tabla.ajax.reload();
			    }

			});
			limpiar();

		}else{
			bootbox.alert("Ingrese una fecha fin mayor a la fecha inicial")
		}
	}
}

function iniciarEvento(id_evento){
	console.log(id_evento);

	mostrarform(true);

	llenarFormulario(id_evento, true);

	$("#btnIniciarEvento").show();
	$("#id_evento").val(id_evento);
}

function finalizarEvento(id_evento){

	mostrarform(true);

	llenarFormulario(id_evento, true);

	$("#btnFinalizarEvento").show();

	$("#id_evento").val(id_evento);
}

function llenarFormulario(id_evento, flag){

	if(flag){

		$("#nombre").prop("readonly", true);
		$("#decripcion").prop("readonly", true);
		$("#fecInicio").prop("readonly", true);
		$("#fecFin").prop("readonly", true);
		$("#id_area").prop("readonly", true);

		$("#btnGuardar").hide();

		$.post("../ajax/C_Evento.php?op=listarAreas", {id_evento : id_evento}, function(data, status){
		if(data != null){
			var ids_area = data.split(',');

			$("#id_area").val(ids_area);
			$('#id_area').selectpicker('render');
		}

		});

		$.post("../ajax/C_Evento.php?op=buscar", {id_evento : id_evento}, function(data, status){
		if(data != null){

			data = JSON.parse(data);

			$("#nombre").val(data.nombre);
			$("#decripcion").val(data.descripcion);
			$("#fecInicio").val(data.fecha_inicio);
			$("#fecFin").val(data.fecha_fin);
		}

		});
	}else{
		$("#btnGuardar").show();

		$("#nombre").prop("readonly", false);
		$("#decripcion").prop("readonly", false);
		$("#fecInicio").prop("readonly", false);
		$("#fecFin").prop("readonly", false);
		$("#id_area").prop("readonly", false);

		$("#nombre").val("");
		$("#decripcion").val("");
		$("#fecInicio").val("");
		$("#fecFin").val("");
		$("#id_area").val("");
	}

}

function inicioDeEvento(){
	var hoy = new Date();
	console.log(hoy);
	console.log($("#fecInicio").val());
	var fecInicio = new Date($("#fecInicio").val());
	console.log(fecInicio);

	if(hoy == fecInicio || (hoy.getDate() - 1) == fecInicio.getDate()){

		var formData = new FormData($("#formulario")[0]);

		$.ajax({
			url: "../ajax/C_Evento.php?op=iniciarEvento",
		    type: "POST",
		    data: formData,
		    contentType: false,
		    processData: false,

		    success: function(datos)
		    {                    
		        limpiar();
				bootbox.alert(datos);         
		        mostrarform(false);
				llenarFormulario(id_evento, false);
		        tabla.ajax.reload();
		    }

		});
		
	}else{
		bootbox.alert("El evento se debe iniciar el " + $("#fecInicio").val());
	}
}

function finDeEvento(){
	var hoy = new Date();
	console.log(hoy);
	console.log($("#fecFin").val());
	var fecFin = new Date($("#fecFin").val());
	console.log(fecFin);
	console.log((hoy.getDate() - 1));
	console.log(fecFin.getDate());

	if(hoy == fecFin || (hoy.getDate() - 1) == fecFin.getDate()){

		var formData = new FormData($("#formulario")[0]);

		$.ajax({
			url: "../ajax/C_Evento.php?op=finalizarEvento",
		    type: "POST",
		    data: formData,
		    contentType: false,
		    processData: false,

		    success: function(datos)
		    {                    
		        limpiar();
				bootbox.alert(datos);         
		        mostrarform(false);
				llenarFormulario(id_evento, false);
		        tabla.ajax.reload();
		    }

		});
		
	}else{
		bootbox.alert("El evento se debe finalizar el " + $("#fecFin").val());
	}
} 

init();
