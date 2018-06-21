var tabla;

//Funcion que se va a ejecutar al inicio
function init(){ 
	mostrarform(false); 
	listar();

	$("#formulario").on("submit", function(e){
		guardaryeditar(e);
	});


}

//Funcion limpiar
function limpiar(){
	$("#id_control").val("");
    $("#fecha_entrada").val("");
	$("#entrada").val("");
    $("#fecha_salida").val("");
    $("#hora_salida").val("");
	$("#motivo").val("");
	$("#codigo").val("");
    $("#tipo_persona").val("");
    $("#placa").val("");
    $("#tipo_vehiculo").val("");
    $("#DNI").val("");
 
}



//funcion mostrar formulario
function mostrarform(flag){
	limpiar();
    if (flag)
    {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled",false);
        $("#btnagregar").hide();
    }
    else
    {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}


//Funcion cancelarform
function cancelarform(){
	limpiar();
	mostrarform(false);
}

//Funcion Listar
function listar(){
	tabla = $('#tbllistado').dataTable(
	{
		"aProcessing": true, //Activamos el procesamiento de datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
		dom: "Bfrtip", //Definimos los elementos del control de tabla
		buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		"ajax":
				{
					url: '../ajax/C_Control.php?op=listar',
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

function guardaryeditar(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);
 
    $.ajax({
        url: "../ajax/C_Control.php?op=editar",
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

function mostrar(id_control){
	$.post("../ajax/C_Control.php?op=mostrar", {id_control : id_control}, function(data, status){

        

		data = JSON.parse(data);
		mostrarform(true);

		$("#fecha_entrada").val(data.fecha_entrada);
        $("#hora_entrada").val(data.hora_entrada); 
        if(data.fecha_salida != null && data.hora_salida != null){
            $("#lbfs").show();
            $("#fecha_salida").show();
            $("#fecha_salida").val(data.fecha_salida);
            $("#lbhs").show();
            $("#hora_salida").show();
            $("#hora_salida").val(data.hora_salida);
        }

        else{
            $("#lbfs").hide();
            $("#fecha_salida").hide();
            $("#lbhs").hide();
            $("#hora_salida").hide();
        }
        


        $("#codigo").val(data.codigo);
        $("#tipo_persona").val(data.tipo_persona);
        $("#placa").val(data.placa);
        $("#tipo_vehiculo").val(data.tipo_vehiculo);
        if(data.DNI!=null){
            $("#lbacompañantes").show();
            $("#DNI").show();
            $("#DNI").val(data.DNI);
        }
        else{
            $("#lbacompañantes").hide();
            $("#DNI").hide();
        }


        if(data.flag_quedarse == 1 | data.flag_quedarse == 2){
            $("#lbmotivo").show();
            $("#motivo").show();
		    $("#motivo").val(data.motivo);
        }
        else{
            $("#lbmotivo").hide();
            $("#motivo").hide();
        }

        if(data.flag_quedarse == 3){
            $("#lbrespuesta").show();
            $("#respuesta").show();
            $("#respuesta").val(data.respuesta);
        }
        else{
            $("#lbrespuesta").hide();
            $("#respuesta").hide();
        }
        
		$("#id_control").val(data.id_control); 


	});


}

init();