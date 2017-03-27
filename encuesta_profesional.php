<?php
	session_start();
	require_once("conexion.php");
	if($_SESSION["usuario"]){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title></title>
			<link rel="stylesheet" href="">
			<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
			<style type="text/css" media="screen">
				body{
					background-color: #C5A9A9;
					font-family: verdana;
					margin-top: 50px;
					margin-left: 200px;
					margin-right: 200px;
					margin-bottom: 50px;
				}
				h1,h2,h3,h4,h5,h6{
					font-family: calibri;
					text-align: center;
				}
			</style>
			<script type="text/javascript" charset="utf-8" async defer>
			function mostrarOcultar(){
				if(document.formulario.preg_1[0].checked == true){
					document.getElementById('div1').style.display = 'block';
				}
				else{
					document.getElementById('div1').style.display = 'none';
				}
			}
			function mostrar(){
				if(document.formulario.preg_1_2[0].checked == true){
					document.getElementById('td1').style.display = 'block';
					document.getElementById('td2').style.display = 'none';
					document.getElementById('td3').style.display = 'none';
					document.getElementById('td4').style.display = 'none';
				}
				else{
					if(document.formulario.preg_1_2[1].checked == true){
					document.getElementById('td1').style.display = 'none';
					document.getElementById('td2').style.display = 'block';
					document.getElementById('td3').style.display = 'none';
					document.getElementById('td4').style.display = 'none';
					}
					else{
						if(document.formulario.preg_1_2[2].checked == true){
							document.getElementById('td1').style.display = 'none';
							document.getElementById('td2').style.display = 'none';
							document.getElementById('td3').style.display = 'block';
							document.getElementById('td4').style.display = 'none';
							}
							else{
								document.getElementById('td1').style.display = 'none';
								document.getElementById('td2').style.display = 'none';
								document.getElementById('td3').style.display = 'none';
								document.getElementById('td4').style.display = 'block';
							}			
					}
				}
			}
			</script>
		</head>
		<body>
		<fieldset>
			<center><legend class="texto"><b>INFORMACION DE DESARROLLO PROFESIONAL</b></legend></center>
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
		<form action="registrar_profesional.php" method="post" accept-charset="utf-8" name="formulario" class="form-group">
			<div class="form-group">
				<p class="pager">1. ¿Ha cursado otros estudios de Post Grado despues de su egreso de la carrera de Enfermería?</p>
				<input type="radio" name="preg_1" value="si" onclick="mostrarOcultar();" checked>Si los he cursado
				<input type="radio" name="preg_1" value="estoy" onclick="mostrarOcultar();">Los estoy cursando
				<input type="radio" name="preg_1" value="no" onclick="mostrarOcultar();">No he cursado
			</div>
			<div id="div1" class="form-group">
				<p>En el caso que Ud. hubiera realizado cursos de Post Grado o los esta cursando. Por favor llene el siguiente cuadro y elija la opcion segun el area marcada. </p>
				<table class="table table-bordered">
					<tr style="text-align: center;" class="warning">
						<td colspan="4">Seleccione Post Grado</td>
					</tr>
					<tr class="success">
						<td><input type="radio" name="preg_1_1" value="Doctorado" checked>Doctorado</td>
						<td><input type="radio" name="preg_1_1" value="Maestria">Maestria</td>
						<td><input type="radio" name="preg_1_1" value="Especialidad">Especialidad</td>
						<td><input type="radio" name="preg_1_1" value="Diplomado">Diplomado</td>
					</tr>
					<tr style="text-align: center;" class="warning">
						<td colspan="4">Seleccione Area</td>
					</tr>
					<tr class="success">
						<td><input type="radio" name="preg_1_2" value="salud_publica" onclick="mostrar();" checked>Area Salud Publica</td>
						<td><input type="radio" name="preg_1_2" value="clinica" onclick="mostrar();">Area Clinica</td>
						<td><input type="radio" name="preg_1_2" value="salud_mental" onclick="mostrar();">Area Salud Mental</td>
						<td><input type="radio" name="preg_1_2" value="docente_investigacion" onclick="mostrar();">Area Docente e Investigacion</td>
					</tr>
					<tr class="success">
						<td id="td1"><select name="sel_preg1_1" multiple>
							<option value="0">Gerencia</option>
							<option value="1">Clima organizacional</option>
							<option value="2">Recursos Humanos</option>
							<option value="3">SAFCI</option>
							<option value="4">Gestion de Calidad</option>
							<option value="5">Gestion de servicios hospitalaria</option>
							<option value="6">Gestion de servicios en Enfermería</option>
							<option value="7">Atencion Primaria</option>
						</select></td>
						<td id="td2"><select name="sel_preg1_2" multiple>
							<option value="0">Pediatría</option>
							<option value="1">Gineco-Obstetricia</option>
							<option value="2">Neonatologia</option>
							<option value="3">Terapia Intensiva</option>
							<option value="4">Medico Quirurgico</option>
							<option value="5">Emergencias y Urgencias</option>
							<option value="6">Hemodialisis</option>
						</select></td>
						<td id="td3"><select name="sel_preg1_3" multiple>
							<option value="0">Psicología</option>
							<option value="1">Psiquiatría</option>
							<option value="2">Salud Ocupacional</option>
						</select></td>
						<td id="td4"><select name="sel_preg1_4" multiple>
							<option value="0">Educación Superior</option>
							<option value="1">Investigación</option>
						</select></td>
					</tr>
				</table>
			</div>
			<h3>NECESIDAD DE EDUCACION CONTINUA</h3>
			<div class="form-group">
				<p class="pager">2. Marque las necesidades de educacion continua que Ud. requiere y el grado academico que le gustaria lograr.</p>
				<select name="sel_preg2" class="form-control">
					<option value="0" selected>Medico Quirurgico</option>
					<option value="1">Medicina critica y Terapia intensiva</option>
					<option value="2">Salud publica</option>
					<option value="3">Salud neonatal</option>
					<option value="4">Pediatrica</option>
					<option value="5">Gineco-Obstetricia</option>
					<option value="6">Docente e investigacion</option>
					<option value="7">Etica y bioetica</option>
				</select>
			</div>
			<div class="form-group">
				<p>Registre 2 titulos de la necesidad de educacion continua</p>
				<label>Titulo 1:</label>
				<input type="text" name="titulo1" class="form-control" placeholder="Ingrese Titulo de la necesidad de educacion continua"><br>
				<label>Titulo 2:</label>
				<input type="text" name="titulo2" class="form-control" placeholder="Ingrese Titulo de la necesidad de educacion continua">
			</div>
			<br>
			<center><button type="submit" class="btn btn-primary">ENVIAR</button></center>
		</form>
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