<?php
// datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','tututo');
define('DB_USER','admin');
define('DB_PASS','admin');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?>