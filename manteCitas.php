<?php
  require_once './baseDatos/CitaConsultas.php';   

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'Registrar':
            guardarCita();
            header("location:citaslista.php");
            break;
        case 'actualizar':
            actualizarCita();
            header("location:citaslista.php");
            break;            
    }
  }
  
  // Aqui entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarCitas();
            header("location:citaslista.php");
            break;       
    }
  }  

  function guardarCita(){

      $nombre=$_POST['nombre'];
      $mascota=$_POST['mascota'];
      $raza=$_POST['raza'];
      $edad=$_POST['edad'];
      $fecha=$_POST['fecha'];
      $observaciones=$_POST['observaciones'];
      registrarCita($nombre,$mascota,$raza,$edad,$fecha,$observaciones);
  }
  
  function eliminarCitas(){
      $id = $_GET['id'];
      eliminarCita($id);
  }
  
  function actualizarCita(){
      $id=$_POST['id'];
      $nombre=$_POST['nombre'];
      $mascota=$_POST['mascota'];
      $raza=$_POST['raza'];
      $edad=$_POST['edad'];
      $fecha=$_POST['fecha'];
      $observaciones=$_POST['observaciones'];
      modificarCita($id,$nombre,$mascota,$raza,$edad,$fecha,$observaciones);   
  }
  
?>












