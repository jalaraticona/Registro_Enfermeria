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
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/main.css" />
	<style type="text/css" media="screen">
		.div{
			margin-top: 20px;
			margin-left: 400px;
			margin-right: 400px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<fieldset>
	<center><legend class="texto"><b>REGISTRO DE USUARIO</b></legend></center>
	<table cellspacing="3" cellpadding="2" border="0" width="100%">
		<tbody>
			<tr>
				<td width="10%">
					<center><img src="img/umsa.png" width="100" height="100"></center>
				</td>
				<td width="80%">
					<b>Unidad:</b></font>CARRERA DE ENFERMERIA</font><br>
					<font class="labels"><b>Predio: </b></font><font class="labelsData">MEDICINA</font>
				</td>
				<td width="10%">
					<center><img src="img/enfermeria.png" width="60" height="100"></center>
				</td>
			</tr>
		</tbody>
	</table> 
</fieldset>
<br>
<div class="div">
	<h4 align="center">Favor de llenar los datos de usuario todo con minusculas</h4><br>
	<form action="registrar.php" method="post" accept-charset="utf-8">
		<div class="form-group">
			<label>Nombres</label>
			<input type="text" class="form-control" name="nombre" placeholder="Ingrese sus nombres" spellcheck="true">
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
					<select name="dir">
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
</div>
</body>
</html>