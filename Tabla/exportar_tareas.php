<?php
include("../partials/configuracion.php");
include("../partials/conexion.php");

$fecha = date("Y-m-d");
$nombreArchivo = "tareas_$fecha.csv";

header("Content-Type: text/csv; charset=utf-8");
header("Content-Disposition: attachment; filename=$nombreArchivo");

$output = fopen("php://output", "w");

fputcsv($output, ["Título", "Contexto", "Prioridad", "Fecha"]);

$sql = "SELECT titulo, contexto, prioridad, fecha FROM tareas";
$resultado = mysqli_query($conexion, $sql);

while($fila = mysqli_fetch_assoc($resultado)){
    fputcsv($output, [
        $fila['titulo'],
        $fila['contexto'],
        ucfirst($fila['prioridad']), 
        $fila['fecha']
    ]);
}

fclose($output);
exit;
?>