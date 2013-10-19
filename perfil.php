<?php require_once('header.php'); ?>
		<div id="main">
			<section>
				<h1>Perfil de XXXXX</h1>
				<div id="imgperfil">
					<img src="img/perfil/perfil.jpg" alt="" />
				</div>
				<div id="datosperfil">
					<ul>
						<li>Nombre y Apellido: AAAAAA AAAAAAA<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
						<li>Nickname: AAAAAA AAAAAAA<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
						<li>Email: AAAAAA AAAAAAA<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
						<li>Edad: AAAAAA AAAAAAA<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
					</ul>
				</div>
				<div id="tutoriales">
					<a href="crearTutorial.php" class="boton3">Crear Tutorial</a>
					<h3>
						Tutoriales de xxxx
						<a class="next" href="#"></a>
						<a class="prev" href="#"></a>
					</h3>
					<ul>
						<li>
							<img src="../img/tutoriales/img_tut03.jpg" alt="" /><p>Titulo Tutorial - <a href="tutoriales.php">Categoría</a> - <a href="tutorial.php" class="boton4">Ver Tutorial</a><a href="#" class="borrar"></a><a href="#" class="editar"></a></p>
						</li>
						<li>
							<img src="../img/tutoriales/img_tut03.jpg" alt="" /><p>Titulo Tutorial - <a href="tutoriales.php">Categoría</a> - <a href="tutorial.php" class="boton4">Ver Tutorial</a><a href="#" class="borrar"></a><a href="#" class="editar"></a></p>
						</li>
						<li>
							<img src="../img/tutoriales/img_tut03.jpg" alt="" /><p>Titulo Tutorial - <a href="tutoriales.php">Categoría</a> - <a href="tutorial.php" class="boton4">Ver Tutorial</a><a href="#" class="borrar"></a><a href="#" class="editar"></a></p>
						</li>
					</ul>
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