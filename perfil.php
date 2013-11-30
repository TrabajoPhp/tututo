<?php require_once('header.php'); ?>
	<?php require_once('conexion.php');
		require_once('/librerias/funciones.php');
		//$registros=mysql_query("select * from usuario where nickname='$_GET[nickname]'",$con);
		$registros=$conexion->query("select * from usuario where nickname='$_GET[nickname]'");
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
							<li>Nombre y Apellido: '.$reg->nombre.'</li>
							<li>Nickname: '.$reg->nickname.'</li>
							<li>Email: '.$reg->email.'</li>
							<li>Pais: '.$reg->direccion.'</li>
							<li>Edad: '.calculaedad ($reg->fecha_nac).'</li>
							<li><a href="ubicacion.php"  target="_blank"> Lugar desde donde estas conectado </a></li>
						</ul>
					</div>
					<div id="tutoriales">
						<h3>
							Tutoriales de '.$reg->nickname.'
						</h3>
						<ul>
			');
		}
			$registro2=$conexion->query("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where nickname='$_GET[nickname]' order by tutorial.fecha desc");
					$total_registros = mysqli_num_rows($registro2);
					while($fila=$registro2->fetch_object())
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
					<?php echo ($total_registros).' Items';	?>				
					</h3>
				</section>
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>