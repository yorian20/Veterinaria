<?php include_once 'Include/encabezado.php';?>
<section>
    <br>
    <h1>Lista de Usuarios</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Mascota</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Fecha</th>
                <th>Observaciones</th>

            </tr>
        </thead>
        <tbody>
        <?php 
            $listaCitas = listarCita();
            if(count($listaCitas) >0):  
                foreach ($listaCitas as $posicion => $cita):
        ?>
                <tr>
                    <td><?=$cita['ID'];?></td>
                    <td><?=$cita['Nombre'];?></td>
                    <td><?=$cita['Mascota'];?></td>
                    <td><?=$cita['Raza'];?></td>
                    <td><?=$cita['Edad'];?></td>
                    <td><?=$cita['Fecha'];?></td>
                    <td><?=$cita['Observaciones'];?></td>
                    <td><a href="modificarcita.php?id=<?=$cita['ID'];?>">Modificar</a></td>
 
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