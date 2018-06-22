<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Jugador</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="estilos/registropersonal.css">
	
</head>
<body>

	<?php
	$con = mysqli_connect("localhost", "root", "", "clubfi") or die("Error en la conexión");
	?>


	<form method="POST">
		<input type="text" name="a_nombres" class="" id="" placeholder="Nombres" required autocomplete="off" />
		<br />
		<input type="text" name="a_apellidos" class="" id="" placeholder="Apellidos" required autocomplete="no" />
		<br />
		<input type="date" name="a_nacimiento" class="" id="" placeholder="Nacimiento" required autocomplete="no" />
		<br />
		<input type="text" name="a_cedula" class="" id="" placeholder="Cedula" required autocomplete="no" />
		<br />
		<input type="text" name="a_telefono" class="" id="" placeholder="Telefono" required autocomplete="no" />
		<br />
		<input type="text" name="a_direccion" class="" id="" placeholder="Direccion" required autocomplete="no" />
		<br />
		<br />
		<h3>Representante</h3>
		<input type="text" name="r_nombres" class="" id="" placeholder="Nombres" required autocomplete="no"/>
		<br />
		<input type="text" name="r_apellidos" class="" id="" placeholder="Apellidos" required autocomplete="no"/>
		<br />
		<input type="text" name="r_cedula" class="" id="" placeholder="Cedula" required autocomplete="no"/>
		<br />
		<input type="text" name="r_parentezco" class="" id="" placeholder="Parentezco" required autocomplete="no"/>
		<br />
		<input type="text" name="r_telefono" class="" id="" placeholder="Telefono" required autocomplete="no"/>
		<br />
		<input type="text" name="r_direccion" class="" id="" placeholder="Direccion" required autocomplete="no"/>

		<button type="submit">Registrar</button>
	</form>

	<?php
	// verificamos la peticion
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		require "../entidades/atleta.php";
		require "../entidades/representante.php";

		$datos_atleta = array(
			"nombres" => $_POST["a_nombres"],
			"apellidos" => $_POST["a_apellidos"],
			"f_nacimiento" => $_POST["a_nacimiento"],
			"cedula" => $_POST["a_cedula"],
			"telefono" => $_POST["a_telefono"],
			"direccion" => $_POST["a_direccion"],
			"representante" => $_POST["r_cedula"],
		);

		$datos_representante = array(
			"nombres" => $_POST["r_nombres"],
			"apellidos" => $_POST["r_apellidos"],
			"parentezco" => $_POST["r_parentezco"],
			"cedula" => $_POST["r_cedula"],
			"telefono" => $_POST["r_telefono"],
			"direccion" => $_POST["r_direccion"],
		);

		$atleta = new Atleta();
		$representante = new Representante();

		// se debe verificar primero el representante
		// ya que es obligatorio que un atleta debe tener uno
		$representante->registrar($datos_representante);

		if($representante->persistente()) {
			$atleta->registrar($datos_atleta);

			if ($atleta->persistente()) {
				?>
				<script>alert("Atleta registrado")</script>
				<?php
			} else {
				?>
				<script>alert("Opps Algun error a ocurrido!")</script>
				<?php
			}
		} else {
			?>
			<script>alert("Opps Algun error a ocurrido!")</script>
			<?php
		}

	}
	?>
	</body>
	</html>