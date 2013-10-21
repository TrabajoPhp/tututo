<?php
echo ('
		<div id="redessociales">
			<a href="#"><img src="img/facebook.png" alt="facebook" /></a>
			<a href="#"><img src="img/twitter.png" alt="twitter" /></a>
			<a href="#"><img src="img/youtube.png" alt="youtube" /></a>
		</div>
		<div id="top">
			<a href="#"><img src="img/top.png" alt="" /></a>
		</div>
		<aside>
			<h3 class="lateral">Autor '.$reg["autor"].'</h4>
				<div id="imgperfil">
					<img src="img/perfil/perfil.jpg" alt="" />
				</div>
				<div id="datosperfil">
					<ul>
						<li>Nickname: '.$reg["autor"].'</li>
						<li>Email: <a href="mailto:'.$reg["email"].'">'.$reg["email"].'</a></li>
					</ul>
					<a href="perfil.php?nickname='.$reg["autor"].'" class="boton2">ver Perfil</a>
				</div>
		</aside>
	</div>
');