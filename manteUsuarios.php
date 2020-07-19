<?php

require_once './BaseDatos/usuarioconsulta.php';

  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $usuario = validarUsuario();
             
              if(!empty($usuario)){
                 if($usuario["Estado"]=='activo')
                 {
                      $_SESSION['usuarioLogueado'] = $usuario;
                  header('location:index.php');  
                 }else{
                      header('location:login.php');
                 }
               
              }else{
                 
                  header('location:login.php');
              }
          break;
          case 'Registrar' :
                registrarUsuarios();
                 header('location:index.php');
              break;
          case 'actualizar':
            actualizarUsuarios();
            header("location:index.php");
            break;  
      }
  }

  
  function validarUsuario(){
      
    $user = $_POST['user']; 
    $clave = $_POST['clave'];
    
    $usuario = buscarUsuario($user,$clave);          
    return $usuario;
  }
function registrarUsuarios()
{  
    $cedula=$_POST['cedula'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
    $activo=$_POST['activo'];
    $estado=$_POST['estado'];
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    
    registrarUsuario($cedula,$nombre,$telefono,$correo,$direccion,$activo,$estado,$usuario,$clave);
    
    
}
  
  function  actualizarUsuarios(){
        
    $cedula=$_POST['cedula'];
    $estado=$_POST['activo'];
    
      modificarUsuarios($cedula,$estado);   
  }
  
?>
