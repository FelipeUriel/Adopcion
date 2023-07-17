<?php
    include_once("conectarbd.php");
    if(!empaty($_POST)['usermail']) && !empaty($_POST['userpass']){
        $email = $P_PPST['usermail'];
        $pass = $P_POST['userpass'];

        $sql = "INSERT INTO registro(nombre,apellido1,apellido2,correo,pass,num_celular,fecha_nacimiento,genero,descripcion,fecha_alta,fecha_modificacion) VALUES(:nom,:apell1,:apell2,:corr,:pass,:num,:fecha_naci,:gene,:descri,:fecha_al,:fecha_modi";
        $stmt = $conexion->prepare($sql);
        $stmt->binParam(":nom",$name);  
        $stmt->binParam(":apell1",$apell1);
        $stmt->binParam(":apell2",$apell2);
        $stmt->binParam(":corr",$email);
        $stmt->binParam(":pass",$pass);
        $stmt->binParam(":num",$num);
        $stmt->binParam(":fecha_naci",$fecha_naci);
        $stmt->binParam(":gener",$gene);
        $stmt->binParam(":descri",$descri);
        $stmt->binParam(":feccha_al",$fecha_alt);
        $stmt->binParam(":fecha_modi",$fecha_modi);
        if($stmt->execute()){
            header("location: index.html");
        }else print("Error en la consulta")
    }else{
        print("Debe de completar todos los campos del formulario");
    }
?>