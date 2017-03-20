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
				<div class="inner">
					<article class="box post post-excerpt">
							<h2><a href="http://enfermeria.fment.umsa.bo/">CARRERA DE ENFERMERIA </a><div id="clock" align="endif"></div></h2>
							<div id="clock"></div>
								<form method="post" action="buscar.php">
									<input type="text" class="text" name="search" placeholder="Search" />
								</form>
							</div>
							<p>
								<strong>Aqui viene texto botones tablas etc....</strong>
							</p>
							<p>
								texto links comentarios
							</p>
					</article>
					<article class="box post post-excerpt">
						<header>
							<h2><a href="#">Segunda categoria</a></h2>
							<p>aqui otras cosas reportes y lo demas</p>
						</header>
						<p>
							Desarrollar aun
						</p>
					</article>
				</div>
			</div>
			<div id="sidebar">
				<h1 id="logo"><a href="http://enfermeria.fment.umsa.bo/">Enfermeria</a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="registro.html">Registrar Inscripciones</a></li>
						<li><a href="operaciones.html">Operaciones</a></li>
						<li><a href="horarios.html">Horarios</a></li>
						<li><a href="reportes.html">Reportes</a></li>
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
