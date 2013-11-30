<?php 
require_once('conexion.php');
						
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$direccion = $_POST['direccion'];
				$imagen = "avatar/".$nickname.".png";
				$fecha = $_POST['fecha'];
				
				
							$sql = "UPDATE `usuario` SET  `nombre`='$nombre' , `password`='$password', `email`='$email', `direccion`='$direccion',`fecha_nac`='$fecha' ";
							mysqli_query($conexion,$sql);
							mysqli_close($conexion);
						
					?>