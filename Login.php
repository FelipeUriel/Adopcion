<?php
     include_once("controlador.php");
    if(!empaty($_POST)['usermail'])  !empaty($_POST['userpass']){
        $email = $P_PPST['usermail'];
        $pass = $P_POST['userpass'];
        $Nombres = $_GET['Ingrese su nombre/ s'];
        $Apellido = $_GET['Ingrese su apellido paterno'];
        $Apellido = $_GET['Ingrese su apellido materno'];
        $Gmail = $_GET['Ingrese su Gmail'];
        $Número = $_GET['Ingrese su número telefonico'];
        $Contraseña = $_GET['Ingrese su contraseña'];
        $Confirme = $_GET['Ingrese su contraseña']
        $EstadO = $_GET['Adoptante'];
        $Estado = $_GET['Adoptador/a'];
        if($stmt->execute()){
            header("location: index.html");
        }else print("Error en la consulta")
    }else{
        print("Debe de completar todos los campos del formulario");
    }
?>