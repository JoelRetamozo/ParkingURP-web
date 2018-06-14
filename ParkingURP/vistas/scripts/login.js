$("#frmAcceso").on('submit', function(e){
	e.preventDefault();
	codigo=$("#codigo").val();
	password=$("#password").val();

	$.post("../ajax/C_Usuario.php?op=verificar",{"codigo":codigo, "password":password}, function(data){
		if(data!="null"){
			$(location).attr("href","index.php");
		}else{
			bootbox.alert("Usuario y/o Password incorrectos");
			$("#password").val("");
		}
	});
})

function recordarContrasena()
{
	var codigo = $("#codigo").val();
	$("#codigoAEnviar").val(codigo);
    document.forms["formOlvideContra"].submit();
}