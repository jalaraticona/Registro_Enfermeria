<?php
	require_once("conexion.php");
	$pa = substr($_POST["paterno"], 0, 1);
	$ma = substr($_POST["materno"], 0, 1);
	$no = substr($_POST["nombre"], 0, 1);
	$cod = $pa."".$ma."".$no."".$_POST["carnet"];
	echo $cod;
	$sql = "insert into inf_personal values ('".$cod."', '".$_POST["nombre"]."', '".$_POST["paterno"]."', '".$_POST["materno"]."', '".$_POST["edad"]."', '".$_POST["carnet"]."', '".$_POST["sexo"]."', '".$_POST["telefono"]."', '".$_POST["correo"]."' );";
	$res = mysql_db_query($bd,$sql,$con);
	header("Location: index.php");
?>