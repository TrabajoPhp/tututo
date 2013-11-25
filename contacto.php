<?php require_once('header.php'); ?>
<?php require_once('seguridad.php'); ?>
		<div id="main">
			<section>
				<h1>Ponete en contacto con Tututo.com.ar</h1>
				<article>
					<?php
						if(isset($_REQUEST['Enviar'])) 
						{
							$nombre = $_POST['nombre'];
						   $email = $_POST['email'];
						   $mensaje = $_POST['mensaje'];
						   $cabeceras = 'From:'.$nombre .'<'.$email.'>'."\r\n";
						   $to = "info@tututo.com.ar";
						   $subject = "Formulario de contacto";
						   $cuerpo = "Nombre y Apellido: " . $_POST['nombre'] . "\n"."Email: " . $_POST['email'] . "\n"."Mensaje: " . $_POST['mensaje'] . "\n";

							mail($to, $subject, $cuerpo,$cabeceras);
							echo '<p class="confirmacion">Gracias por su mensaje!</p>';
						}
					?>
					<form action="#" method="POST">
						<ul>
							<li>
								<label for="nombre">Nombre y Apellido:</label>
								<input type="text"  name="nombre" id="nombre" placeholder="Nombre y Apellido" required />
							</li>
							<li>
								<label for="email">Email:</label>
								<input type="email"  name="email" id="email" placeholder="Email" required />
							</li>
							<li>
								<textarea name="mensaje" style="height:300px;width:600px;" required /></textarea>
							</li>
						</ul>
						<div class="der"><input type="submit" class="boton" value="Enviar" name="Enviar" /></div>
					</form>
				</article>
			</section>
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>