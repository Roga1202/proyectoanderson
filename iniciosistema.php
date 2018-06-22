<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Club de Futbol Iutenses </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estilos/style2.css">
</head>


<body>
	<!-- Logo y buscador -->
	<header  style=" border-color: white;"> 
		<div class="media"> 
			<div class="media-left">
				<img src="imagenes/logo.jpg"  class="media-object" style="width:175px; border-radius: 100px;">
			</div>
			<div class="media-body" >
				<br>
				<br>
				<h1 class="media-heading" style="text-align: center; color: white;">Club de Futbol Iutenses</h1>
				
<!--
 <form action="../buscar_atleta.php" method="POST">
			<label for="atleta">Buscar Atleta</label>
			<input type="text" name="atleta" />
			<input type="submit" value="Buscar">
		</form>
	</nav>
	<br />
-->
				<form action="buscar_atleta.php" method="POST">
					<center>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Ingresar ID - Nombre" style="border: 2px solid tomato; text-align: center; width: 650px" name="atleta">
							<button class="btn btn-default" type="submit" value="buscar">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</center>
				</form>
			</div>
		</div>

	</header>

	<!-- Enlaces para categorias-->

	<nav>
		<div class="btn-group-vertical">
			<a href="#" class="btn btn-success btn-sm"><button type="submit" class="btn btn-primary btn-md" style="color: black;" id="guardar" value="guardar">Categorias</button></a>


			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color: white;" value="salir" id="salir_sin_guardar">Teterito</button></a>

			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color: white;" value="salir" id="salir_sin_guardar">Compota</button></a>

			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color: white;" value="salir" id="salir_sin_guardar">Mundialito</button></a>

			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color: white;" value="salir" id="salir_sin_guardar">Infantil "C"</button></a>

			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color: white;" value="salir" id="salir_sin_guardar">Infantil "B"</button></a>

			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color: white;" value="salir" id="salir_sin_guardar">Infantil "A"</button></a>

			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color: white;" value="salir" id="salir_sin_guardar">Femenino</button></a>

			<a href="#" class="btn btn-default btn-md"><button type="submit" class="btn btn-primary btn-md" style="color:white;" value="salir" id="salir_sin_guardar">Primera</button></a>
		</div>

	</div>
</nav>

<!-- Contenido, -->

<content>

</content>



<!-- Pie de Pagina 
	"Cierre de Sección, Agregar Jugadores"-->
	<footer>
		<div>
			<center>
				<a href="registrar/nuevo_atleta.php" class="btn btn-default btn-md"><button type="button" class="btn btn-primary" style="color: black;">Agregar Jugador</button></a>

				<a href="registropersonal.php" class="btn btn-default btn-md"><button type="button" class="btn btn-primary" style="color: black;">Agregar Personal</button></a>
				<br>
				<a href="index.php" class="btn btn-default btn-md"><button type="button" class="btn btn-primary" style="color: black;"> Cerrar Sesión</button></a>
			</center>
		</div>
	</footer>
</body>
</html>