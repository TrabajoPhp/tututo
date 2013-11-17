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
					$res = $conexion->query ("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) INNER JOIN categoria ON (tutorial.categoriatut=categoria.id_categoria)order by fecha desc");
					while($fila=$res->fetch_object())
					{
						echo ('
						<li>
							<img src="img/tutoriales/img_tut03.jpg" alt="" /><p>'.$fila->titulo.' - <a href="tutoriales.php?categoria='.$fila->categoriatut.'">'.$fila->categoria.'</a> - <a href="tutorial.php?id='.$fila->id_tutorial.'" class="boton4">Ver Tutorial</a><a href="#" class="borrar"></a><a href="#" class="editar"></a></p>
						</li>
						');
					}?>
					</ul>
				</div>
				<h3>
					<?php
					$registros2=$conexion->query ("select count(*) as items from tutorial");
					$reg2=$registros2->fetch_object();
					echo ($reg2->items-1).' Items';
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
