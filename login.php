<?php
	session_start();
	require_once("conexion.php");
	$sql = "select * from inf_personal where cod_persona = '".$_POST["user"]."' ";
	echo $sql;
	$res = mysql_db_query($bd,$sql,$con);
	if($reg = mysql_fetch_array($res)){
		if($_POST["user"] == "ltj6121828"){
			$_SESSION["usuario"] = $_POST["user"];
			header("Location: contenido.php");
		}
		else{
			$_SESSION["usuario"] = $_POST["user"];
			header("Location: pagina.php");
		}
	}
	else{
		echo "<script type='text/javascript'>
			alert('No se ingreso correctamenteo los datos de usuario');
			window.location='index.php';
		</script>";
	}
?>