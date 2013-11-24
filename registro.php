<?php
session_start();
include_once "conexion.php";
			

if(isset($_POST['enviar']))
{
    if($_POST['nickname'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')
    {
        echo 'Por favor llene todos los campos.';
    }
    else
    {
        $sql = 'SELECT * FROM usuario';
		$rec = $conexion->query($sql);
        //$rec = mysql_query($sql);
        $verificar_usuario = 0;
 
        
		while($result = $rec->fetch_object())
			
        {
            if($result->nickname == $_POST['nickname'])
            {
                $verificar_usuario = 1;
            }
        }
 
        if($verificar_usuario == 0)
        {
            if($_POST['password'] == $_POST['repassword'])
            {
				$nickname = $_POST['nickname'];
                $nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$direccion = $_POST['direccion'];
				$imagen = "avatar/".$nickname.".png";
				$fecha = $_POST['fecha'];
				
				$tamano = $_FILES["imagen"]['size']; 
				$tipo = $_FILES["imagen"]['type']; 
				$archivo = $_FILES["imagen"]['name'];
				
									
									 

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
										echo 'El archivo subido no tiene formato PNG ni JPG'; 
										die();
										} 
									} else { 
										echo  "Error desconocido o no elegiste imagen."; 
										die(); 
									} 
				
				
				
				                			
                $sql = "INSERT INTO `usuario` (`nickname`, `nombre`, `password`, `email`, `direccion`, `imagen` ,`fecha_nac`) VALUES ('$nickname','$nombre','$password','$email','$direccion','$imagen','$fecha')";
                mysqli_query($conexion,$sql);
 
                echo 'Usted se ha registrado correctamente.';
            }
            else
            {
                echo 'Las claves no son iguales, intente nuevamente.';
            }
        }
        else
        {
            echo 'Este nickname ya ha sido registrado anteriormente.';
        }
    }
}