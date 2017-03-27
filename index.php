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
			margin-top: 100px;
			margin-bottom: 100px;
			margin-left: 400px;
			margin-right: 400px;
			text-align: center;
		}
	</style>
</head>
<body>
<form action="login.php" method="post" accept-charset="utf-8">
	<fieldset>
		<table cellspacing="3" cellpadding="2" border="0" width="100%">
			<tbody>
				<tr>
					<td width="10%">
						<center><img src="img/umsa.png" width="100" height="100"></center>
					</td>
					<td width="80%">
						<h1>SISTEMA DE SEGUIMIENTO ACADEMICO</h1>
						<H2>CARRERA DE ENFERMERÍA</H2>
					</td>
					<td width="10%">
						<center><img src="img/enfermeria.png" width="60" height="100"></center>
					</td>
				</tr>
			</tbody>
		</table> 
	</fieldset>
	<br>
	<div class="form-group">
		<label>Usuario</label>
		<p>Para Iniciar sesion ingrese todo en minuscula Inicial Ap. paterno, Ap. Materno, Primer nombre seguido de su numero de carnet</p>
		<p>Ejemplo: Juan Carlos Romero Vasques C.I.: 4736251 ==> Usuario: rvj4736251</p>
		<input type="text" name="user" placeholder="Inicial Ap. Paterno,Ap. Materno,Primer_nombre,carnet" class="form-control">
		<br>
		<input type="submit" class="btn btn-primary" value="Ingresar">
		<br><br>
		<h3>Si no tiene usuario de registro <a href="registro.php">haga click aqui</a> para registrar sus datos</h3>
	</div>
</form>
</body>
</html>