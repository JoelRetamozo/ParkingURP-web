<?php
require_once "../modelos/M_Color.php";
$m_color = new M_Color();
switch ($_GET["op"]) {
	case 'selectColor':
			$rspta = $m_color->select();
			echo '<option value="000">--SELECCIONE--</option>';
			while ($reg = $rspta->fetch_object()) {
				echo '<option value="' . $reg->id_color . '">' . $reg->nombre . '</option>';
			}
			break;
}
?>