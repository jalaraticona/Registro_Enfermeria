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
	<div class="form-group">
		<h1 align="center">SISTEMA DE SEGUIMIENTO ACADEMICO CARRERA DE ENFERMERIA</h1><br>
		<label>Usuario</label>
		<input type="text" name="user" placeholder="Inicial Ap. Paterno,Materno,Primer_nombre,carnet" class="form-control">
		<br>
		<!--<label>Contraseña:</label>
		<input type="password" name="pass" placeholder="··············" class="form-control">
		<br>-->
		<input type="submit" class="btn btn-primary">
		<br><br>
		<h3>Si no tiene usuario de registro <a href="registro.php">haga click aqui</a> para registrar sus datos</h3>
	</div>
</form>
</body>
</html>