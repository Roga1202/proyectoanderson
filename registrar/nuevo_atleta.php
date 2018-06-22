<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Jugador</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../estilos/registrojugador.css">

</head>
<body>

	<div class="container" class="contenido">
		<div class="col-md-5">
			<h2 style="text-align: center;color: white;">Registrar Atleta</h2>
			<h3 style="color: white">Datos del Atleta</h3>

			<form method="POST" action="./nuevo_atleta.php">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="a_nombres" type="text" class="form-control" name="a_nombres" placeholder="Nombres del atleta">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="a_apellidos" type="text" class="form-control" name="a_apellidos" placeholder="Apellidos">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					<input id="a_nacimiento" type="date" class="form-control" name="a_nacimiento" placeholder="fecha de Nacimiento">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
					<input id="a_cedula" type="text" class="form-control" name="a_cedula" placeholder="Cedula de identidad">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
					<input id="password" type="text" class="form-control" name="a_telefono" placeholder="Número de Telefono">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					<input id="password" type="text" class="form-control" name="a_direccion" placeholder="Direccion">
				</div>
				<br>

				<h3 style="color: white;">Datos del Representante</h3>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="r_nombres" type="text" class="form-control" name="r_nombres" placeholder="Nombres del Representante">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="r_apellidos" type="text" class="form-control" name="r_apellidos" placeholder="Apellidos">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
					<input id="r_cedula" type="text" class="form-control" name="r_cedula" placeholder="Cedula de identidad">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="r_parentezco" type="text" class="form-control" name="r_parentezco" placeholder="Parentezco con el representado">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
					<input id="r_telefono" type="text" class="form-control" name="r_telefono" placeholder="Número de Telefono">
				</div>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					<input id="r_direccion" type="text" class="form-control" name="r_direccion" placeholder="Direccion">
				</div>
				<br>

				<button type="submit" class="btn btn-primary">Registrar</button>
				<a href="../iniciosistema.php"><button type="submit" class="btn btn-danger">Salir sin guardar</button></a>
			</form>
		</div>
		<br>
	</div>


	<?php
	var_dump($_post);
	// verificamos la peticion
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		require "../entidades/atleta.php";
		require "../entidades/representante.php";

		$datos_atleta = array(
			"nombres" => $_POST['a_nombres'],
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
				<script>alert("Atleta registrado");
			</script>

			<?php

		} else {
			?>
			<script>alert("El representante ya esta registrado")</script>
			<?php
		}
	} else {
		?>
		<script>alert("EL atleta ya esta registrado")</script>
		<?php
	}
}
?>
</body>
</html>
