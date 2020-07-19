<?php

require_once 'conexion.php';


  
 //Registro
    function registrarCita($nombre,$mascota,$raza,$edad,$fecha,$observaciones){
      
      $sql = "INSERT INTO  CITAS(Nombre,Mascota,Raza,Edad,Fecha,Observaciones) VALUES('$nombre','$mascota','$raza','$edad','$fecha','$observaciones')";
      mysqli_query($GLOBALS['conexion'], $sql);

           
  }
  
    //listarUsuarios
  function listarCita(){    
      $usuarios = array();
      $sql = "SELECT * FROM CITAS ORDER BY NOMBRE ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($usuario = mysqli_fetch_assoc($resultado)){
          array_push($usuarios ,$usuario);
      } 
      
      return $usuarios;
  }
  
    function buscarCita($id){
      $sql = "SELECT * FROM CITAS WHERE ID= '$id'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $cita = mysqli_fetch_assoc($resultado);
       
       return $cita;
  }
  
  function modificarCita($id,$nombre,$mascota,$raza,$edad,$fecha,$observaciones){
      $sql = "UPDATE CITAS SET NOMBRE='$nombre',MASCOTA='$mascota',RAZA='$raza',EDAD='$edad',FECHA='$fecha',Observaciones='$observaciones' WHERE ID='$id'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }
  
   //eliminar un producto 
  function eliminarCita($id){
      $sql = "DELETE FROM CITAS WHERE ID = '$id'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
?>