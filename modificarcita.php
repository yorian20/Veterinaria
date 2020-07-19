<?php include_once 'Include/encabezado.php'; 
  if(isset($_GET['id'])){
      $id  = $_GET['id'];
      $cita = buscarCita($id);
  }
?>
<section>
    <br>
    <h1>EDITAR UNA CITA</h1>
    <form method="post" action="manteCitas.php">	
        <input type="text"  name="id" value="<?=$cita ['ID'];?>" readonly="">
        <input type="text"  name="nombre" value="<?=$cita ['Nombre'];?>" required="">
        <input type="text"  name="mascota" value="<?=$cita['Mascota'];?>" required="">
        <input type="text"  name="raza" value="<?=$cita ['Raza'];?>" required="" >  
        <input type="text"  name="edad"  value="<?=$cita ['Edad'];?>" required="">
        <input type="date" name="fecha" value="<?=$cita ['Fecha'];?>" required="">
        <input type="text"  name="observaciones" value="<?=$cita ['Observaciones'];?>" required="">
        <input type="submit" name="accion" value="actualizar">
    </form>
</section>
<?php include_once 'Include/pie.php'; ?>