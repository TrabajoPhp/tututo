<?php session_start();?>
<?php include("seguridad.php"); ?>
<?php require_once('header.php'); ?>
		<div id="main">
		
				<h1>Bienvenido al sistema!</h1>
				<br><h3>Usuario: <?php echo " $_SESSION[usuarioactual] "  ?> </h3><br>
				<br><p><h3>Entro correctamente al sistema.</h3></p><br><br>
				<br><a href="salir.php">Salir</a>
		
		
		</div>	
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>
