<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        { 
            $id = $_GET['id'];

            $DLT = "DELETE FROM tareas WHERE id = $id ";
            $query = mysqli_query($link, $DLT);
            
            
            Header("Location: ../Tabla/mi_tareas.php");
        }
    
?>