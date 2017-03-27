<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/main.css" />
	<title>..:: Registro ::..</title>
	<script>
		function show_hide() {
			if(document.getElementById('check_sh').checked) {
				document.getElementById('select_sh').style.display = "block";
			}
			else {
				document.getElementById('select_sh').style.display = "none";
			}
		}
		function mostrarReferencia(){
		//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
			if (document.fcontacto.Conocido[1].checked == true) {
			//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
				document.getElementById('desdeotro').style.display='block';
			//por el contrario, si no esta seleccionada
			}
			else {
			//oculta el div con id 'desdeotro'
				document.getElementById('desdeotro').style.display='none';
			}
		}
</script>
</head>
<body>
	<div style="padding: 15px;">
		<h2><a href="http://enfermeria.fment.umsa.bo/">REGISTRO </a><div id="clock" align="endif"></div></h2>
		<form action="resgistrar_laboral.php" method="post" accept-charset="utf-8">
			<input type="radio" name="preg1" value="si">SI
			<input type="radio" name="preg1" value="no" onclick="preg1.style.visibility = (this.checked) ? 'visible' : 'hidden'" />NO
			<select name="preg1" style="visibility:hidden">
			<option>1</option>
			<option>2</option>
			<br>
			<input type="checkbox" id="check_sh" name="preg1" />
			<input type="checkbox" id="check_sh" name="preg1" onclick="show_hide() " />
			<select name="sele" id="select_sh">
			<option>--</option>
			</select>
		</form>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="fcontacto">
			//inputs
			<p>A través de donde nos has conocido:<br />
			//importante llamar a la función
			<input type="radio" name="Conocido" value="Google" id="Conocido_0" onclick="mostrarReferencia();" /> Google
			<input type="radio" name="Conocido" value="Otros" id="Conocido_1" onclick="mostrarReferencia();" /> Otros
			</p>
			//div oculto
			<div id="desdeotro" style="display:none;">
			<p>Referencia de la oferta:</p>
			<p><input type="text" name="otro" class="input" /></p>
		</div>
	</div>
</body>
</html>