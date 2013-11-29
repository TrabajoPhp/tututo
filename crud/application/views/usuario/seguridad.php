<?php
@session_start();

if($_SESSION["usuarioactual"] != "ezequielA"){
	if($_SESSION["usuarioactual"] != "aliciaR"){
		if($_SESSION["usuarioactual"] != "alanK"){
		header("Location: eroor404.php");
		exit();
}}}
?>
