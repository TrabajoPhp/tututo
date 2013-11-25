<?php require_once('header.php'); ?>
	<div id="main">
		<section>
		<?php require_once('conexion.php');
		if(isset ($_GET['id']))
		{
			$res = $conexion->query ("select * from footermenu where id_footermenu='$_GET[id]'");
			
			while($fila=$res->fetch_object())
			{
				echo ('
						<h1 class="titulo">'.$fila->footer_titulo.'</h1>
						<article class="tutorial">						
							'.$fila->footer_contenido.'
						</article>
						</section>
				');
					require_once('lateral.php');			
			}
		}
		else
		{
			echo('
					<h4>No hay tutoriales para mostrar</h4>
					</section>
				');
			require_once('lateral.php');
		}
		?>
	<?php require_once('footer.php'); ?>
