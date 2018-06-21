$("#frmRecuerda").on('submit', function(e){
	e.preventDefault();
	correo=$("#correo").val();

	$.post("../ajax/C_Usuario.php?op=recordarContra",{"correo":correo}, function(data){
			if(data=='null'){
				bootbox.alert("El correo ingresado no está asociado a ningún usuario. Ingrese nuevamente.");
				$("#correo").val("");
			}else{
				bootbox.alert(data, function(){$(location).attr('href',"../vistas/login.html");});
			}
		});
})
