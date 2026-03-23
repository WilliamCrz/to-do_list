<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $titulo = $_POST['titulo'];
        $prioridad = $_POST['prioridad'];
        $contexto = $_POST['contexto'];
        $fecha = $_POST['fecha'];

        $INS = "INSERT INTO tareas (titulo, prioridad, contexto, fecha)
                            VALUES ('$titulo', '$prioridad', '$contexto', '$fecha')";
                            
        $query = mysqli_query($link, $INS);
        
      if($query){
        
        header("Location: ../Tabla/index.php");
        exit;
    } else {
        echo "Error al guardar la tarea: " . mysqli_error($link);
    }
}

?>