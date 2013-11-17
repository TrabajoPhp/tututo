<?php
$server     = 'localhost'; //servidor
$username   = 'root'; //usuario de la base de datos
$password   = ''; //password del usuario de la base de datos
$database   = 'tututo'; //nombre de la base de datos

$conexion = new mysqli();
@$conexion->connect($server, $username, $password, $database);
/*
 Las 2 lineas de arriba se pueden resumir en:
 $conexion = @new mysqli($server, $username, $password, $database);
 Recuerden que el @ adelante de las funciones significa que no generará error o warnings
 Tema: http://www.elcodigofuente.com/uso-del-arroba-funciones-php-585/
*/
if ($conexion->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
{
    die('Error de conexión: ' . $conexion->connect_error); //si hay un error termina la aplicación y mostramos el error
}
?>
