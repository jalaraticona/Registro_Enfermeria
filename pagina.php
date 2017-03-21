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
			<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/main.css" />
		</head>
		<body onload="reloj()">
			<div id="content">
				<div>
					<h1 align="center"><a href="http://enfermeria.fment.umsa.bo/">CARRERA DE ENFERMERIA </a></h1>
					<h2 align="right"><div id="clock"></div><br>
					<a href='logout.php'><button class="btn-sm btn-primary">Cerrar Sesion</button></a></h2><br>
					<article class="post">
							<h2><p><strong>PERFIL INSTITUCIONAL</strong></p></h2>
							<p>
								La Carrera de Enfermería de la Facultad de Medicina, Enfermería, Nutrición y Tecnología Médica  de la Universidad Mayor de San Andrés, con 34 años de trayectoria y vida universitaria, es una institución que ha sabido responder al imperativo de formar profesionales enfermeras y enfermeros, que a su vez respondan al encargo social, traducido en el "Cuidado de la Salud Boliviana"
							</p>
							<p>
								Para enfrentar este reto, La función de docencia de un conjunto de enfermeras  docentes calificadas y meritorias se empeña en que los estudiantes adquieran conocimientos, habilidades, conciencia y desarrollo de pensamiento crítico y reflexivo, necesarios e imprescindibles para involucrarse en la comunidad y participar en la solución de problemas de salud que son propias de la nación boliviana.
							</p>
							<p>
								Enfermería como profesión, interactúa con otras profesiones del área de la salud, sus acciones van encaminadas a la promoción y fomento de la salud, prevención y tratamiento de las enfermedades, y la rehabilitación de la persona enferma, en los tres niveles de atención.
							</p>
							<p>
								La función asistencial de enfermería está enfocada al cuidado y bienestar de la persona enferma, encaminada a la prevención o solución de los problemas de salud, reales o potenciales, cuando los sujetos sanos o enfermos, no pueden resolverlos por sí mismos, ya sea por carencia de información, recursos, impedimento físico o mental, tendiendo a que la persona, familia o comunidad logren la autosuficiencia en su cuidado.
							</p>
							<p>
								La función administrativo - gerencial le permite organizar, dirigir y controlar los servicios de enfermería, como eje principal de la salud. De igual manera en los tres niveles de atención.
							</p>
							<p>
								La función de investigación, está encaminada a la búsqueda de estrategias para promover tanto el mejoramiento de las tecnologías propias de enfermería, como el desarrollo de los servicios de salud, igualmente en los tres niveles de atención.
							</p>
					</article>
					<article class="post">
							<h2><p><strong>Misión y Visión de la Carrera</strong></p></h2>
							<p>Misión</p>
							<p>
								La Carrera de Enfermería tiene como misión, formar profesionales de Enfermería altamente competentes, con sólidos conocimientos científico técnicos de carácter crítico, analítico, reflexivo, valores y principios éticos comprometidos socialmente con la problemática y necesidades de salud de la población urbana y rural del país, que contribuyan al mejoramiento de la calidad de vida y desarrollo humano.
							</p>
							<p>Visión</p>
							<p>
								Carrera de Enfermería con prestigio y reconocimiento Nacional e Internacional, formadora de recursos humanos de enfermería con calidad y excelencia académica con conocimientos científico tecnológicos humanísticos de alta competitividad generando transformación, conocimiento, gestoras de políticas de salud con desempeño cualificado que le permita integrar equipos multidisciplinarios e interdisciplinarios, en diferentes niveles políticos administrativos, para el ejercicio profesional en escenarios nacionales e internacionales.
							</p>					
					</article>
					<article class="post">
							<p><strong>Objetivo General</strong></p>
							<p>Misión</p>
							<p>
								Formar profesionales científico, técnico y humanísticamente, con competencias para liderar el cuidado integral de Enfermería a la persona sana o enferma en todas las etapas de la vida; en su propio contexto familiar y social desarrollando actividades de promoción prevención recuperación y rehabilitación en los diferentes niveles de atención en salud y otros escenarios, tomando en cuenta los perfiles epidemiológicos prevalentes, locales, regionales y nacionales de la población boliviana.
							</p>
							<p>Antecedentes históricos</p>
							<p>
								El Estado Boliviano forma enfermeras a partir del año 1942, en la Escuela Nacional de Enfermeras y la Escuela de la Clínica Americana.
							</p>
							<p>
								Desde 1969 las Escuelas de Enfermería existentes en la Ciudad de La Paz, (Escuela Nacional de Enfermería, dependiente del Ministerio de Previsión Social y Salud Pública y la Escuela de Enfermería de la Clínica Americana dependiente de la Iglesia Metodista, realizan trámites a nivel de la Universidad Mayor de San Andrés, a través del Dr. Carlos Terrazas Rector y el Dr. Guillermo Jáuregui Guachalla, Ministro de Salud para integrarse al seno universitario.
							</p>
							<p>
								El 8 de junio de 1970, se constituye la Carrera de Enfermería de la Universidad Mayor de San Andrés, como integrante de la Facultad de Medicina, a partir del cual se inician los cambios en la enseñanza de Enfermería, debiendo ajustarse el programa a las normas establecidas en la Facultad, así como a la política, filosofía y objetivos de la Universidad.	
							</p>	
					</article>
				</div>
			</div>
			<div id="sidebar">
				<h1 id="logo"><a href="http://enfermeria.fment.umsa.bo/">Enfermeria</a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="registrooo.php">Registrar Inscripciones</a></li>
						<li><a href="operaciones.php">Operaciones</a></li>
						<li><a href="horarios.php">Horarios</a></li>
						<li><a href="reportes.php">Reportes</a></li>
					</ul>
				</nav>
				<section class="box search">
					<form method="post" action="buscar.php">
						<input type="text" class="text" name="search" placeholder="Search" />
					</form>
				</section>
				<section class="box recent-posts">
					<header>
						<h2>PAGINAS</h2>
					</header>
					<ul>
						<li><a href="http://www.umsa.bo/web/guest">UMSA</a></li>
						<li><a href="https://www.facebook.com/carreraenfermeria.umsa">Facebook ENFERMERIA</a></li>
						<li><a href="https://www.facebook.com/Facultad-de-Medicina-UMSA-133527743336592/">Facultad de MEDICINA</a></li>
					</ul>
				</section>
				<section>
					<a href='logout.php'><button class="btn-sm btn-primary">Cerrar Sesion</button></a>
				</section>
			</div>
			<script src="bootstrap-3.3.7-dist/js/reloj.js"></script>
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
