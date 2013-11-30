<?php
echo ('
		<div id="redessociales">
			<a href="https://www.facebook.com/pages/Tututo/1415391032025281?skip_nax_wizard=true"><img src="img/facebook.png" alt="facebook" /></a>
			<a href="https://twitter.com/TututoWeb"><img src="img/twitter.png" alt="twitter" /></a>
			<a href="#"><img src="img/youtube.png" alt="youtube" /></a>
		</div>
		<div id="top">
			<a href="#"><img src="img/top.png" alt="" /></a>
		</div>
		<aside>
			<h3 class="lateral">Autor '.$fila->autor.'</h4>
				<div id="imgperfil">
					<img src="avatar/'.$fila->autor.'.png" border="0" width="135" height="130" />
				</div>
				<div id="datosperfil">
					<ul>
						<li>Nickname: '.$fila->autor.'</li>
						<li>Email: <a href="mailto:'.$fila->email.'">'.$fila->email.'</a></li>
					</ul>
					<a href="perfil.php?nickname='.$fila->autor.'" class="boton2">ver Perfil</a>
				</div>
		</aside>
	</div>
');
