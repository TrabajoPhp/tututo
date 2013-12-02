<?php require_once('header.php'); ?>
	<div id="main">
		
		
		<?php require_once('conexion.php');
		if(isset ($_GET['id']))
			{ 
			@$autor=$_SESSION['usuarioactual'];
			$res = $conexion->query ("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where id_tutorial='$_GET[id]' && autor='$autor'");
			while($fila=$res->fetch_object())
			{ echo ('<div id="main"><section>
		<h1>¿Esta Seguro que desea borrar el tutorial "'.$fila->titulo.'"?</h1>
		<article>
		<form action="#" method="POST" enctype="multipart/form-data">
		<li>
		<input type="submit" class="boton" value="Borrar" name="Borrar" /> <input type="submit" onClick="location.href ="tutorial.php?id='.$fila->id_tutorial.'" class="boton" value="Cancelar" name="Cancelar" />
		</li>		
		</form><article></section></div>');
			}}?>
			
			
			<?php require_once('conexion.php');
			@$autor=$_SESSION['usuarioactual'];

			
			if(isset($_POST['Borrar'])) 
			{
			
			
			$id = $_GET['id'];
				  
				$res = $conexion->query ("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where id_tutorial='$_GET[id]' && autor='$autor'");
				 
				if ($reg=mysqli_fetch_array($res))
				{
				
				  mysqli_query($conexion,"DELETE FROM `tutorial` WHERE `id_tutorial` = '$_GET[id]'") or
					die(mysqli_error($conexion));    
				   echo"<script>alert('Tutorial borrado con exito');
               window.location.href=\"mistutoriales.php?nickname=$autor\"</script>";	  
				}      
				else
				  echo 'No se pudo borrar';
				
				mysqli_close($conexion);
				
						
				 
			}
			
			if(isset($_POST['Cancelar'])) 
			{
			
				echo"<script>
               window.location.href=\"mistutoriales.php?nickname=$autor\"</script>";	  
				
			}
			
			
		?>
		
		
		</div>
		
	<?php 	
	require_once("lateral.php");
	require_once('footer.php'); ?>