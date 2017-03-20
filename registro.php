<?php 
	require_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
	<style type="text/css" media="screen">
		body{
			background-color: #C5A9A9;
			font-family: verdana;
			margin-top: 50px;
			margin-left: 400px;
			margin-right: 400px;
			margin-bottom: 80px;
		}
		h1,h2,h3,h4,h5,h6{
			font-family: calibri;
		}
	</style>
</head>
<body>
<h2 align="center"><strong>REGISTRO DE USUARIO</strong></h2>
<br>
<h4 align="center">Favor de llenar los datos de usuario todo con minusculas</h4><br>
	<form action="registrar.php" method="post" accept-charset="utf-8">
		<div class="form-group">
			<label>Nombres</label>
			<input type="text" class="form-control" name="nombre" placeholder="Ingrese sus nombres">
		</div>
		<div class="form-group">
			<label>Apellido Paterno</label>
			<input type="text" class="form-control" name="paterno" placeholder="Ingrese apellido paterno">
		</div>
		<div class="form-group">
			<label>Apellido Materno</label>
			<input type="text" class="form-control" name="materno" placeholder="Ingrese apellido materno">
		</div>
		<div class="form-group">
			<label>Edad</label>
			<div class="input-group">
				<input type="number" class="form-control" name="edad" placeholder="25">
				<div class="input-group-addon">años</div>
			</div>
		</div>
		<div class="form-group">
			<label>Nro. de carnet de identidad</label>
			<div class="input-group">
				<input type="number" class="form-control" name="carnet" placeholder="12345678">
				<div class="input-group-addon">
					<select name="dir" >
						<option selected>L.P.</option>
						<option>C.B.</option>
						<option>O.R.</option>
						<option>P.T.</option>
						<option>S.C.</option>
						<option>P.N.</option>
						<option>B.N.</option>
						<option>C.Q.</option>
						<option>T.R.</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Sexo</label>
			<select name="sexo" class="form-control">
				<option value="masculino">Masculino</option>
				<option value="femenino">Femenino</option>
			</select>
		</div>
		<div class="form-group">
			<label>Telefono</label>
			<input type="number" class="form-control" name="telefono" placeholder="71595955">
		</div>
		<div class="form-group">
			<label>Correo electronico</label>
			<input type="email" class="form-control" name="correo" placeholder="usuario@ejemplo.com">
		</div>
		<div class="form-group">
			<input type="submit" value="Enviar" class="btn btn-primary">
		</div>
	</form>
</body>
</html>