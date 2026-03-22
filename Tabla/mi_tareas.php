<?php include("navbar.php"); ?>

<div class="container">

<div class="row justify-content-center mb-4">
    <div class="col-md-6">
        <form method="GET">
            <div class="input-group">
                <input type="search" name="q" class="form-control" placeholder="Buscar tarea...">
                <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6 col-lg-4">
        <div class="tarjeta-custom p-3 h-100 d-flex flex-column prioridad-alta">
            <div class="flex-grow-1">
                <h5 class="fw-bold">Título</h5>
                <p class="small text-muted mb-3">Descripción.</p>
            </div>
            <div class="d-flex justify-content-between align-items-center border-top pt-2 mt-2">
                <input type="checkbox">
                <div>
                    <a href="editar.php" class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil"></i></a>
                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>