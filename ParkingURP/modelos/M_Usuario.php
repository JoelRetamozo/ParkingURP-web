<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Usuario{
	//Implementamos nuestro constructor
	public function __construct(){
	}
	public function insertar($codigo, $password, $perfil, $correo){
		//$password = "ekjhbdkfujbfsdposdf";
		$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$longpalabra=10;
		for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
  			$x = rand(0,$n);
  			$pass.= $caracteres[$x];
		}

		if($password == ""){
			enviarMail($correo, $codigo, $pass);
			$sql = "INSERT INTO T_Usuario(codigo, password, estado, perfil) VALUES ('$codigo', '$pass', '1', '$perfil')";
		}else{
			$sql = "INSERT INTO T_Usuario(codigo, password, estado, perfil) VALUES ('$codigo', '$password', '1', '$perfil')";
		}

		return ejecutarConsulta($sql);
	}

	public function activar($codigo){
		$sql = "UPDATE T_Usuario SET estado = '1' WHERE codigo = '$codigo'";
		return ejecutarConsulta($sql);
	}

	public function cambiarEstado($codigo, $estado){
		$sql = "UPDATE T_Usuario SET estado = '$estado' WHERE codigo = '$codigo'";
		return ejecutarConsulta($sql);
	}

	public function desactivarConductores(){
		$sql = "UPDATE T_Usuario SET estado = '0' WHERE perfil = 'Conductor'";
		return ejecutarConsulta($sql);
	}

	function enviarMail($correo, $codigo, $password){
		$subject = "Cuenta para la aplicación móvil ParkingURP";
		$headers = 'From: parkingurp@gmail.com' . "\r\n" .
    		'Reply-To: parkingurp@gmail.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
 
		$message = "Su cuenta para la aplicación móvil es:" . "\r\n" . 
			"Usuario: " . $codigo . "\r\n" .
			"Password: " . $password;
		mail($correo, $subject, $message, $headers);
	}

	public function verificar($codigo, $password){
		$sql = "SELECT p.nombre, p.ape_paterno, p.ape_materno, u.codigo, u.perfil FROM T_Usuario u INNER JOIN T_Persona p ON u.codigo = p.codigo AND u.codigo = '$codigo' AND u.password ='$password' AND u.estado = '1' AND p.tipo_persona = 'Trabajador'";

		return ejecutarConsulta($sql);
	}

	public function validarUsuarioDentro($codigo, $tipo_vehiculo){
		$sql = "SELECT u.estado, COUNT(pXv.placa) AS cantidadVehiculo FROM T_Usuario u INNER JOIN T_Persona p ON p.codigo = u.codigo AND u.codigo = '$codigo' INNER JOIN T_Persona_has_T_Vehiculo pXv ON pXv.codigo = p.codigo AND pXv.estado != '0' INNER JOIN T_Vehiculo v ON pXv.placa = v.placa AND v.tipo_vehiculo = '$tipo_vehiculo'";

		return ejecutarConsultaSimpleFila($sql);
	}

	public function recordarContra($correo){
		$sql = "SELECT u.password FROM T_Usuario u INNER JOIN T_Persona p ON p.codigo = u.codigo AND p.correo = '$correo' AND u.estado = '1'";
		return ejecutarConsultaSimpleFila($sql);
	}
}
?>