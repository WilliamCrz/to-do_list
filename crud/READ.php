<?php 
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');


    $SLT = "SELECT * FROM tareas";
    $query = mysqli_query($link, $SLT);