$("#frmRecuerda").on('submit', function(e){
	e.preventDefault();
	correo=$("#correo").val();

	$.post("../ajax/C_Usuario.php?op=recordarContra",{"correo":correo}, function(data){
			if(data!="null" || data!=null){
				bootbox.alert(data, function(){$(location).attr('href',"../vistas/login.html");});
			}else{
				bootbox.alert("El correo ingresado no está asciado a ningún usuario.");
				$("#correo").val("");
			}
		});
})
