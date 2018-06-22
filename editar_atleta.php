<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav style="background: blue; color: white">
	<form action="buscar_atleta.php" method="POST">
		<label for="atleta">Buscar Atleta</label>
		<input type="text" name="atleta" />
		<input type="submit" value="Buscar">
	</form>
	</nav>
	<br />

	<h2>Editar atleta</h2>
	<?php
		if (isset($_GET["cedula"])) {
			require_once "entidades/atleta.php";

			$atleta_cedula = $_GET["cedula"];

			$atleta = new Atleta();
			$atleta->buscar_atleta($atleta_cedula);

			?>
			<input type="text" name="nombres" value="<?php echo $atleta->getNombres(); ?>">
			<br />
			<input type="text" name="apellidos" value="<?php echo $atleta->getApellidos(); ?>">
			<br />
			<input type="date" name="nacimiento" value="<?php echo $atleta->getNacimiento(); ?>">
			<br />
			<input type="text" name="cedula" value="<?php echo $atleta->getCedula(); ?>">
			<br />
			<input type="text" name="telefono" value="<?php echo $atleta->getTelefono(); ?>">
			<br />
			<input type="text" name="direccion" value="<?php echo $atleta->getDireccion(); ?>">
			<br />
			<input type="submit" value="editar" />
			<?php
		}
	?>
</body>
</html>