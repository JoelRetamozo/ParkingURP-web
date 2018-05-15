<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";
Class M_Usuario{
	//Implementamos nuestro constructor
	public function __construct(){
	}
	public function insertar($codigo, $correo, $perfil, $id_persona){
		//$password = "ekjhbdkfujbfsdposdf";
		//enviarMail($correo, $password);
		$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$longpalabra=10;
		for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
  			$x = rand(0,$n);
  			$pass.= $caracteres[$x];
		}

		$sql = "INSERT INTO T_Usuario(codigo, password, estado, perfil, id_persona) VALUES ('$codigo', '$pass', '1', '$perfil', '$id_persona')";
		return ejecutarConsulta($sql);
	}

	public function activar($id_persona){
		$sql = "UPDATE T_Usuario SET estado = '1' WHERE id_persona = '$id_persona'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($id_persona){
		$sql = "UPDATE T_Usuario SET estado = '0' WHERE id_persona = '$id_persona'";
		return ejecutarConsulta($sql);
	}

	function enviarMail($correo, $password){
		$subject = "Cuenta para la aplicación móvil ParkingURP";
		$headers = 'From: parkingurp@gmail.com' . "\r\n" .
    		'Reply-To: parkingurp@gmail.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
 
		$message = "Su cuenta para la aplicación móvil es:" . "\r\n" . 
			"Usuario: 201415634" . "\r\n" .
			"Password: " . $password;
		mail($correo, $subject, $message);
	}

	public function verificar($codigo, $password){
		$sql = "SELECT p.nombre, p.ape_paterno, p.ape_materno, u.codigo, u.password, u.perfil FROM T_Usuario u INNER JOIN T_Persona p ON u.id_persona = p.id_persona AND u.codigo = '$codigo' AND u.password ='$password' AND u.estado = '1'";

		return ejecutarConsulta($sql);
	}
}
?>