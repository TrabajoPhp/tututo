<?php session_start();?>
<?php include("seguridad.php"); ?>
<?php require_once('header.php'); ?>
		<div id="main">
		
				<h1>Bienvenido al sistema!</h1>
				<br><h3>Usuario: <? $usuario=$_SESSION["usuarioactual"]; echo $usuario; ?> </h3><br>
				<br><p>Entro correctamente al sistema.</p><br><br>
				<br><a href="salir.php">Salir</a>
		
		
		</div>	
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>
