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
					if(!isset($_GET['autor'])) 
					$_GET['autor']='';
					if(!isset($_GET['categoria'])) 
					$_GET['categoria']=0;
					if(!isset($_GET['palabra'])) 
					$_GET['palabra']='';
					$palabra =$_GET['palabra'];
					$res = @$conexion->query ("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) INNER JOIN categoria ON 
					(tutorial.categoriatut=categoria.id_categoria) where (tutorial.categoriatut='$_GET[categoria]' or categoriatut=0) or(autor='$_GET[autor]' or autor='') order by fecha desc");//and (titulo like concat ('%','$_GET[palabra]','%'))*/
					//$res = $conexion->query ("call selecttutoriales('$_GET[autor]','$_GET[categoria]','$_GET[palabra]')");
					$total_registros = mysqli_num_rows($res);
					if (!$total_registros) 
					{
						echo '<li>No hay tutoriales para mostrar</li>';
					}
					while($fila=$res->fetch_object())
					{
						echo ('
						<li>
							<a href="tutoriales.php?categoria='.$fila->categoriatut.'"><img src="img/categorias/cat'.$fila->categoriatut.'.png" alt="" /></a><p>'.$fila->titulo.' <div class="dertut"><a href="tutorial.php?id='.$fila->id_tutorial.'" class="boton4">Ver Tutorial</a><!--<a href="#" class="borrar"></a><a href="#" class="editar"></a>--></div></p>
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
