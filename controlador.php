<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<?php
    // CONTROLADOR
session_start();
$op=$_REQUEST['op'];

switch ($op) {
	case 0:
		header("Status: 301 Moved Permanently");
		header("Location: ../");
		break;
	case 1:
		
		require_once("gestionLittlepet.php");

	
		$atributos = new gestionLittlepet();
	 
		$usuario=$_REQUEST['usuario'];
		$clave=$_REQUEST['clave'];
		$tipo=$atributos-> validarUsuario ($usuario,$clave);
		echo($tipo);
		
		if($tipo==	1){			
			//require_once('../view/administracion.php');
        	require_once('Index.html');
		} else {
			require_once('inicio.html');
		}

		break;



	} //cierre del switch 	

?>

	</body>
</html>
