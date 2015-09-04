<?php

$conne = mysql_connect('localhost','root','') or die("Error, conexion".mysql_error());
$bd = mysql_select_db('prosubca') or die("Error, Base de datos".mysql_error());

?>