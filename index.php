<?php require_once('header.php'); ?>
		<div id="main">
			<section>
				<h1>Home</h1>
				<div id="slider">
					<img src="img/slide.jpg" alt="" />
				</div>
				<div id="tutoriales">
					<h3>
						Últimos Tutoriales
						<a class="next" href="#"></a>
						<a class="prev" href="#"></a>
					</h3>
					<?php require_once('conexion.php');
					$res = $conexion->query ("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) INNER JOIN categoria ON (tutorial.categoriatut=categoria.id_categoria) order by fecha desc");
					$i=0;
					while($fila=$res->fetch_object())
					{
						$i++;
						echo ('
						<div class="tut">
							<h4>'.$fila->titulo.'</h4>
							<img src="img/categorias/bcat'.$fila->categoriatut.'.png" alt="" />
							<h5><a href="perfil.php?nickname='.$fila->autor.'">'.$fila->autor.'</a> | <a href="tutoriales.php?categoria='.$fila->categoriatut.'">'.$fila->categoria.'</a></h5>
							<div class="rating">
								<div class="izq"><input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> </div>
								<div class="der"><a href="tutorial.php?id='.$fila->id_tutorial.'">Ver Tutorial</a></div>
							</div>
						</div>
						');
					}
					?>
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
