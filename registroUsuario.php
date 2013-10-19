<?php require_once('header.php'); ?>
		<div id="main">
			<section>
				<h1>Registro de Usuario</h1>
				<article>
					<form action="registro.php" method="POST">
						<ul>
							<li>
								<label for="nombre">Nombre:</label>
								<input type="text"  name="nombre" id="nombre" placeholder="Nombre" required />
							</li>
							<li>
								<label for="apellido">Apellido:</label>
								<input type="text"  name="apellido" id="apellido" placeholder="Apellido" required />
							</li>
							<li>
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" placeholder="nombre@ejemplo.com.ar" required />
							</li>
							<li>
								<label for="nickname">Nickname:</label>
								<input type="text" name="nickname" id="nickname" placeholder="Nickname" required />
							</li>
							<li>
								<label for="password">Contraseña:</label>
								<input type="password" name="password" id="password" placeholder="Contraseña" required />
							</li>
							<li>
								<label for="repassword">Repetir Contraseña:</label>
								<input type="password" name="repassword" id="repassword" placeholder="Repetir Contraseña" /><!--falta validar-->
							</li>
							<li>
								<label for="direccion">Dirección:</label>
								<input type="text" name="direccion" id="direccion" placeholder="Calle-Ciudad-Provincia" required />
							</li>
							<li>
								<label for="datepicker">Fecha de Nacimiento: </label><input type="text" id="datepicker" name="fecha" required />
							</li>
							<li>
								<input type="checkbox" name="mybox" value="acepto" required> Acepto términos y condiciones
							</li>
						</ul><div class="der"><input type="submit" class="boton" value="Registrarme" /></div>
					</form>
				</article>
			</section>
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>
