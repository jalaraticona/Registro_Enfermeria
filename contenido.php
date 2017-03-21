<?php
	session_start();
	require_once("conexion.php");
	if($_SESSION["usuario"]){
		if(isset($_POST["buscar"])){
		?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>..:: ENFERMERIA ::..</title>
				<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
				<style type="text/css" media="screen">
					body{
						background-color: #C5A9A9;
						font-family: verdana;
						margin-top: 80px;
						margin-left: 200px;
						margin-right: 200px;
						margin-bottom: 80px;
					}
					h1,h2,h3,h4,h5,h6{
						font-family: calibri;
					}
				</style>
			</head>
			<body>
			<h1 align="center">INFORMACION PERSONAL</h1>
			<table class="table table-bordered">
				<tbody>
					<tr class="warning">
					<form action="contenido.php" method="post" accept-charset="utf-8">
						<td colspan="9"><input type="text" name="buscar" placeholder="Buscar por año" class="form-control"></td>
						<td><button type="submit" class="btn btn-info">BUSCAR</button></td>
					</form>
					</tr>
					<tr class="success">
						<td>Nombre</td>
						<td>Paterno</td>
						<td>Materno</td>
						<td>Edad</td>
						<td>Nro. de Carnet</td>
						<td>Genero</td>
						<td>Telefono</td>
						<td>Correo</td>
						<td>Informacion Laboral</td>
						<td>Informacion Academica</td>
					</tr>					
					<?php
						$sql = "select ip.* from inf_personal as ip,inf_laboral as il where ip.cod_persona = il.cod_persona and il.pri_anio = ".$_POST["buscar"]." ";
						$res = mysql_db_query($bd,$sql,$con);
						while ($reg = mysql_fetch_array($res)) {
							?>
							<tr class="warning">
								<td><?php echo $reg[1]; ?></td>
								<td><?php echo $reg[2]; ?></td>
								<td><?php echo $reg[3]; ?></td>
								<td><?php echo $reg[4]; ?></td>
								<td><?php echo $reg[5]; ?></td>
								<td><?php echo $reg[6]; ?></td>
								<td><?php echo $reg[7]; ?></td>
								<td><?php echo $reg[8]; ?></td>
								<td><a href="laboral.php?id=<?php echo $reg[0] ?>" title="laboral"><button class="btn-sm btn-success">Inf_Laboral</button></a></td>
								<td><a href="academica.php?id=<?php echo $reg[0] ?>" title="academica"><button class="btn-sm btn-info">Inf_Academica</button></a></td>
							</tr>
							<?php
						}
					?>	
				</tbody>
			</table>
			<a href='logout.php'><button class="btn-sm btn-primary">Cerrar Sesion</button></a>
			</body>
			</html>
			<?php
		}
		else{
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>..:: EFNERMERIA ::..</title>
				<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
				<style type="text/css" media="screen">
					body{
						background-color: #C5A9A9;
						font-family: verdana;
						margin-top: 80px;
						margin-left: 200px;
						margin-right: 200px;
						margin-bottom: 80px;
					}
					h1,h2,h3,h4,h5,h6{
						font-family: calibri;
					}
				</style>
			</head>
			<body>
			<h1 align="center">INFORMACION PERSONAL</h1><br>
			<table class="table table-bordered">
				<tbody>
					<tr class="warning">
					<form action="contenido.php" method="post" accept-charset="utf-8">
						<td colspan="9"><input type="text" name="buscar" placeholder="Buscar por año" class="form-control"></td>
						<td align="center"><button type="submit" class="btn btn-info">BUSCAR</button></td>
					</form>
					</tr>
					<tr class="success">
						<td>Nombre</td>
						<td>Paterno</td>
						<td>Materno</td>
						<td>Edad</td>
						<td>Nro. de Carnet</td>
						<td>Genero</td>
						<td>Telefono</td>
						<td>Correo</td>
						<td>Informacion Laboral</td>
						<td>Informacion Academica</td>
					</tr>					
					<?php
						$sql = "select * from inf_personal";
						$res = mysql_db_query($bd,$sql,$con);
						while ($reg = mysql_fetch_array($res)) {
							?>
							<tr class="warning">
								<td><?php echo $reg[1]; ?></td>
								<td><?php echo $reg[2]; ?></td>
								<td><?php echo $reg[3]; ?></td>
								<td><?php echo $reg[4]; ?></td>
								<td><?php echo $reg[5]; ?></td>
								<td><?php echo $reg[6]; ?></td>
								<td><?php echo $reg[7]; ?></td>
								<td><?php echo $reg[8]; ?></td>
								<td><a href="laboral.php?id=<?php echo $reg[0] ?>" title="laboral"><button class="btn-sm btn-success">Inf_Laboral</button></a></td>
								<td><a href="academica.php?id=<?php echo $reg[0] ?>" title="academica"><button class="btn-sm btn-info">Inf_Academica</button></a></td>
							</tr>
							<?php
						}
					?>	
				</tbody>
			</table>
			<a href='logout.php'><button class="btn-sm btn-primary">Cerrar Sesion</button></a>
			</body>
			</html>
			<?php
		}
	}
	else{
		echo "<script type='text/javascript'>
			alert('No ha iniciado session vuelva a intentarlo');
			window.location='index.php';
		</script>";
	}
?>