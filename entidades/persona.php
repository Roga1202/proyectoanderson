<?php 
abstract class Persona {
	private $cedula;
	private $nombres;
	private $apellidos;
	private $telefono;
	private $direccion;
	protected $registrado = false;

	abstract public function registrar ($datos);

	public function persistente () {
		return $this->registrado;
	}

	public function getCedula() {
		return $this->cedula;
	}

	public function setCedula($cedula) {
		$this->cedula = $cedula;
	}

	public function getNombres() {
		return $this->nombres;
	}

	public function setNombres($nombres) {
		$this->nombres = $nombres;
	}

	public function getApellidos() {
		return $this->apellidos;
	}

	public function setApellidos($apellidos) {
		$this->apellidos = $apellidos;
	}

	public function getTelefono() {
		return $this->telefono;
	}

	public function setTelefono($telefono) {
		$this->telefono = $telefono;
	}

	public function getDireccion() {
		return $this->direccion;
	}

	public function setDireccion($direccion) {
		$this->direccion = $direccion;
	}
}