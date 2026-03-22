<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - Gestor de tareas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
  <style>
      body {
      background: linear-gradient(135deg, #eef2f7, #f8f9fa);
    }

    .tarjeta-custom {
      background: white;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.06);
      border: none;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .tarjeta-custom:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .prioridad-alta {
      border-left: 6px solid #dc3545;
    }

    .prioridad-media {
      border-left: 6px solid #ffc107;
    }

    .prioridad-baja {
      border-left: 6px solid #198754;
    }

    .btn-light {
      background: #f1f3f5;
      border: none;
    }

    .btn-light:hover {
      background: #e2e6ea;
    }

    input[type="checkbox"] {
      transform: scale(1.2);
      cursor: pointer;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-5">
  <div class="container">
    <a class="navbar-brand" href="../Tabla/index.php">To Do List</a>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="../Tabla/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Tabla/mi_tareas.php">Mis tareas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Tabla/nueva_tarea.php">Nueva tarea</a>
      </li>
    </ul>
  </div>
</nav>