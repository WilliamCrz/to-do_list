<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $nombre = $_POST['n'];
        $prioridad = $_POST['c'];
        $contexto = $_POST['u'];
        
        $INS = "INSERT INTO tareas (Nombre,prioridad,contexto)
                            VALUES ('$nombre', '$prioridad', '$contexto')";
                            
        $query = mysqli_query($link, $INS);
        
        
        Header("Location: ../partials/tabla_de_datos.php");
    }
    
?>