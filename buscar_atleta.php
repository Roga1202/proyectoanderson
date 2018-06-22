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

<?php
// verificar peticion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["atleta"])) {
		?>
		<h2>Atleta</h2>
		<?php
		require_once "entidades/atleta.php";

		$atleta_cedula = $_POST["atleta"];

		$atleta = new Atleta();
		$atleta->buscar_atleta($atleta_cedula);
		?>
		<table border="1">
			<thead>
				<tr>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Fecha Nacimiento</th>
					<th>Cedula</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $atleta->getNombres(); ?></td>
					<td><?php echo $atleta->getApellidos(); ?></td>
					<td><?php echo $atleta->getNacimiento(); ?></td>
					<td><?php echo $atleta->getCedula(); ?></td>
					<td><?php echo $atleta->getTelefono(); ?></td>
					<td><?php echo $atleta->getDireccion(); ?></td>
					<td><a href="editar_atleta.php?cedula=<?php echo $atleta->getCedula(); ?>">Editar</a></td>
				</tr>
			</tbody>
		</table>
		<?php
	}
}
?>
</body>
</html>