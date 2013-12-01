<div id="redessociales"><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<a href="https://www.facebook.com/pages/Tututo/1415391032025281?skip_nax_wizard=true" target="_blank"><img src="img/facebook.png" alt="facebook" /></a>
		<a href="https://twitter.com/tututoweb" target="_blank"><img src="img/twitter.png" alt="twitter" /></a>
		<a href="#"><img src="img/youtube.png" alt="youtube" /></a>
	</div>
	<div id="top">
		<a href="#"><img src="img/top.png" alt="" /></a>
	</div>
	<aside>
		<div class="publicidad">
			<h2>Categor&iacuteas</h2>
			<ul>
			<?php
				require_once('conexion.php');
				$res = @$conexion->query ("select * from categoria");
				//$res = $conexion->query ("call selectcategorias");
				while($fila=$res->fetch_object())
				{
					
					echo ('
					
					<li>
						<a href="tutoriales.php?categoria='.$fila->id_categoria.'">'.$fila->categoria.'</a>
					</li>
					');
				}
			?>
			</ul>
		</div>
		<div class="publicidad">
			<h2>Sponsors</h2>
			<img src="publicidad/125x125-nashi.jpg" alt="nashi" />
			<img src="publicidad/playstation.jpg" alt="nashi" />
		</div>
		<div class="publicidad">
			<h2>Facebook</h2>
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/Tututo/1415391032025281?fref=ts" data-width="270" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
		</div>
	</aside>
</div>
