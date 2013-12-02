<?php require_once('header.php'); ?>
<?php require_once('seguridad.php'); ?>
		<div id="main">
			<section>
				<h1>Crear un nuevo tutorial</h1>
				<article>
					<?php
						
					?>
					<form action="#" method="POST" enctype="multipart/form-data">
						<ul>
							<li>
								<label for="titulo">Titulo:</label>
								<input type="text"  name="titulo" id="titulo" placeholder="Titulo" required />
							</li>
							<li>
								<label for="categoria">Categoría:</label>
								<select name="categoria" id="categoria">
									<?php
									require_once('conexion.php');
									$res = $conexion->query ("select * from categoria");
									while($fila=$res->fetch_object())
									{
										$i++;
										echo ('<option value="'.$fila->id_categoria.'">'.$fila->categoria.'</option>');
									}
									?>
								</select>
							</li>
							<li>
								<label for="tipo">Tipo:</label>
								<select name="tipo" id="tipo">
									<?php
									$res2 = $conexion->query ("select * from tipo");
									while($fila=$res->fetch_object())
									{
										$i++;
										echo ('<option value="'.$fila->id_tipo.'">'.$fila->tipo.'</option>');
									}
									?>
									<option value="1">P&uacute;blico</option>
									<option value="2">Privado</option>
								</select>
							</li>
							<li>
								<textarea name="contenido" style="height:300px;width:600px;"></textarea>
							</li>
						</ul>
						<div class="der"><input type="submit" class="boton" value="Enviar" name="Enviar" /></div>
					</form>
					<?php
						if(isset($_REQUEST['Enviar'])) 
						{
							require_once('conexion.php');
							$fecha = date("Y-m-d H:i:s");
							$res3 = $conexion->query ("insert into tutorial (autor,titulo,contenido,tipotut,categoriatut,fecha)values('$_SESSION[usuarioactual]','$_REQUEST[titulo]','$_REQUEST[contenido]','$_REQUEST[tipo]','$_REQUEST[categoria]','$fecha')"); 
							echo '<p class="confirmacion">Su tutorial se subio perfecto!</p>';
						}
					?>
				</article>
			</section>
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>