<?php
	session_start();
	require_once("conexion.php");
	if($_SESSION["usuario"]){

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
					margin-top: 80px;
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
			academica
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