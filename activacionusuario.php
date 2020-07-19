<?php include_once 'Include/encabezado.php'; 
  if(isset($_GET['ced'])){
      $cedula  = $_GET['ced'];
      $usuario = buscarUser($cedula);
  }
?>
<section>
    <br>
    <h1>EDITAR UN USUARIO</h1>
    <form method="post" action="manteUsuarios.php">		
        <input type="text"  name="cedula" value="<?=$usuario ['Cedula'];?>" readonly="">
        <input type="text"  name="nombre" value="<?=$usuario ['Nombre'];?>" readonly="">
        <input type="text"  name="telefono" value="<?=$usuario ['Telefono'];?>" readonly="">  
        <input type="text"  name="correo"  value="<?=$usuario ['Correo'];?>" readonly="">
        <input type="text"  name="direccion" value="<?=$usuario['Direccion'];?>" readonly="">
        <label>Estado</label>
        <select name="activo"> 
            <option value="inactivo">Inactivo</option>
            <option value="activo">Activo</option>
            <input type="text"  name="rol"  value="<?=$usuario ['Rol'];?>" readonly="">  
            <input type="text" placeholder="Usuario" name="usuario" value="<?=$usuario ['Usuario'];?>" readonly="">
            <input type="password" placeholder="Clave" name="clave" value="<?=$usuario ['Clave'];?>" readonly="">
        <input type="submit" name="accion" value="actualizar">
    </form>
</section>
<?php include_once 'Include/pie.php'; ?>