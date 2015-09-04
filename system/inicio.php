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
	<link href="../css/estilo_menu.css" rel="stylesheet" type="text/css" />
	<title>SisPROSUBCA</title>
</head>
<body>
	<div class="menuTodos">
		<nav>
			<ul class="botones">
				<li><a href="#">INICIO</a></li>
				
				<li><a href="#">EMPLEADO</a>
				<ul>
					<li><a href="#">Registrar	</a></li>
				</ul>
				</li>
				
				<li><a href="#">DEPARTAMENTO</a>
				
				<ul>
					<li><a href="#">Auditoria interna</a></li>
					<li><a href="#">Control y Aseguramiento de calidad</a></li>
					<li><a href="#">Mantenimiento Electromecanico</a></li>
					<li><a href="#">Planta de Aguas Residuales</a></li>
					<li><a href="#">Produccion</a></li>
					<li><a href="#">Seguridad e Higiene Industrial</a></li>
					<li><a href="#">Sistemas Computacionales</a></li>					
				</ul>
				</li>
				
				<li class="btnPerfil"><a href="#">PERFIL</a>
				<ul>
					<li><p><?php echo $_SESSION['tipo']."<br>"."Usuario: ".$_SESSION['usuario']; ?></p></li>
					<li><p><?php include "fecha.php"; ?></p></li>
					<li><a href="cerrarSesion.php">Salir</a></li>
				</ul>
				</li>
				
			</ul>
		</nav>
	</div>
</body>
</html>