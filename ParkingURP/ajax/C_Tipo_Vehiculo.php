<?php

require_once "../modelos/M_Tipo_Vehiculo.php";

$m_tipo_vehiculo = new M_Tipo_Vehiculo();

switch ($_GET["op"]) {
	case 'selectTipoVehiculo':

			$rspta = $m_tipo_vehiculo->select();

			while ($reg = $rspta->fetch_object()) {
				echo '<option value="' . $reg->id_tipo_vehiculo . '">' . $reg->nombre . '</option>';
			}
			break;
}

?>