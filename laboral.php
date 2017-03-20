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
			<style type="text/css" media="screen">
				body{
					background-color: #C5A9A9;
					font-family: verdana;
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
		<h1 align="center">INFORMACION LABORAL</h1><br>
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