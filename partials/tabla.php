<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');


$SLT = "SELECT * FROM tareas";

$SQL = mysqli_query($link, $SLT);


?>


<table>
        <thead>
            <tr>
                <th>
                    ID
                </th>
                
                <th>
                    Titulo
                </th>
                
                <th>
                    contexto
                </th>
                
                <th>
                    Prioridad
                </th>
                
               
            </tr>
        </thead>
        
        <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>
        <tr>
            <th><?=  $row['id'] ?></th>
            <th><?=  $row['titulo'] ?></th>
            <th><?=  $row['contexto'] ?></th>
            <th><?=  $row['prioridad'] ?></th>
            <th><?=  $row['fecha'] ?></th>
        
            <th><a href="../partials/formulario_editar.php?id=<?= $row['id'] ?>">Editar</a></th>
            <th><a href="../crud/DLT.php?id=<?php echo $row['id'] ?>">Eliminar</a></th>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>