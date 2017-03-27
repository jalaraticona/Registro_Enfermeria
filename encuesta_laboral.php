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
		function mostrarReferencia1(){
		//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
			if (document.formulario.preg1[1].checked == true) {
			//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
				document.getElementById('div1').style.display='block';
			//por el contrario, si no esta seleccionada
			}
			else {
			//oculta el div con id 'desdeotro'
				document.getElementById('div1').style.display='none';
			}
		}
		function mostrarReferencia2(){
		//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
			if (document.formulario.preg2[0].checked == true) {
			//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
				document.getElementById('div2').style.display='block';
			//por el contrario, si no esta seleccionada
			}
			else {
			//oculta el div con id 'desdeotro'
				document.getElementById('div2').style.display='none';
			}
		}
	</script>
	<style type="text/css" media="screen">
		.div{
			padding-left: 100px;
			padding-right: 100px;
			padding-top: 20px;
			padding-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="div">
	<fieldset>
		<center><legend class="texto"><b>ENCUESTA LABORAL</b></legend></center>
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
	<form action="lab_reg.php" method="post" name="formulario">
		<p>1. Finalizada la carrera Universitaria, ¿Ud. realizo la busqueda activa del primer trabajo como Enfermeria?.<br />
			<input type="radio" name="preg1" value="si" id="Conocido_0" onclick="mostrarReferencia1();" /> SI
			<input type="radio" name="preg1" value="no" id="Conocido_1" onclick="mostrarReferencia1();" /> NO
		</p>
		<div id="div1" style="display:none;">
			<p>¿Por que?.. Seleccione una de las opciones</p>
			<select name="sel_preg1" multiple>
				<option value="0">Ya trabaja</option>
				<option value="1">Le ofrecieron trabajo</option>
				<option value="2">No se sentia preparada para trabajar</option>
				<option value="3">Razones familiares</option>
			</select>
		</div>
		<p>2. ¿Que tiempo transcurrio, hasta encontrar el primer empleo como Enfermera?</p>
		<select name="sel_preg2" multiple>
			<option value="0">Menos de 1 mes</option>
			<option value="1">De 1 a 6 meses</option>
			<option value="2">Entre 6 meses y 1 año</option>
			<option value="3">Entre 1 y 2 años</option>
			<option value="4">Mas de 2 años</option>
			<option value="5">No ejercio la carrera</option>
		</select>
		<p>3. ¿Actualmente trabaja? <br>
			<input type="radio" name="preg2" value="si" id="Conocido_1" onclick="mostrarReferencia2();" /> SI
			<input type="radio" name="preg2" value="no" id="Conocido_0" onclick="mostrarReferencia2();" /> NO
		</p>
		<div id="div2" style="display:none;">
			<p>Por favor seleccione la informacion de cuadro con su lugar de trabajo actual. (De ser necesario puede mascar mas de 1 opcion)</p>
			<table class="table" style="text-align: center;">
				<tr rowspan="2" class="warning">
					<td >Lugar de trabajo actual</td>
					<td >marque</td>
					<td >carga laboral</td>
					<td >Antiguedad en el puesto laboral</td>
				</tr>
				<tr class="success">
					<td>Clinicas Privadas</td>
					<td><input type="checkbox" name="clinica"></td>
					<td><select name="sel_preg3_1" multiple>
						<option value="0">Medio Tiempo</option>
						<option value="1">Tiempo completo</option>
					</select></td>
					<td><select name="" multiple>
						<option value="0">Menos de 1 año</option>
						<option value="1">Entre 1 a 3 años</option>
						<option value="2">Entre 3 a 5 años</option>
						<option value="3">Entre 5 a 10 años</option>
						<option value="4">Entre 10 a 15 años</option>
						<option value="5">Mayor a 15 años</option>
					</select></td>
				</tr>
				<tr class="success">
					<td>Seguridad Social</td>
					<td><input type="checkbox" name="seguridad"></td>
					<td><select name="sel_preg3_2" multiple>
						<option value="0">Medio Tiempo</option>
						<option value="1">Tiempo completo</option>
					</select></td>
					<td><select name="" multiple>
						<option value="0">Menos de 1 año</option>
						<option value="1">Entre 1 a 3 años</option>
						<option value="2">Entre 3 a 5 años</option>
						<option value="3">Entre 5 a 10 años</option>
						<option value="4">Entre 10 a 15 años</option>
						<option value="5">Mayor a 15 años</option>
					</select></td>
				</tr>
				<tr class="success">
					<td>Sistema Publico</td>
					<td><input type="checkbox" name="publico"></td>
					<td><select name="sel_preg3_3" multiple>
						<option value="0">Medio Tiempo</option>
						<option value="1">Tiempo completo</option>
					</select></td>
					<td><select name="" multiple>
						<option value="0">Menos de 1 año</option>
						<option value="1">Entre 1 a 3 años</option>
						<option value="2">Entre 3 a 5 años</option>
						<option value="3">Entre 5 a 10 años</option>
						<option value="4">Entre 10 a 15 años</option>
						<option value="5">Mayor a 15 años</option>
					</select></td>
				</tr>
				<tr class="success">
					<td>Sistema Educativo</td>
					<td><input type="checkbox" name="educativo"></td>
					<td><select name="sel_preg3_4" multiple>
						<option value="0">Medio Tiempo</option>
						<option value="1">Tiempo completo</option>
					</select></td>
					<td><select name="" multiple>
						<option value="0">Menos de 1 año</option>
						<option value="1">Entre 1 a 3 años</option>
						<option value="2">Entre 3 a 5 años</option>
						<option value="3">Entre 5 a 10 años</option>
						<option value="4">Entre 10 a 15 años</option>
						<option value="5">Mayor a 15 años</option>
					</select></td>
				</tr>
				<tr class="success">
					<td>Consultorias</td>
					<td><input type="checkbox" name="consultoria"></td>
					<td><select name="sel_preg3_5" multiple>
						<option value="0">Medio Tiempo</option>
						<option value="1">Tiempo completo</option>
					</select></td>
					<td><select name="" multiple>
						<option value="0">Menos de 1 año</option>
						<option value="1">Entre 1 a 3 años</option>
						<option value="2">Entre 3 a 5 años</option>
						<option value="3">Entre 5 a 10 años</option>
						<option value="4">Entre 10 a 15 años</option>
						<option value="5">Mayor a 15 años</option>
					</select></td>
				</tr>
				<tr class="success">
					<td>Independiente</td>
					<td><input type="checkbox" name="independiente"></td>
					<td><select name="sel_preg3_6" multiple>
						<option value="0">Medio Tiempo</option>
						<option value="1">Tiempo completo</option>
					</select></td>
					<td><select name="" multiple>
						<option value="0">Menos de 1 año</option>
						<option value="1">Entre 1 a 3 años</option>
						<option value="2">Entre 3 a 5 años</option>
						<option value="3">Entre 5 a 10 años</option>
						<option value="4">Entre 10 a 15 años</option>
						<option value="5">Mayor a 15 años</option>
					</select></td>
				</tr>
			</table>
		</div>
		<p>3. De acuerdo a su perfil profesional, seleccione el area en el cual Ud. ha desarrollado sus competencias. (Solo puede elegir dos opciones como maximo para no invalidar la respuesta)<br>
			<input type="checkbox" name="">Area de salud publica <br>
			<input type="checkbox" name="">Area clinica <br>
			<input type="checkbox" name="">Salud mental <br>
			<input type="checkbox" name="">Docencia e investigacion <br>
			<input type="checkbox" name="">Administracion hospitalaria <br>
		</p>
		<p>4. Seleccione la categoria profesional que ha ocupado en los ultimos 3 años. (Solo una opcion) <br></p>
		<select name="sel_preg4" multiple>
			<option value="0">Direccion</option>
			<option value="1">Jefatura</option>
			<option value="2">Supervision</option>
			<option value="3">Enfermera de base</option>
			<option value="4">Tecnico profesional</option>
		</select>
		<br>
		<button type="submit" class="btn btn-primary">ENVIAR DATOS</button>
	</form>
</div>
</body>
</html>