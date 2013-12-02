<?php 
require_once('conexion.php');
session_start();
		
		$fecha = date("Y-m-d H:i:s");
		$titulo = $_REQUEST['titulo'];
		$contenido = $_REQUEST['contenido'];
		$tipo =	$_REQUEST['tipo'];
		$categoria = $_REQUEST['categoria'];
		$autor=$_SESSION['usuarioactual'];
		$id=$_REQUEST['id'];
			
	
							
							$fecha = date("Y-m-d H:i:s");
							
							$sql = "UPDATE `tutorial` SET  `titulo`='$titulo' , `contenido`='$contenido', `tipotut`='$tipo', `categoriatut`='$categoria', `fecha`=$fecha  where `id_tutorial`='$id' && `autor`='$autor'";
							mysqli_query($conexion,$sql);
							mysqli_close($conexion);
							
							
?>						