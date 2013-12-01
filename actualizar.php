<?php require_once('header.php'); ?>
<?php require_once('seguridad.php'); ?>

		<div id="main">
				<?php
					if(isset ($_GET['mensaje']))
					echo '<p class="confirmacion">Perfil actualizado correctamente!</p>';
				?>
				<?php
					if(isset ($_GET['mensaje1']))
					echo '<p class="confirmacion">El fomato de la foto no es valido</p>';
				?>
				<?php
								if(isset ($_GET['mensaje2']))
								echo '<p class="confirmacion">Las contraseñas no son iguales</p>';
							?>
					<section>
				
				<?php
									require_once('conexion.php');
									$nickname = $_SESSION['usuarioactual'];
									$res = $conexion->query("select * from usuario where nickname='$nickname'");
									$resultado=$res->fetch_object();
										echo ("		
													<div>
																			
														
												
								<h3>Actualizacion de datos del Usuario: ".$resultado->nombre."</h3>
				<article>
					<form method='POST' enctype='multipart/form-data' action='actualizacion.php'>
						<ul>
							<li>
								<label for='nombre'>Nombre y Apellido:</label>
								<input type='text'  name='nombre' id='nombre' value='".$resultado->nombre."' required />
							</li>
							<li>
								<label for='email'>Email:</label>
								<input type='email' name='email' id='email'   value='".$resultado->email."' required />
							</li>
							
							<li>
								<label for='password'>Contraseña:</label>
								<input type='password' name='password' id='password' value='".$resultado->password."' required />
							</li>
							<li>
								<label for='repassword'>Repetir Contraseña:</label>
								<input type='password' name='repassword' id='repassword' placeholder='Repetir Contraseña'required /><!--falta validar-->
							</li>
							<li>
								<label for='foto'>Foto perfil:</label>
								<input type='file' name='imagen' id='imagen' />
							</li>
							<li>
								<label for='datepicker'>Fecha de Nacimiento: </label><input type='text' id='datepicker' name='fecha' value='".$resultado->fecha_nac."' required />
							</li>
							
						</ul>
						<div class='der'><input type='submit' class='boton' value='actualizar' name='actualizar' /></div>
					</form>
				</article></div>
				");
				
				?>
				
			</section>
					
					</div>
			
			<?php require_once('lateral.php'); ?>
		<?php require_once('footer.php'); ?>