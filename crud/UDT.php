<?php 
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $prioridad = $_POST['prioridad'];
        $contexto = $_POST['descripcion'];
        
        $UDP = "UPDATE tareas SET Titulo = '$titulo', Contexto = '$contexto', Prioridad = '$prioridad' WHERE id= '$id' ";
        
        $query = mysqli_query($link, $UDP);
        
    
        Header("Location: ../Tabla/mi_tareas.php");
                
     }
?>