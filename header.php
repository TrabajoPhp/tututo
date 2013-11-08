<?php @session_start();
?>
<!doctype html>
<html lang ="es">
	<head>
		<meta charset="UTF-8">
		<title>Tututo.com.ar</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />	
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
		<link rel="author" type="text/plain" href="humans.txt"/>
		<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml"/>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<!--css rating-->
		<link rel="stylesheet" type="text/css" href="css/jquery.rating.css">
		<!--datepicker-->
		<link rel="stylesheet" type="text/css" href="css/jquery.css">
		<!--sceditor-->
		<link rel="stylesheet" href="minified/themes/default.min.css" type="text/css" media="all" />
	</head>
	<body>
		<header>
		<?php
			if(isset($_SESSION["autentica"]))
			{
				echo "
				<div id='login' style='display:none'>
				<form name='login' action='control.php' method='POST'>
					 <input type='text' name='nickname' placeholder='Nickname' required />
					 <input type='password' name='password' placeholder='Password' required />
					 <input type='submit' class='boton' value='login' />
				</form>
			</div>
			<!--cambiar aca a display none-->
			<div id='logueado'>
				<a href='salir.php' class='bsalir'>Salir</a> <a href='miperfil.php?nickname=$_SESSION[usuarioactual]' class='bconfig'>Mi perfil</a> <p>Hola, <strong> $_SESSION[usuarioactual]  </strong></p> 
			</div>";
			}
			else
			{
			echo '<a href="registroUsuario.php" class="boton2">Registrarme</a>
				<div id="login" >
				<form name="login" action="control.php" method="POST">
					 <input type="text" name="nickname" placeholder="Nickname" required />
					 <input type="password" name="password" placeholder="Password" required />
					 <input type="submit" class="boton" value="login" />
				</form>
			</div>
			<!--cambiar aca a display none-->
			<div id="logueado" style="display:none">
				<a href="salir.php" class="bsalir">Salir</a> <a href="miperfil.php" class="bconfig">Mi perfil</a><p>Hola, <strong> Nickname   $_SESSION[usuarioactual]  </strong></p> 
			</div>';
			}
		?>
			
			<div id="logo">
				<img src="img/logo.png" alt="mis tutoriales" />
			</div>
		</header>
		<nav>
			<div id="menu">
				<ul class="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="tutoriales.php">Categor&iacuteas</a>
						<ul>
						   <li><a href="tutoriales.php">Arte</a></li>
						   <li><a href="tutoriales.php">Historia</a></li>
						   <li><a href="tutoriales.php">Economia</a></li>
						</ul>
					</li>
					<?php 
						if(isset($_SESSION["autentica"]))
						{
						echo "<li><a href='perfil.php?nickname=$_SESSION[usuarioactual]'>Perfil</a></li>";
						echo "<li><a href='tutoriales.php?autor=$_SESSION[usuarioactual]'>Mis Tutoriales</a></li>";
						}
					?>
				</ul>
				<div id="search">
					<form name="search" action="tutoriales.php" method="GET">
						<input type="search" name="busqueda" placeholder="Buscar..." required>
						<input type="submit" class="boton" value="ir">
					</form>
				</div>
			</div>
		</nav>
