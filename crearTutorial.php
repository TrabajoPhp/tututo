<?php require_once('header.php'); ?>
		<div id="main">
			<?php
				if(isset($_REQUEST['Enviar'])) 
				{
					require_once('conexion.php');
					$fecha = date("Y-m-d H:i:s");
					$res = $conexion->query ("insert into tutorial (autor,titulo,contenido,tipotut,categoriatut,fecha)values('$_SESSION[usuarioactual]','$_REQUEST[titulo]','$_REQUEST[contenido]','$_REQUEST[tipo]','$_REQUEST[categoria]','$fecha')");
					echo 'Su tutorial se subio perfecto!';  
				}
			?>
			<section>
				<h1>Crear un nuevo tutorial</h1>
				<article>
					<form action="#" method="POST" enctype="multipart/form-data">
						<ul>
							<li>
								<label for="titulo">Titulo:</label>
								<input type="text"  name="titulo" id="titulo" placeholder="Titulo" required />
							</li>
							<li>
								<label for="categoria">Categoría:</label>
								<select name="categoria" id="categoria">
									<option value="1">Arte</option>
									<option value="2">Economia</option>
									<option value="3">Historia</option>
								</select>
							</li>
							<li>
								<label for="tipo">Tipo:</label>
								<select name="tipo" id="tipo">
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
				</article>
			</section>
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>