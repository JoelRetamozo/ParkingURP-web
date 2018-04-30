<?php

require_once "../modelos/M_Carrera.php";

$m_carrera = new M_Carrera();

switch ($_GET["op"]) {
	case 'selectCarrera':

			$rspta = $m_carrera->select();

			while ($reg = $rspta->fetch_object()) {
				echo '<option value="' . $reg->id_carrera . '">' . $reg->nombre . '</option>';
			}
			break;
}

?>