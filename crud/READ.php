<?php 
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

$busqueda = isset($_GET['q']) ? $_GET['q'] : '';

if(!empty($busqueda)){
    $SLT = "SELECT * FROM tareas 
            WHERE (estado = 'A' OR estado = 'pendiente' OR estado = 'completada')
            AND (titulo LIKE '%$busqueda%' 
                 OR contexto LIKE '%$busqueda%')";
} else {
    $SLT = "SELECT * FROM tareas 
            WHERE (estado = 'A' OR estado = 'pendiente' OR estado = 'completada')";
}

$query = mysqli_query($link, $SLT);
?>