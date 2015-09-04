<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['usuario'])){
	header("Location: inicio.php");
}
?>
<html lang="es" >
    <head>
        <meta charset="utf-8" />
        <title>SisPROSUBCA</title>
        <link href="../css/estilo_login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- panel y boton -->
        <section class ="contenido"> 
            <div class="panel">
              <div class="botonIni">
                <a href="#login_form" id="login_pop">Ingresar</a>
                
              </div>
            </div>
			<div>
				<MARQUEE>
					<a>SisPROSUBCA</a>
				</MARQUEE>
			</div>
            
			<strong><img src="../images/12.jpg"></strong>
        </section> 
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <form action="login.php" method="post">
            <center><h1>Bienvenido</h1>
            <div>
                <label for="login">Usuario</label>
                <input type="text" maxlength="10" id="login" name="usuario" required=""/>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" maxlength="10" id="password" name="password" required="" />
            </div>
            <input type="submit" value="Iniciar Sesión"/></center>
            <a class="close" href="#close"></a>
            </form>
        </div>
    </body>
</html>