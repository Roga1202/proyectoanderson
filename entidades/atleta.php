<?php
// clase para registrar un jugador
require_once "../util/conexiondb.php";
require_once "../entidades/persona.php";

class Atleta extends Persona{
	private $f_nacimiento;

	public function getNacimiento () {
		return $this->f_nacimiento;
	}

	public function setNacimiento ($nacimiento) {
		$this->f_nacimiento = $nacimiento;
	}

	public function registrar ($datos) {
		// verificacion de los datos
		$valido = true;
		foreach ($datos as $key => $value) {
			if (empty($value)) {
				$d_valido = false;
				break;
			}
		}

		// agregamos el atleta a la base de datos
		if ($valido) {
			$conexion = new ConectarDB();
			// sql para agregar jugador
			$sql = "INSERT INTO atletas (id, nombres, apellidos, f_nacimiento, telefono, direccion, 
			representante) VALUES ('{$datos["cedula"]}', '{$datos["nombres"]}', '{$datos["apellidos"]}', 
			'{$datos["f_nacimiento"]}', '{$datos["telefono"]}', '{$datos["direccion"]}', 
			'{$datos["representante"]}')";

			if ($conexion->db->query($sql) === TRUE) {
				$this->registrado = true;
			} else {
				$this->registrado = false;
			}
		}
	}

	public function buscar_atleta ($cedula) {
		$conexion = new ConectarDB();

		// sql para buscar atletas
		$sql = "SELECT * FROM atletas WHERE id = '$cedula'";

		$result = $conexion->db->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				parent::setNombres($row["nombres"]);
				parent::setApellidos($row["apellidos"]);
				$this->setNacimiento($row["f_nacimiento"]);
				parent::setCedula($row["id"]);
				parent::setTelefono($row["telefono"]);
				parent::setDireccion($row["direccion"]);
			}

			return $this;
		} else {
			return false;
		}
	}
}