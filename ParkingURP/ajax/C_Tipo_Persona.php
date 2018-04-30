<?php

require_once "../modelos/M_Tipo_Persona.php";

$m_tipo_persona = new M_Tipo_Persona();

switch ($_GET["op"]) {
	case 'selectTipoPersonaMovil':

			$rspta = $m_tipo_persona->selectMovil();

			while ($reg = $rspta->fetch_object()) {
				echo '<option value="' . $reg->id_tipo_persona . '">' . $reg->nombre . '</option>';
			}
			break;
}

?>