<?php
session_start();
include_once "conexion.php";
		$fecha = date("Y-m-d H:i:s");
		$contenido = mysql_real_escape_string ($_REQUEST['contenido']);
		mysql_query("insert into tutorial (autor,titulo,contenido,tipotut,categoriatut,fecha)values('$_SESSION[usuarioactual]','$_REQUEST[titulo]','$contenido','$_REQUEST[tipo]','$_REQUEST[categoria]','$fecha')",$con) or die ("no puede hacer la consulta".mysql_error());
		mysql_close($con) ;
		echo 'Su tutorial se subio perfecto!';    
?>