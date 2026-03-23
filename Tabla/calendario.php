<?php
include("../partials/configuracion.php");
include("../partials/conexion.php");

$hoy = date('Y-m-d');
$result = $link->query("SELECT id, titulo, fecha, estado, prioridad, contexto FROM tareas");

$eventos_js = [];
while($row = $result->fetch_assoc()){
  
    if(strtolower($row['estado']) == 'completada'){
        $color = "#90ee90"; // verde claro
    } elseif($row['fecha'] < $hoy && strtolower($row['estado']) != 'completada'){
        $color = "#f7adad"; // rojo claro
    } else {
        switch(strtolower($row['prioridad'])){
            case 'alta': $color = "#dc3545"; break;
            case 'media': $color = "#0d6efd"; break;
            case 'baja': $color = "#198754"; break;
            default: $color = "gray"; 
        }
    }

   $eventos_js[] = [
    'id' => $row['id'],
    'title' => $row['titulo'],
    'start' => $row['fecha'],
    'color' => $color,
    'extendedProps' => [
        'contexto' => $row['contexto'],
        'prioridad' => $row['prioridad'],
        'estado' => $row['estado']
    ]
];

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Calendario de Tareas</title>

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php include("navbar.php"); ?>

<div class="container">
    <h2 class="text-center mb-4">Calendario de Tareas</h2>

<div class="leyenda-wrapper mb-4">
    <button id="btn-leyenda" class="btn btn-outline-secondary btn-sm">
        Leyenda de Prioridades
    </button>

    <div id="leyenda" class="leyenda-oculta shadow p-3 mt-2 rounded">
        <div class="d-flex flex-column gap-2">
            <div class="d-flex align-items-center gap-2">
                <span class="leyenda-color" style="background-color:#dc3545;"></span> Alta
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="leyenda-color" style="background-color:#0d6efd;"></span> Media
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="leyenda-color" style="background-color:#198754;"></span> Baja
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="leyenda-color" style="background-color:#a6dba0;"></span> Completada
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="leyenda-color" style="background-color:#ff9999;"></span> Vencida
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('btn-leyenda').addEventListener('click', function() {
    const leyenda = document.getElementById('leyenda');
    if (leyenda.style.display === 'block') {
        leyenda.style.display = 'none';
    } else {
        leyenda.style.display = 'block';
    }
});
</script>
    <div id="calendar"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: <?php echo json_encode($eventos_js, JSON_UNESCAPED_UNICODE); ?>,
        eventClick: function(info) {
            alert(
                "Tarea: " + info.event.title + "\n" +
                "Contexto: " + info.event.extendedProps.contexto + "\n" +
                "Prioridad: " + info.event.extendedProps.prioridad
            );
        },
        eventDidMount: function(info) {
            info.el.style.cursor = "pointer";
        }
    });

    calendar.render();
});
</script>

</body>
</html>