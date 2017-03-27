<?php
	session_start();
	require_once("conexion.php");
	$sql = "select * from inf_personal where cod_persona = '".$_GET["id"]."'";
	$res = mysql_db_query($bd,$sql,$con);
	$row = mysql_fetch_array($res);
	if($_SESSION["usuario"]){

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>..:: ENFERMERIA ::..</title>
			<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/main.css" />
			<style type="text/css" media="screen">
				.div{
					margin-top: 80px;
					margin-left: 100px;
					margin-right: 100px;
					margin-bottom: 80px;
				}
				h1,h2,h3,h4,h5,h6{
					font-family: calibri;
				}
			</style>
		</head>
		<body>
		<fieldset>
			<center><legend class="texto"><b>INFORMACION LABORAL</b></legend></center>
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
			<h3>Usuario: <?php echo $row[1]." ".$row[2]." ".$row[3]." C.I.: ".$row[5]; ?></h3>
			<?php 
			$sql = "select * from inf_laboral where cod_persona = '".$_GET["id"]."'";
			$res = mysql_db_query($bd,$sql,$con);
			$row = mysql_fetch_array($res);
			?>
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td colspan="3" class="success" align="center">Primer Trabajo: <?php echo $row[1]; ?></td>
						<td colspan="3" class="success" align="center">Ultimo Trabajo: <?php echo $row[5]; ?></td>
					</tr>
					<tr class="success">
						<td align="center">Cargo</td>
						<td align="center">Institucion</td>
						<td align="center">Año</td>
						<td align="center">Cargo</td>
						<td align="center">Institucion</td>
						<td align="center">Año</td>
					</tr>					
					<tr class="warning">
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><?php echo $row[4]; ?></td>
						<td><?php echo $row[6]; ?></td>
						<td><?php echo $row[7]; ?></td>
						<td><?php echo $row[8]; ?></td>
					</tr>	
				</tbody>
			</table>
			<br>
			<a href="contenido.php" title="REGRESAR"><button class="btn-sm btn-primary">Regresar</button></a>
		</div>
		</body>
		</html>
		<?php
	}
	else{
		echo "<script type='text/javascript'>
			alert('No ha iniciado session vuelva a intentarlo');
			window.location='index.php';
		</script>";
	}
?>