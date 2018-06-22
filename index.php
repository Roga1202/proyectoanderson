<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>Club de Futbol Iutenses</title>
	<link rel="stylesheet" href="estilos/style.css">
</head>
<aside>
	<ul>
		<div class="media">
			<div class="media-body">
				<br><h1 style="text-align: center; color: white;" id="titulo"> Club de Futbol Iutenses </h1>
			</div>
		</div>
	</ul>
</aside>
<body>
	<!-- casillas ingreso Datos-->

	<div class="container-fluid text-center bg2" >
		<form method="POST">
			
			<div class="login">
				<div class="form-group" id="ingresodatos">
					<img class="responsive-img" src="imagenes/logo.jpg" style="border-radius: 50px" width="150">
					<br><br>
					<label for="usr" style="color: black">ID - Usuario:</label>
					<center><input type="text" class="form-control" id="nombre_usuario" name="usuario" placeholder="Ejemplo123" style="border:2px solid red; text-align: center; width: 150px" required> </center>


					<div class="form-group" id="inputdatos">
						<label for="pwd" style="color: black" >Contraseña:</label>
						<center><input type="password" class="form-control" id="contraseña_ingreso" name="contraseña" placeholder="x x x x x x x x x x x" style="border:2px solid red; text-align: center; width: 150px" required></center>
					</div>

					<div class="checkbox">
						<label style="color: black"><input type="checkbox" > Recordar Datos </label>
					</div>

					<button type="submit" class="btn btn-default" style="color: red;" name="olvide" id="olvide" value="enviar">Olvide mi contraseña</button>
					<button type="submit" class="btn btn-default" style="color: red;" name="enviando" id="enviando" value="entrar">Iniciar Sección</button>


				</div>

			</form>

			<footer id="pie"> 
				<h1>
					<a href="#"><i style="color: red; border-radius: 1px; border-color: white;" class="fa fa-facebook"></i></a>
					<a href="#"><i style="color: red;" class="fa fa-twitter"></i></a>
					<a href="#"><i style="color: red;" class="fa fa-instagram"></i></a>
					<a href="#"><i style="color: red;" class="fa fa-youtube"></i></a>
				</h1>
			</footer>
		</div>

		<?php

		if (isset($_POST["enviando"])) {
 	# ingreso de Datos
			$usuario=$_POST["usuario"];
			$contraseña=$_POST["contraseña"];
 	# declaración de variables
			if ($usuario=="arnulf9708" && $contraseña==12345678){
				header("location:iniciosistema.php");
			}else{
				echo '<script language="javascript">alert("Los datos ingresados son incorrectos, Intentelo nuevamente");</script>'; 

			}
		}
		?>

	</body>
	</html>

	