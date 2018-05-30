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
			//enviarMail($correo, $codigo, $pass);
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

	public function desactivar($codigo){
		$sql = "UPDATE T_Usuario SET estado = '0' WHERE codigo = '$codigo'";
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
		mail($correo, $subject, $message);
	}

	public function verificar($codigo, $password){
		$sql = "SELECT p.nombre, p.ape_paterno, p.ape_materno, u.codigo, u.perfil FROM T_Usuario u INNER JOIN T_Persona p ON u.codigo = p.codigo AND u.codigo = '$codigo' AND u.password ='$password' AND u.estado = '1'";

		return ejecutarConsulta($sql);
	}
}
?>