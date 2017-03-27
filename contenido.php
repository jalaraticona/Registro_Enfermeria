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
				<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/main.css" />
				<style type="text/css" media="screen">
					.div{
						margin-top: 20px;
						margin-left: 100px;
						margin-right: 100px;
						margin-bottom: 20px;
					}
					h1,h2,h3,h4,h5,h6{
						font-family: calibri;
					}
				</style>
			</head>
			<body>
			<fieldset>
				<center><legend class="texto"><b>INFORMACION PERSONAL</b></legend></center>
				<table cellspacing="3" cellpadding="2" border="0" width="100%">
					<tbody>
						<tr>
							<td width="10%">
								<center><img src="img/umsa.png" width="100" height="100"></center>
							</td>
							<td width="70%">
								<font class="labels"><b>Usuario: </b></font><font class="labelsData">
								LARA TICONA JORGE ABIMAEL&nbsp;&nbsp;&nbsp;</font><br>
								<b>Unidad:</b></font>CARRERA DE ENFERMERIA&nbsp;&nbsp;&nbsp;</font>
								<font class="labels"><b>Predio: </b></font><font class="labelsData">MEDICINA</font>
							</td>
							<td width="10%">
								<font class="labels">
								<center><a href="logout.php" class="navText"><button class="btn btn-primary">Cerrar Session</button></a></center>
								</font>
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
			</div>
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
				<title>..:: ENFERMERIA ::..</title>
				<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
				<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/main.css" />
				<style type="text/css" media="screen">
					.div{
						font-family: verdana;
						margin-top: 20px;
						margin-left: 100px;
						margin-right: 100px;
						margin-bottom: 20px;
					}
					h1,h2,h3,h4,h5,h6{
						font-family: calibri;
					}
				</style>
			</head>
			<body>
			<fieldset>
				<center><legend class="texto"><b>INFORMACION PERSONAL</b></legend></center>
				<table cellspacing="3" cellpadding="2" border="0" width="100%">
					<tbody>
						<tr>
							<td width="10%">
								<center><img src="img/umsa.png" width="100" height="100"></center>
							</td>
							<td width="70%">
								<font class="labels"><b>Usuario: </b></font><font class="labelsData">
								LARA TICONA JORGE ABIMAEL&nbsp;&nbsp;&nbsp;</font><br>
								<b>Unidad:</b></font>CARRERA DE ENFERMERIA&nbsp;&nbsp;&nbsp;</font>
								<font class="labels"><b>Predio: </b></font><font class="labelsData">MEDICINA</font>
							</td>
							<td width="10%">
								<font class="labels">
								<center><a href="logout.php" class="navText"><button class="btn btn-primary">Cerrar Session</button></a></center>
								</font>
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
			</div>
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