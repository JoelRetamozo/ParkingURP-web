<?php
//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class M_Marca_Vehiculo{
	//Implementamos nuestro constructor
	public function __construct(){
		
	}
	//Implementar un metodo para listar los registros y mostrar en el select
	public function selectByTipoVehiculo($id_tipo_vehiculo){
		$sql = "SELECT mv.id_marca_vehiculo as id_marca_vehiculo, mv.nombre as nombre FROM T_Marca_Vehiculo mv INNER JOIN t_marca_vehiculo_has_t_tipo_vehiculo mvXtv ON  mv.id_marca_vehiculo = mvXtv.id_marca_vehiculo INNER JOIN t_tipo_vehiculo tv ON tV.id_tipo_vehiculo = mvXtv.id_tipo_vehiculo AND tv.id_tipo_vehiculo = '$id_tipo_vehiculo'";
		return ejecutarConsulta($sql);
	}
}

?>