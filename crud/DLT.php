<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

    $ID = $_GET['id'];

    $DLT = "UPDATE usuario SET Estado = 'I' WHERE id = '$ID'";
    $query = mysqli_query($link, $DLT);
    
    if ($query)
    {
        Header("Location: ../partials/Tabla_de_datos.php");
    }
    
?>