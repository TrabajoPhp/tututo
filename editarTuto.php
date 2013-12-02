<?php require_once('header.php'); ?>
	<div id="main">
		<section>
		<h1>Actualizar un tutorial</h1>
		<?php require_once('conexion.php');
		if(isset ($_GET['id']))
			{ 
			$autor=$_SESSION['usuarioactual'];
			$res = $conexion->query ("select * from tutorial INNER JOIN usuario ON(tutorial.autor=usuario.nickname) where id_tutorial='$_GET[id]' && autor='$autor'");
			while($fila=$res->fetch_object())
			{
				if ($fila->tipotut==2 &&(!isset($_SESSION["autentica"])) )
				header ("Location: registroUsuario.php?privado");
				else
				{
					echo ('
					<article>
					
					<form action="#" method="POST" enctype="multipart/form-data">
						<ul>
							<li>
								<label for="titulo">Titulo:</label>
								<input type="text"  name="titulo" id="titulo" value="'.$fila->titulo.'" required />
							</li>
							<li>
								<label for="categoria">Categoría:</label>
								<select name="categoria" id="categoria">
									');
									$res1= $conexion->query ("select * from categoria");
									while($fila1=$res1->fetch_object())
									{
										$i++;
										echo ('<option value="'.$fila1->id_categoria.'">'.$fila1->categoria.'</option>');
									}
					echo ('				
								</select>
							</li>
							<li>
								<label for="tipo">Tipo:</label>
								<select name="tipo" id="tipo">
								');	
									$res2 = $conexion->query ("select * from tipo");
									while($fila2=$res2->fetch_object())
									{
										$i++;
										echo ('<option value="'.$fila2->id_tipo.'">'.$fila2->tipo.'</option>');
									}
					echo ('				
								</select>
							</li>
							<li>
								<textarea name="contenido" style="height:300px;width:600px;" value="'.$fila->contenido.'" required></textarea>
							</li>
						</ul>
						<div class="der"><input type="submit" class="boton" value="Enviar" name="Enviar" /></div>
					</form>
					</article>');
				}
			}
		}	
			else
		{
			echo('
					<h4>No hay tutoriales para mostrar</h4>
					
				');
		}
		?>
		<?php
			if(isset($_REQUEST['Enviar'])) 
			{
				require_once('conexion.php');
				$fecha = date("Y-m-d H:i:s");
				$sql = "UPDATE `tutorial` SET  `titulo`='$_REQUEST[titulo]' , `contenido`='$_REQUEST[contenido]', `tipotut`='$_REQUEST[tipo]', `categoriatut`='$_REQUEST[categoria]',`fecha`='$fecha' where `id_tutorial`= '$_GET[id]'";
				mysqli_query($conexion,$sql);
				$id = $_GET['id'];
				echo "<script language='javascript'>window.location='tutorial.php?id=$id'</script>";
			}
		?>
		</section>
	<?php 	
	require_once("lateral.php");
	require_once('footer.php'); ?>
