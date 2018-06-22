<?php
class ConectarDB {
	private $server = "localhost";
	private $usuario = "root";
	private $contrasena = "";
	private $dbnombre = "clubfi";
	public $db;

	function __construct () {
		$conexion = new mysqli($this->server, $this->usuario, $this->contrasena, $this->dbnombre);
		// Check connection
		if ($conexion->connect_error) {
		    die("Connection fallida: " . $conexion->connect_error);
		} else {
			$this->db = $conexion;
		}
	}
}