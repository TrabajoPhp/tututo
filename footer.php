		<footer>
			<?php 
			require_once('conexion.php');
			$res = $conexion->query ("select * from footermenu");
			while($fila=$res->fetch_object())
			{
				echo ('	<a href="pagina.php?id='.$fila->id_footermenu.'">'.$fila->footer_nombre.' </a> | ');
			}
			$conexion->close();
			?>
			<a href="contacto.php">Contacto </a>
		</footer>
		<div id="copyrigth">Tp Final | Programaci&oacuten web 2 | Alan Kraemer | Ezequiel Aramburu | Alicia Rosenthal</div>
	<!--datepicker-->
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
	<script src="js/funciones.js"></script>
	<!--sceditor-->
	<script src="./minified/jquery.sceditor.xhtml.min.js"></script>
	<script>
			$(document).ready(function() {
				var initEditor = function() {
					$("textarea").sceditor({
						plugins: 'bbcode',
						style: "./minified/jquery.sceditor.default.min.css"
					});
				};
				initEditor();
			});
	</script>
	<!--Scripts para el rating-->
	<script src='js/jquery.MetaData.js' type="text/javascript"></script>
	<script src='js/jquery.rating.js' type="text/javascript"></script>
	<!--Scripts para el slider-->
	<script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
	</body>
</html>