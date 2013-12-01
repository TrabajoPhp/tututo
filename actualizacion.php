<?php 
require_once('conexion.php');
session_start();
						
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$nickname = $_SESSION['usuarioactual'];
				$imagen = "avatar/".$nickname.".png";
				$tamano = $_FILES["imagen"]['size']; 
				$tipo = $_FILES["imagen"]['type']; 
				$archivo = $_FILES["imagen"]['name'];
				$fecha = $_POST['fecha'];
				
				if($_POST['password'] == $_POST['repassword'])
            {
				
					if ($archivo != "") { 
										// Setea destino  
										$destino =  "avatar/".$nickname.".png"; 
										if ($tipo == "image/png"){ 
											//Esto comprime el PNG 
											imagepng(imagecreatefromstring(file_get_contents($_FILES['imagen']['tmp_name'])), $destino); 
											 
										}elseif($tipo == "image/jpg" OR $tipo == "image/jpeg"){ 
											//Esto convierte la imagen JPG/JPEG en PNG comprimido 
											imagepng(imagecreatefromstring(file_get_contents($_FILES['imagen']['tmp_name'])), $destino); 
											//header('Location: inicio.php'); 
										} 
										else{ 
										header("Location:actualizar.php?mensaje2");
										die();
										} 
									}
				
							$sql = "UPDATE `usuario` SET  `nombre`='$nombre' , `password`='$password', `email`='$email', `fecha_nac`='$fecha' where `nickname`= '$nickname'";
							mysqli_query($conexion,$sql);
							mysqli_close($conexion);
							
               header("Location:actualizar.php?mensaje");
			   }
				else { header("Location:registroUsuario.php?mensaje2");}
					?>