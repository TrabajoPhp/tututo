<?php require_once('header.php'); ?>
	<div id="main">
		<section>
		<?php require_once('conexion.php');
		if(isset ($_GET['id']))
		{
			//$res = $conexion->query ("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where id_tutorial='$_GET[id]'");
			
			$res = $conexion->query ("call selecttutorial('$_GET[id]')");
			while($fila=$res->fetch_object())
			{
				if ($fila->tipotut==2 &&(!isset($_SESSION["autentica"])) )
				header ("Location: registroUsuario.php?privado");
				else
				{
					echo ('
						<h1 class="titulo">'.$fila->titulo.'</h1>
						<h3 class="subtitulo"><div class="der">'.$fila->fecha.'</div> <div class="izq">de <a href="perfil.php?nickname='.$fila->autor.'">'.$fila->autor.'</a></div></h3>
						<article class="tutorial">						
							'.$fila->contenido.'
							<div class="rating">
								<div class="izq"><input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> </div>
								<div class="der"><a href="">Bajar pdf</a></div>
							</div>
						</article>
						</section>
					');
					require_once('lateralusuario.php');
				}				
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
