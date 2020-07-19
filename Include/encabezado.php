<?php require_once './baseDatos/usuarioconsulta.php'; 
require_once './baseDatos/CitaConsultas.php'; 
   if(!isset($_SESSION['usuarioLogueado'])){
       header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tanuki</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <nav>
            <ul>
            <?php if(isset($_SESSION['usuarioLogueado'])):
               $array=$_SESSION['usuarioLogueado'];
               
            if($array["Rol"]=="administrador")   
            {
            ?>
                <li><a href="registrarusuario.php">Registrar Usuario</a></li>
                <li><a href="usuarios.php">Activar/Desactivar Usuario</a></li>
                <li><a href="registrarcitas.php">Registrar Cita</a></li>
                <li><a href="citasmodificar.php">Modificar Cita</a></li>
                <li><a href="citaseliminar.php">Eliminar Cita</a></li>
                <li><a href="citaslista.php">Listar Citas</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
                
                 <?php
            } else { 
                ?>
                <li><a href="registrarcitas.php">Registrar Cita</a></li>
                <li><a href="citasmodificar.php">Modificar Cita</a></li>
                <li><a href="citaseliminar.php">Eliminar Cita</a></li>
                <li><a href="citaslista.php">Listar Citas</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
               
                
                <?php
            }
                ?>
                
               
                
            <?php endif;?>
            </ul>
        </nav>