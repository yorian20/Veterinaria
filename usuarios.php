<?php include_once 'Include/encabezado.php';?>
<section>
    <br>
    <h1>Lista de Usuarios</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Estado</th>
                <th>Rol</th>
                <th>Usuario</th>
                <th>Clave</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $listaUsuarios = listarUsuarios();
            if(count($listaUsuarios) >0):  
                foreach ($listaUsuarios as $posicion => $usuario):
        ?>
                <tr>
                    <td><?=$usuario['Cedula'];?></td>
                    <td><?=$usuario['Nombre'];?></td>
                    <td><?=$usuario['Telefono'];?></td>
                    <td><?=$usuario['Correo'];?></td>
                    <td><?=$usuario['Direccion'];?></td>
                    <td><?=$usuario['Estado'];?></td>
                    <td><?=$usuario['Rol'];?></td>
                    <td><?=$usuario['Usuario'];?></td>
                    <td><?=$usuario['Clave'];?></td>
                    <td><a href="activacionusuario.php?ced=<?=$usuario['Cedula'];?>">Activar</a></td>
 
                </tr>
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
    <br>
</section> 
<?php include_once 'Include/pie.php'; ?>