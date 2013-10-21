<?php require_once('header.php'); ?>
	<div id="main">
		<section>
	<?php require_once('conexion.php');
	if(isset ($_GET['id']))
	{
		$registros=mysql_query("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where id_tutorial='$_GET[id]'",$con);
		while($reg=mysql_fetch_array($registros))
		{
			echo ('
				<h1 class="titulo">'.$reg["titulo"].'</h1>
				<h3 class="subtitulo"><div class="der">00/00/2013</div> <div class="izq">de <a href="perfil.php?nickname='.$reg["autor"].'">'.$reg["autor"].'</a></div></h3>
				<article>
					<img src="img/tutoriales/img_tut02.jpg" alt="" />
					'.$reg["contenido"].'
					<div class="rating">
						<div class="izq"><input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> <input name="star1" type="radio" class="star"/> </div>
					</div>
				</article>
				</section>
			');
			require_once('lateralusuario.php');
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
