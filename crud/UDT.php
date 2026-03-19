<?php 
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');


    $ID = $_POST['id'];
    $nombre = $_POST['n'];
    $correo = $_POST['c'];
    $usuario = $_POST['u'];
    $pass = $_POST['p'];
    
    $UDP = "UPDATE usuario SET Nombre = '$nombre', Correo= '$correo', Usuario= '$usuario', 
                                    Password= '$pass' WHERE id= '$ID' ";
                          
    $query = mysqli_query($link, $UDP);
    
    if ($query)
    {
        Header("Location: ../partials/tabla_de_datos.php");
    }
?>