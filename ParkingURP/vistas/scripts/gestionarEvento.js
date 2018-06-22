
var tabla;
var tablaSin;

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

}






//funcion mostrar formulario
function mostrarform(flag){
	limpiar();

	if(flag){
		$("#divPanels").hide();
		$("#formulario").show();
		$("#btnGuardar").prop("disabled", false);
		$("#btnActivar").prop("disabled", false);
		$("#btnDesactivar").prop("disabled", false);
		$("#btnNuevo").hide();


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
	$("#btnActivar").hide();
	$("#btnDesactivar").hide();

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
}
 

init();
