<?php
session_start();
include_once ('conexion.php');
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
$result = mysql_query("SELECT * FROM Usuarios WHERE Usuario = '$usuario'");
function  tipoEmple(){
		if($row["Departamento"] = "1"){
			$_SESSION['tipo'] ="Administrador";
		}else{
			$_SESSION['tipo'] ="";
		}
}
if($row = mysql_fetch_array($result)){
	if($row["password"] == $pass){
		switch ($row["Departamento"]) {
			
			case (1):
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: inicio.php"); 
			break;
		
			case (2): 
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: Dep_Au_Inter.php"); 
			break;
		
			case (3):
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: Dep_Con_Ase_Cal.php"); 
			break;
		
			case (4):
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: Dep_Produccion.php"); 
			break;
		
			case (5):
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: Dep_Man_Electro.php"); 
			break;
		
			case (6): 
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: Dep_Sis_Comp.php"); 
			break;
		
			case (7): 
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: Dep_Seg_Hig_Indus.php"); 
			break;
		
			case (8): 
			$_SESSION['usuario'] = $usuario;
			tipoEmple();
			header("Location: Dep_Agu_Res.php"); 
			break;
		}
	}else{
		?>
		<script languaje="javascript">
		alert("Contraseña Incorrecta");
		location.href = "index.php";
   </script>
		<?php
	}

}else{
	?>
	<script languaje="javascript">
	alert("El nombre de usuario es incorrecto!");
	location.href = "index.php";
	</script>
	<?php
}
?>