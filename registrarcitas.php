<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
     <h1>REGISTRAR CITAS</h1>
    
    <form method="post" action="manteCitas.php">		
        <input type="text" placeholder="Nombre Dueño" name="nombre" required >
        <input type="text" placeholder="Nombre Mascota"  name="mascota" required>
        <input type="text" placeholder="Raza" name="raza" required>  
        <input type="text" placeholder="Edad" name="edad" required>
        <input type="date" placeholder="Fecha" name="fecha" required>
        <input type="text" placeholder="Observaciones" name="observaciones" required>
        <input type="submit" name="accion" value="Registrar">
    </form>
       
</section>

<?php include_once 'include/pie.php'; ?>