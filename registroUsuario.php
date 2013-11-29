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
				<script>
					
				<h3>Registro de Usuario</h3>
				<article>
					<form action="registro.php" method="POST" enctype="multipart/form-data" id="registro">
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
							<li>
								<label for="password">Contraseña:</label>
								<input type="password" name="password" id="password" placeholder="Contraseña" required />
							</li>
							<li>
								<label for="repassword">Repetir Contraseña:</label>
								<input type="password" name="repassword" id="repassword" placeholder="Repetir Contraseña" /><!--falta validar-->
							</li>
							<li>
								<label for="foto">Foto perfil:</label>
								<input type="file" name="imagen" id="imagen" required />
							</li>
							<li>
								<label for="direccion">Pais:</label>
											<select name="direccion" id="direccion" >
																	<option>Argentina</option>
																	<option>Afganistán</option>
																	<option>Albania</option>
																	<option>Alemania</option>
																	<option>Andorra</option>
																	<option>Anguila</option>
																	<option>Antigua República Yugoslava de Macedonia</option>
																	<option>Antigua y Barbuda</option>
																	<option>Arabia Saudí</option>
																	<option>Argelia</option>																	
																	<option>Armenia</option>
																	<option>Australia</option>
																	<option>Austria</option>
																	<option>Azerbaiyán</option>
																	<option>Bahamas</option>
																	<option>Bahráin</option>
																	<option>Bangladesh</option>
																	<option>Barbados</option>
																	<option>Bélgica</option>
																	<option>Belice</option>
																	<option>Benín</option>
																	<option>Bermudas</option>
																	<option>Bielorrusia</option>
																	<option>Birmania (actualmente Myanmar) </option>
																	<option>Bolivia</option>
																	<option>Bosnia y Herzegovina</option>
																	<option>Botsuana</option>
																	<option>Brasil</option>
																	<option>Brunéi</option>
																	<option>Bulgaria</option>
																	<option>Burkina Faso</option>
																	<option>Burundi</option>
																	<option>Bután</option>
																	<option>Cabo Verde</option>
																	<option>Camboya</option>
																	<option>Camerún</option>
																	<option>Canadá</option>
																	<option>Chad</option>
																	<option>Chequia</option>
																	<option>Chile</option>
																	<option>Chile</option>
																	<option>Chipre</option>
																	<option>Cisjordania y Franja de Gaza</option>
																	<option>Colombia</option>
																	<option>Comoras</option>
																	<option>Congo</option>
																	<option>Corea del Norte</option>
																	<option>Corea del Sur</option>
																	<option>Costa de Marfil</option>
																	<option>Costa Rica</option>
																	<option>Croacia</option>
																	<option>Cuba</option>
																	<option>Dinamarca</option>
																	<option>Dominica</option>
																	<option>Ecuador</option>
																	<option>Egipto</option>
																	<option>El Salvador</option>
																	<option>Emiratos Árabes Unidos</option>
																	<option>Eritrea</option>
																	<option>Eslovaquia</option>
																	<option>Eslovenia</option>
																	<option>España</option>
																	<option>Estados Unidos</option>
																	<option>Estonia</option>
																	<option>Estonia</option>
																	<option>Etiopía</option>
																	<option>Filipinas</option>
																	<option>Finlandia</option>
																	<option>Fiyi</option>
																	<option>Francia</option>
																	<option>Gabón</option>
																	<option>Gambia</option>
																	<option>Georgia</option>
																	<option>Ghana</option>
																	<option>Granada</option>
																	<option>Grecia</option>
																	<option>Guadalupe</option>
																	<option>Guadalupe</option>
																	<option>Guam</option>
																	<option>Guatemala</option>
																	<option>Guinea</option>
																	<option>Guinea-Bissau</option>
																	<option>Guinea Ecuatorial</option>
																	<option>Guyana</option>
																	<option>Haití</option>
																	<option>Holanda (Países Bajos)</option>
																	<option>Honduras</option>
																	<option>Hong Kong</option>
																	<option>Hungría</option>
																	<option>India</option>
																	<option>Indonesia</option>
																	<option>Irán</option>
																	<option>Iraq</option>
																	<option>Irlanda</option>
																	<option>Islandia</option>
																	<option>Islas Marshall</option>
																	<option>Islas Salomón</option>
																	<option>Israel</option>
																	<option>Italia</option>
																	<option>Jamaica</option>
																	<option>Japón</option>
																	<option>Jordania</option>
																	<option>Kazajistán</option>
																	<option>Kenia</option>
																	<option>Kirguizistán</option>
																	<option>Kiribati</option>
																	<option>Kuwait</option>
																	<option>Laos</option>
																	<option>Lesoto</option>
																	<option>Letonia</option>
																	<option>Líbano</option>
																	<option>Liberia</option>
																	<option>Libia</option>
																	<option>Liechtenstein</option>
																	<option>Lituania</option>
																	<option>Luxemburgo</option>
																	<option>Macedonia</option>
																	<option>Madagascar</option>
																	<option>Malasia</option>
																	<option>Malaui</option>
																	<option>Maldivas</option>
																	<option>Malí</option>
																	<option>Malta</option>
																	<option>Marruecos</option>
																	<option>Mauritania</option>
																	<option>Mauricio</option>
																	<option>México</option>
																	<option>Micronesia</option>
																	<option>Moldavia</option>
																	<option>Mónaco</option>
																	<option>Mongolia</option>
																	<option>Montenegro</option>
																	<option>Mozambique</option>
																	<option>Myanmar</option>
																	<option>Namibia</option>
																	<option>Nauru</option>
																	<option>Nepal</option>
																	<option>Nueva Zelanda</option>
																	<option>Nicaragua</option>
																	<option>Níger</option>
																	<option>Nigeria</option>
																	<option>Niue</option>
																	<option>Noruega</option>
																	<option>Omán</option>
																	<option>Países Bajos</option>
																	<option>Pakistán</option>
																	<option>Palau</option>
																	<option>Palestina</option>
																	<option>Panamá</option>
																	<option>Papúa-Nueva Guinea</option>
																	<option>Paraguay</option>
																	<option>Perú</option>
																	<option>Polonia</option>
																	<option>Portugal</option>
																	<option>Puerto Rico</option>
																	<option>Quatar</option>
																	<option>Reino Unido</option>
																	<option>República Centroafricana</option>
																	<option>República Democrática del Congo</option>
																	<option>República Democrática del Congo</option>
																	<option>República Dominicana</option>
																	<option>Rumania</option>
																	<option>Rusia</option>
																	<option>Ruanda</option>
																	<option>Sahara Occidental</option>
																	<option>Samoa</option>
																	<option>San Cristóbal y Nieves</option>
																	<option>San Marino</option>
																	<option>San Vicente y las Granadinas</option>
																	<option>Santa Lucía</option>
																	<option>Santo Tomé y Príncipe</option>
																	<option>Senegal</option>
																	<option>Serbia</option>
																	<option>Seychelles</option>
																	<option>Sierra Leona</option>
																	<option>Singapur</option>
																	<option>Siria</option>
																	<option>Somalía</option>
																	<option>Sri Lanka</option>
																	<option>Sudáfrica</option>
																	<option>Sudán</option>
																	<option>Suecia</option>
																	<option>Suiza</option>
																	<option>Surinam</option>
																	<option>Suazilandia</option>
																	<option>Tailandia</option>
																	<option>Taiwán</option>
																	<option>Tanzania</option>
																	<option>Tayikistán</option>
																	<option>Timor Oriental</option>
																	<option>Togo</option>
																	<option>Tonga</option>
																	<option>Trinidad y Tobago</option>
																	<option>Túnez</option>
																	<option>Turkmenistán</option>
																	<option>Turquía</option>
																	<option>Tuvalu</option>
																	<option>Ucrania</option>
																	<option>Uganda</option>
																	<option>Uruguay</option>
																	<option>Uzbekistán</option>
																	<option>Vanuatu</option>
																	<option>Vaticano</option>
																	<option>Venezuela</option>
																	<option>Vietnam</option>
																	<option>Yemen</option>
																	<option>Yibuti</option>
																	<option>Yugoslavia</option>
																	<option>Zambia</option>
																	<option>Zimbabue</option>
</select> <a href="ubicacion.php"  target="_blank"> Lugar desde donde estas conectado <a>
								
							</li>
							<li>
								<label for="date">Fecha de Nacimiento: </label><input type="date" id="date" name="fecha"  required />
								 
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
