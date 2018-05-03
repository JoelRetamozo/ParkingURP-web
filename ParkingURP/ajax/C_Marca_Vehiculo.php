<?php
require_once "../modelos/M_Marca_Vehiculo.php";
$m_marca_vehiculo = new M_Marca_Vehiculo();

switch ($_GET["op"]) {

	case 'selectMarcaVehiculo':

		$id_tipo_vehiculo = $_GET["id_tipo_vehiculo"];

		if($id_tipo_vehiculo == "000"){
		}else{
			$rspta = $m_marca_vehiculo->selectByTipoVehiculo($id_tipo_vehiculo);

			echo '<option value="000">---SELECCIONE---</option>';

			while ($reg = $rspta->fetch_object()) {
				echo '<option value="' . $reg->id_marca_vehiculo . '">' . $reg->nombre . '</option>';
			}
		}

			break;
			
}
?>