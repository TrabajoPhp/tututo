<?php
     /* A continuación, realizamos la conexión con nuestra base de datos en MySQL */
    require_once('conexion.php');

     /* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función 
     htmlentities para evitar inyecciones SQL. */
	 $myusuario = $conexion->query("select nickname from usuario where nickname =  '".htmlentities($_POST["nickname"])."'");	 
     //$myusuario = mysql_query("select nickname from usuario where nickname =  '".htmlentities($_POST["nickname"])."'",$link);
                                 
     $nmyusuario = $myusuario->num_rows;

     //Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario...
     if($nmyusuario != 0){
          $sql = "select nickname from usuario where nickname = '".htmlentities($_POST["nickname"])."' and password = '".htmlentities($_POST["password"])."'";
          //$myclave = mysql_query($sql,$link);
		  $myclave = $conexion->query($sql);
          //$nmyclave = mysql_num_rows($myclave);
		  $nmyclave = $myclave->num_rows;

          //Si el usuario y password ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo.
          if($nmyclave != 0){
               session_start();
               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
               $_SESSION["autentica"] = "SIP";
               $_SESSION["usuarioactual"] = $_REQUEST["nickname"]; //nombre del usuario logueado.
               //Direccionamos a nuestra página principal del sistema.
               header ("Location: index.php");
          }
          else{
               echo"<script>alert('La contrase\u00f1a del usuario no es correcta.');
               window.location.href=\"index.php\"</script>"; 
          }
     }else{
          echo"<script>alert('El usuario no existe.');window.location.href=\"index.php\"</script>";
     }
     mysql_close($conexion);
?>
