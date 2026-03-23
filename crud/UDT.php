<?php 
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $prioridad = $_POST['prioridad'];
        $contexto = $_POST['contexto'];
        $fecha = $_POST['fecha'];
        
        $UDP = "UPDATE tareas SET titulo = '$titulo', contexto = '$contexto', prioridad = '$prioridad', fecha = '$fecha' WHERE id= '$id' ";
        
        $query = mysqli_query($link, $UDP);
        
       if($query){
       
        header("Location: ../Tabla/mi_tareas.php");
        exit;
    } else {
        echo "Error al actualizar la tarea: " . mysqli_error($link);
    }
}
?>