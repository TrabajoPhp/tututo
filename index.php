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
					<div class="tut">
						<h4>Titulo Tutorial</h4>
						<img src="img/tutoriales/img_tut.jpg" alt="" />
						<h5><a href="pag/perfil.php">Autor</a> | <a href="pag/perfil.php">Categoría</a></h5>
						<div class="rating">
							<div class="izq"><input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> </div>
							<div class="der"><a href="pag/tutorial.php">Ver Tutorial</a></div>
						</div>
					</div>
					<div class="tut">
						<h4>Titulo Tutorial</h4>
						<img src="img/tutoriales/img_tut.jpg" alt="" />
						<h5><a href="perfil.php">Autor</a> | <a href="perfil.php">Categoría</a></h5>
						<div class="rating">
							<div class="izq"><input name="star2" type="radio" class="star"/> <input name="star2" type="radio" class="star"/> <input name="star2" type="radio" class="star"/> <input name="star2" type="radio" class="star"/> <input name="star2" type="radio" class="star"/> </div>
							<div class="der"><a href="pag/tutorial.php">Ver Tutorial</a></div>
						</div>
					</div>
					<div class="tut">
						<h4>Titulo Tutorial</h4>
						<img src="img/tutoriales/img_tut.jpg" alt="" />
						<h5><a href="perfil.php">Autor</a> | <a href="perfil.php">Categoría</a></h5>
						<div class="rating">
							<div class="izq"><input name="star3" type="radio" class="star"/> <input name="star3" type="radio" class="star"/> <input name="star3" type="radio" class="star"/> <input name="star3" type="radio" class="star"/> <input name="star3" type="radio" class="star"/> </div>
							<div class="der"><a href="pag/tutorial.php">Ver Tutorial</a></div>
						</div>
					</div>
				</div>
				<h3>
					xx Items			
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
