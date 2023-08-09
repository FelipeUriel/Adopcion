
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="loginestilos.css">
	

</head>  
<body>
    <form class="formulario" method="POST">
    <input type="hidden" name="op" value="1" >
    
    <h1>¿Listo para Adoptar?</h1>
     <div class="contenedor">
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input required type="text" placeholder="Correo Electronico" id="usuario" name="usuario">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input required type="password" placeholder="Contraseña" id="pass" name="pass">
         
         </div>
         <input name="iniciar" type="submit" value="Iniciar sesion" class="button">
         <p>¿Listo para Adoptar? <a class="link" href="login2.php">Registrate </a></p>
     </div>
    </form>
</body>
</htmls
