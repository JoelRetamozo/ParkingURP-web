<?php

//Iniiar la sesion de archivo
session_start();

require_once "../modelos/M_Usuario.php";
$m_usuario = new M_Usuario();
$codigo = isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
$password = isset($_POST["password"])? limpiarCadena($_POST["password"]):"";
$correo = isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";

switch ($_GET["op"]) {
	case 'guardar':
		$rspta = $m_usuario->insertar($codigo, $password, $perfil, $correo);
		echo $rspta ? "Usuario registrado exitosamente" : "Usuario no se pudo registrar";
		break;

	case 'activar':
		$rspta = $m_usuario->activar($codigo);
			echo $rspta ? "Conductor activado" : "Conductor no se pudo activar";
		break;

	case 'desactivar':
		$rspta = $m_usuario->desactivar($codigo);
			echo $rspta ? "Conductor desactivado" : "Conductor no se pudo desactivar";
		break;

	case 'verificar':

		$rspta = $m_usuario->verificar($codigo, $password);

		//Como me esta devolviendo los valores de cada uno de los campos de ese usuario
		$fetch = $rspta->fetch_object();

		if(isset($fetch)){
			//Declaramos las variables de sesion
			$_SESSION['nombre']=$fetch->nombre;
			$_SESSION['ape_paterno']=$fetch->ape_paterno;
			$_SESSION['ape_materno']=$fetch->ape_materno;
			$_SESSION['codigo']=$fetch->codigo;
			$_SESSION['perfil']=$fetch->perfil;
		}

		echo json_encode($fetch);
	break;

	case 'salir':
	//Limpiamos las variables de sesion
	session_unset();

	//Destruimos la sesion
	session_destroy();

	//Redireccionar al index.php
	header("Location: ../../index.php");

	break;

	case 'validarUsuarioDentro':
		$tipo_vehiculo = isset($_POST["tipo_vehiculo"])? limpiarCadena($_POST["tipo_vehiculo"]):"";
		$rspta = $m_usuario->validarUsuarioDentro($codigo, $tipo_vehiculo);

		echo json_encode($rspta);

		break;

	case 'recordarContra':
		$rspta = $m_usuario->recordarContra($correo);
		if($rspta){
			$subject = "Recuperar Contraseña de la aplicación web ParkingURP";
			$headers = 'From: parkingurp@gmail.com' . "\r\n" .
	    		'Reply-To: parkingurp@gmail.com' . "\r\n" .
	    		'X-Mailer: PHP/' . phpversion();
	 
			$message = "Su contraseña para la aplicación móvil es:" . "\r\n" . 
				"Password: " . $rspta["password"];
			$rspta123 = mail($correo, $subject, $message, $headers);

			echo "Se envio su contraseña a su correo.";
		}else{
			echo json_encode($rspta);
		}
		break;
	
}
?>