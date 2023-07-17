    <?php 
    //Declarar las variables en donde se guardan los valores de la conexión
    $servidor = "Localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "LittlePet";
    $conecta = mysqli_connect($servidor, $usuario,$contraseña,$bd);
    if($conecta->connect_error){
        die("Error al conectar a la base de datos de la pagina".$conecta->connect_error);
    }
    ?>