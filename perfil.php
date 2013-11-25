<?php require_once('header.php'); ?>
	<?php require_once('conexion.php');
		
		function calculaedad($fechanacimiento){
			list($ano,$mes,$dia) = explode("-",$fechanacimiento);
			$ano_diferencia  = date("Y") - $ano;
			$mes_diferencia = date("m") - $mes;
			$dia_diferencia   = date("d") - $dia;
			if ($dia_diferencia < 0 || $mes_diferencia < 0)
			$ano_diferencia--;
			return $ano_diferencia;
		}
	
		//$registros=mysql_query("select * from usuario where nickname='$_GET[nickname]'",$con);
		$registros=$conexion->query("select * from usuario where nickname='$_GET[nickname]'");
		//while($reg=mysql_fetch_array($registros))
		while($reg=$registros->fetch_object())
		{
		echo('
			<div id="main">
				<section>
					<h1>Perfil de '.$reg->nickname.'</h1>
					<div id="imgperfil">
					 <img src="avatar/'.$reg->nickname.'.png" border="0" width="130" height="130">
					</div>
					<div id="datosperfil">
						<ul>
							<li>Nombre y Apellido: '.$reg->nombre.'<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
							<li>Nickname: '.$reg->nickname.'<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
							<li>Email: '.$reg->email.'<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
							<li>Pais: '.$reg->direccion.'<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
							<li>Edad: '.calculaedad ($reg->fecha_nac).'<a href="#" class="borrar"></a><a href="#" class="editar"></a></li>
						</ul>
					</div>
					<div id="tutoriales">
						<a href="crearTutorial.php" class="boton3">Crear Tutorial</a>
						
						<h3>
							Tutoriales de '.$reg->nickname.'
							<a class="next" href="#"></a>
							<a class="prev" href="#"></a>
						</h3>
						<ul>
			');
		}
			//$registro2=mysql_query("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where nickname='$_GET[nickname]'",$con);
			$registro2=$conexion->query("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where nickname='$_GET[nickname]'");
			//while($reg2=mysql_fetch_array($registro2))
			while($reg2=$registro2->fetch_object())
			{
				echo('
							<li>
								<img src="../img/tutoriales/img_tut03.jpg" alt="" /><p>'.$reg2->titulo.' - <a href="tutoriales.php">Categoría</a> - <a href="tutorial.php?id='.$reg2->id_tutorial.'" class="boton4">Ver Tutorial</a><a href="#" class="borrar"></a><a href="#" class="editar"></a></p>
							</li>
				');
			}
			?>
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