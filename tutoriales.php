<?php require_once('header.php'); ?>
		<div id="main">
			<section>
				<div id="tutoriales">
					<h3>
						Tutoriales
						<a class="next" href="#"></a>
						<a class="prev" href="#"></a>
					</h3>
					<ul>
					<?php require_once('conexion.php');
					$registros=mysql_query("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname)",$con);
					while($reg=mysql_fetch_array($registros))
					{
						echo ('
						<li>
							<img src="img/tutoriales/img_tut03.jpg" alt="" /><p>'.$reg["titulo"].' - <a href="tutoriales.php">Categoría</a> - <a href="tutorial.php?id='.$reg["id_tutorial"].'" class="boton4">Ver Tutorial</a><a href="#" class="borrar"></a><a href="#" class="editar"></a></p>
						</li>
						');
					}?>
					</ul>
				</div>
				<h3>
					<?php
					$registro2=mysql_query("select count(*) as items from tutorial",$con);
					$reg2=mysql_fetch_array($registro2);
					echo ($reg2["items"].' Items');
					?>
					<a class="next" href="#"></a>
					<a class="prev" href="#"></a>
					<a class="pag" href="#">8</a>
					<a class="pag" href="#">7</a>
					<a class="pag" href="#">6</a>
					<a class="pag" href="#">5</a>
					<a class="pag" href="#">4</a>
					<a class="pag" href="#">3</a>
					<a class="pag" href="#">2</a>
					<a class="selected" href="#">1</a>
				</h3>
			</section>
		<?php require_once('lateral.php'); ?>
	<?php require_once('footer.php'); ?>
