<?php require_once('header.php'); ?>
		<div id="main">
					<section>
				<?php
					if(isset ($_GET['privado']))
					{
						echo '<h1 class="titulo">Este tutorial es privado</h1>
						<p>Este tutorial es privado, para verlo, tenés que loguearte o registrate.</p>
						<h3>Si ya estás registrado, ingresa con tus datos</h3>
						<article>
							<form name="login" action="control.php" method="POST">
								 <input type="text" name="nickname" placeholder="Nickname" required />
								 <input type="password" name="password" placeholder="Password" required />
								 <input type="submit" class="boton" value="login" />
							</form>
						</article>
						';
					}
				?>

				<h3>Registro de Usuario</h3>
				<?php
					if(isset ($_GET['mensaje']))
					echo '<p class="confirmacion">Gracias registrarse en tututo!</p>';
				?>
				<article>
					<form action="registro.php" method="POST" enctype="multipart/form-data" name="registro" id="registro">
						<ul>
							<li>
								<label for="nombre">Nombre y Apellido:</label>
								<input type="text"  name="nombre" id="nombre" placeholder="Nombre y Apellido" required />
							</li>
							<li>
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" placeholder="nombre@ejemplo.com.ar" required />
							</li>
							<li>
								<label for="nickname">Nickname:</label>
								<input type="text" name="nickname" id="nickname" placeholder="Nickname" required />
							</li>
							<?php
								if(isset ($_GET['mensaje3']))
								echo '<p class="confirmacion">Este nickname ya ha sido registrado anteriormente.</p>';
							?>
							<li>
								<label for="password">Contraseña:</label>
								<input type="password" name="password" id="password" placeholder="Contraseña" required />
							</li>
							<?php
								if(isset ($_GET['mensaje2']))
								echo '<p class="confirmacion">Las contraseñas no son iguales</p>';
							?>
							<li>
								<label for="repassword">Repetir Contraseña:</label>
								<input type="password" name="repassword" id="repassword" placeholder="Repetir Contraseña" required /><!--falta validar-->
							</li>
							<li>
								<label for="foto">Foto perfil:</label>
								<input type="file" name="imagen" id="imagen" required />
							</li>
							<li>
								<label for="direccion">Pais:</label>
									<select name="direccion" id="direccion" >
									<?php require_once('conexion.php');
									$res = $conexion->query ("select * from pai_pais");
									while($fila=$res->fetch_object())
									{
										echo ('<option>'.$fila->PAI_NOMBRE.'</option>');
									}
									?>
									</select> 
							</li>
							<li>
								<!--<label for="fecha">Fecha de Nacimiento: </label><input type="date" id="fecha" name="fecha" required />-->
								<label for="datepicker">Fecha de Nacimiento: </label><input type="text" id="datepicker" name="fecha" required />
							</li>
							<li>
								<input type="checkbox" name="mybox" value="acepto" required> Acepto términos y condiciones
							</li>
						</ul>
						<div class="der"><input type="submit" class="boton" value="Registrarme" name="enviar" /></div>
					</form>
				</article>
			</section>
								  
						<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>
