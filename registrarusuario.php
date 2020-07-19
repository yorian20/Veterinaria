<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
     <h1>REGISTRAR USUARIO</h1>
    
    <form method="post" action="manteUsuarios.php">		
        <input type="text" placeholder="Cedula" name="cedula" required maxlength="9">
        <input type="text" placeholder="Nombre"  name="nombre" required>
        <input type="text" placeholder="Telefono" name="telefono" required>  
        <input type="text" placeholder="Correo" name="correo" required>
        <input type="text" placeholder="Direccion" name="direccion" required>
        <input type="text"  name="activo" value="inactivo" readonly="true">
         <label>Rol</label>
        <select name="estado"> 
            <option value="administrador">Administrador</option>
            <option value="asistente">Asistente</option>
        </select>
        <input type="text" placeholder="Usuario" name="usuario" required>
        <input type="password" placeholder="Clave" name="clave" required>
        <input type="submit" name="accion" value="Registrar">
    </form>
       
</section>

<?php include_once 'include/pie.php'; ?>