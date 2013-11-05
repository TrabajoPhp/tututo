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
					$registros=mysql_query("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) order by fecha desc",$con);
					$i=0;
					while($reg=mysql_fetch_array($registros))
					{
						$i++;
						echo ('
						<div class="tut">
							<h4>'.$reg["titulo"].'</h4>
							<img src="img/tutoriales/img_tut.jpg" alt="" />
							<h5><a href="perfil.php?nickname='.$reg["autor"].'">'.$reg["autor"].'</a> | <a href="tutoriales.php?categoria='.$reg["categoriatut"].'">'.$reg["categoriatut"].'</a></h5>
							<div class="rating">
								<div class="izq"><input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> <input name="star'.$i.'" type="radio" class="star"/> </div>
								<div class="der"><a href="tutorial.php?id='.$reg["id_tutorial"].'">Ver Tutorial</a></div>
							</div>
						</div>
						');
					}?>
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
