<?php
session_start();
include_once "conexion.php";
		$fecha = date("Y-m-d H:i:s");
		echo $fecha;
		mysql_query("insert into tutorial (titulo,contenido,tipotut,categoriatut,fecha)values('$_REQUEST[titulo]','$_REQUEST[contenido]','$_REQUEST[tipo]','$_REQUEST[categoria]','$fecha')",$con) or die ("no puede hacer la consulta".mysql_error());
		mysql_close($con) ;
		echo 'Su tutorial se subio perfecto!';    
?>