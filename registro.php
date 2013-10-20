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
        $rec = mysql_query($sql);
        $verificar_usuario = 0;
 
        while($result = mysql_fetch_object($rec))
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
				$imagen = $_POST['imagen'];
				$fecha = $_POST['fecha'];
				                			
                $sql = "INSERT INTO `usuario` (`nickname`, `nombre`, `password`, `email`, `direccion`, `imagen`, `fecha_nac`) VALUES ('$nickname','$nombre','$password','$email','$direccion','$imagen','$fecha')";
                mysql_query($sql);
 
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