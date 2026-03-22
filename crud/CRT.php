<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $titulo = $_POST['titulo'];
        $prioridad = $_POST['prioridad'];
        $contexto = $_POST['descripcion'];
        
        
        
        $INS = "INSERT INTO tareas (Titulo,Prioridad,Contexto)
                            VALUES ('$titulo', '$prioridad', '$contexto')";
                            
        $query = mysqli_query($link, $INS);
        
        
        Header("Location: ../partials/index.php");
    }
    
?>