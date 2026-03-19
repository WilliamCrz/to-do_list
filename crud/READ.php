<?php 
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');


    $SLT = "SELECT * FROM usuario WHERE Estado = 'A' ";
    $query = mysqli_query($link, $SLT);