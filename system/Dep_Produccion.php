<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
session_start();
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
	header("Location: index.php");
}
?>
<html>
<head>
	<title>SisPROSUBCA</title>
</head>
<body>
<h3>ESTA EN PRODUCCION</h3>
<p>USUARIO: <?php echo $_SESSION['usuario'] ?></p>
<a href="cerrarSesion.php">Salir</a>
</body>
</html>