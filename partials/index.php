<?php include_once("../crud/READ.php") ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>To Do List Grupo 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    body { background-color: #f8f9fa; color: #333; }
    .tarjeta-custom { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border: 1px solid #eee; margin-top: 2rem;}
    .prioridad-alta { border-left: 4px solid #dc3545 !important; }
    .prioridad-media { border-left: 4px solid #2f31a1 !important; }
    .prioridad-baja { border-left: 4px solid #198754 !important; }
    .nav-link { cursor: pointer; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-5">
  <div class="container">
    <a class="navbar-brand" href="#inicio" data-bs-toggle="tab">To Do List Grupo 3</a>

    <ul class="navbar-nav ms-auto nav-pills" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" data-bs-target="#inicio" data-bs-toggle="pill" role="tab">Inicio</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-target="#tareas" data-bs-toggle="pill" role="tab">Mis tareas</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-target="#crear" data-bs-toggle="pill" role="tab">Nueva tarea</a>
      </li>
      <li class="nav-item d-none" role="presentation">
        <a class="nav-link" id="tab-editar" data-bs-target="#editar" data-bs-toggle="pill" role="tab">Editar Tarea</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="tab-content">

    <div class="tab-pane fade show active" id="inicio" role="tabpanel">
        <div class="text-center mt-5">
            <i class="bi bi-ui-checks display-1 text-primary mb-3"></i>
            <h2 class="fw-bold">GESTOR DE TAREAS GRUPO 3</h2>
            <p class="text-muted">Selecciona una opción en el menú superior.</p>
        </div>
    </div>
<!-- Este es el inicio -->
    <div class="tab-pane fade" id="tareas" role="tabpanel">
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form action="tareas.php" method="GET">
                    <div class="input-group">
                        <input type="search" name="q" class="form-control" placeholder="Buscar tarea...">
                        <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Este es Mi tarea !-->
        
       
        
    
         <?php while($row = mysqli_fetch_array($query)): ?>                                 
        <div class="row g-3">
         
            <div class="col-md-6 col-lg-4">
             
                <div class="tarjeta-custom p-3 h-100 d-flex flex-column prioridad-alta">
               
                    <div class="flex-grow-1">
                     
                        <h5 class="fw-bold"><?= $row['Titulo']; ?></h5>
                        <p class="small text-muted mb-3"> <?= $row['Contexto']; ?> </p>
                        
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center border-top pt-2 mt-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox">
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-light text-primary" onclick="document.getElementById('tab-editar').click()"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-light text-danger rounded-start-0"><i class="bi bi-trash"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    
    <a href="../Tabla/index.php">Pagina nueva</a>
<!-- Esta es nueva tarea !-->

    <div class="tab-pane fade" id="crear" role="tabpanel">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="tarjeta-custom p-4">
                    <h4 class="mb-4 text-center">Nueva Tarea</h4>
                    
                    <!-- Aqui esta el formulario -->
                    
                    <form action="../crud/CRT.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-muted small" >Título nueva tarea</label>
                            <input type="text" name="titulo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small">Prioridad</label>
                            <select name="prioridad" class="form-select" required>
                                <option value="" disabled selected>Selecciona...</option>
                                <option value="1">Alta</option>
                                <option value="2">Media</option>
                                <option value="3">Baja</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Guardar Tarea</button>
                    </form>
                     <!-- Aqui esta el formulario -->
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="editar" role="tabpanel">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="tarjeta-custom p-4 border-top border-4 border-warning">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Editar</h4>
                    </div>
                    
                    <!-- Formulario de editar mis tareas !-->
                    
                    <form action="../crud/UDP.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-muted small">Titulo</label>
                            <input type="text" name="titulo" class="form-control" value="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small">Prioridad</label>
                            <select name="prioridad" class="form-select" required>
                                <option value="alta">Alta</option>
                                <option value="media">Media</option>
                                <option value="baja">Baja</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>