<?php

require_once 'conexion.php';

 function buscarUsuario($user,$clave){
      
      $sql = "SELECT * FROM USUARIOS WHERE USUARIO='$user' AND CLAVE='$clave'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  } 
  
 //Registro
    function registrarUsuario($cedula,$nombre,$telefono,$correo,$direccion,$estado,$rol,$usuario,$clave){
      
      $sql = "INSERT INTO  USUARIOS(Cedula,Nombre,Telefono,Correo,Direccion,Estado,Rol,Usuario,Clave) VALUES('$cedula','$nombre','$telefono','$correo','$direccion','$estado','$rol','$usuario','$clave')";
      mysqli_query($GLOBALS['conexion'], $sql);

           
  }
  
    //listarUsuarios
  function listarUsuarios(){    
      $usuarios = array();
      $sql = "SELECT * FROM USUARIOS ORDER BY NOMBRE ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($usuario = mysqli_fetch_assoc($resultado)){
          array_push($usuarios ,$usuario);
      } 
      
      return $usuarios;
  }
  
    function buscarUser($cedula){
      $sql = "SELECT * FROM USUARIOS WHERE Cedula = '$cedula'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  }
  
  function modificarUsuarios($cedula,$estado){
      $sql = "UPDATE Usuarios SET ESTADO='$estado' WHERE Cedula='$cedula'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }
?>