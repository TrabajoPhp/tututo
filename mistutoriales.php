<?php require_once('header.php'); ?>
		<div id="main">
			<section>
				<div id="tutoriales">
					<h3>
						Tutoriales
					</h3>
					<ul>
					<?php require_once('conexion.php');
					$registro2=$conexion->query("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where nickname='$_GET[nickname]' order by tutorial.fecha desc");
					$total_registros = mysqli_num_rows($registro2);
					if (!$total_registros) 
					{
						echo '<li>No hay tutoriales para mostrar</li>';
					}
					while($fila=$registro2->fetch_object())
					{
						echo ('
						<li>
								<p>'.$fila->titulo.'<div class="dertut"><a href="tutorial.php?id='.$fila->id_tutorial.'" class="boton4">Ver Tutorial</a><a href="#" class="borrar"></a><a href="#" class="editar"></a></div></p>
						</li>
						');
					}
					?>
					</ul>
				</div>
				<h3>
					<?php
					echo ($total_registros).' Items';
					?>
				</h3>
			</section>
		<?php require_once('lateral.php'); ?>
	<?php require_once('footer.php'); ?>
