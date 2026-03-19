<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $nombre = $_POST['n'];
        $correo = $_POST['c'];
        $usuario = $_POST['u'];
        $pass = $_POST['p'];
        
        $INS = "INSERT INTO usuario (Nombre,Correo,Usuario,Password)
                            VALUES ('$nombre', '$correo', '$usuario', '$pass')";
                            
        $query = mysqli_query($link, $INS);
        
        
        Header("Location: ../partials/tabla_de_datos.php");
    }
    
?>