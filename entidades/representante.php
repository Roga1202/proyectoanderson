<?php
// clase para registrar un jugador
require_once "../util/conexiondb.php";
require_once "../entidades/persona.php";

class Representante extends Persona{
	private $parentezco;

	function registrar ($datos) {
		// verificacion de los datos
		$valido = true;
		foreach ($datos as $key => $value) {
			if (empty($value)) {
				$d_valido = false;
				break;
			}
		}

		// agregamos el representante a la base de datos
		if ($valido) {
			$conexion = new ConectarDB();
			// sql para agregar jugador
			$sql = "INSERT INTO representantes (id, nombres, apellidos, parentezco, telefono, direccion) VALUES ('{$datos["cedula"]}', '{$datos["nombres"]}', '{$datos["apellidos"]}', 
			'{$datos["parentezco"]}', '{$datos["telefono"]}', '{$datos["direccion"]}')";

			if ($conexion->db->query($sql) === TRUE) {
				$this->registrado = true;
			} else {
				$this->registrado =false;
			}
		}
	}
}