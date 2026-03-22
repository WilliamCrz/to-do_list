<?php 
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $prioridad = $_POST['prioridad'];
    $contexto = $_POST['descripcion'];
    
    $UDP = "UPDATE tareas SET Titulo = '$titulo', Contexto= '$contexto' WHERE id= '$ID' ";
                          
    $query = mysqli_query($link, $UDP);
    
    if ($query)
    {
        Header("Location: ../partials/index/.php");
    }
?>