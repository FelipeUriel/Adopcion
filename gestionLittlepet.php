<?php
 class gestionLittlepet{
   private $todosdatos;

 //-- conexion base de datos
public function __construct(){
	require_once('conectarbd.php');

  
	$this->db=conectarbd::conexion();

  $this->tipo=0;
  
}

                      
public function validarUsuario($usuario, $clave){
    $tipo=0;
    $consulta=$this->db->query("SELECT * FROM adoptante WHERE correo='$usuario' AND pass='$clave';");
      while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
       $tipo=$fila['id_adoptante'];

     
     }//cieraa while
                        
    return $tipo;
}


    public function insertarPlatos($nombre, $precio, $tipo){

        $this->db->query(" insert into platos values( 0, '$nombre', '$precio' , '$tipo' ) ");
      
        return "Inserto plato corectamente";
      
                            }   

    public function consultarPlatos(){
      $consulta=$this->db->query("SELECT * FROM platos  ORDER BY tipo desc");
                          while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
                      $this->todosdatos[]=$fila;
                 }//cieraa while
                      return $this->todosdatos;}
   
   public function datosDispositivoFecha($fechai,$fechaf){
   $consulta=$this->db->query("SELECT * FROM dispensador WHERE fecha BETWEEN '$fechai' and '$fechaf'");
       while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
         $this->todosdatos[]=$fila;
                                   }//cieraa while
                                        return $this->todosdatos;}

  }//cierra la clase principal 

?>