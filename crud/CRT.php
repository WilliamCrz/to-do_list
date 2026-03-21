<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $titulo = $_POST['n'];
        $prioridad = $_POST['c'];
        $contexto = $_POST['u'];
        
        // INSERT INTO tareas (id, Nombre, Contexto, prioridad) VALUES (7, 'Juan', 'a', 'a');
        
        $INS = "INSERT INTO tareas (Nombre,prioridad,contexto)
                            VALUES ('$nombre', '$prioridad', '$contexto')";
                            
        $query = mysqli_query($link, $INS);
        
        
        Header("Location: ../partials/index.php");
    }
    
?>