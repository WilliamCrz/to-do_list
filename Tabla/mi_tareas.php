<?php 
    include_once("../crud/READ.php");
    include("navbar.php"); 
 ?>

<div class="container">

<div class="row justify-content-center mb-4 mt-4">
    <div class="col-md-6">
        <form method="GET">
            <div class="input-group">
                <input type="search" name="q" class="form-control" placeholder="Buscar tarea...">
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="row g-3">

<?php while($row = mysqli_fetch_array($query)): ?>

<?php 
    $clasePrioridad = 
        $row['Prioridad'] == 1 ? 'prioridad-alta' : 
        ($row['Prioridad'] == 2 ? 'prioridad-media' : 'prioridad-baja');
?>

<div class="col-md-6 col-lg-4">

    <div class="tarjeta-custom p-3 h-100 d-flex flex-column <?= $clasePrioridad ?>">
        
        <div class="flex-grow-1">
            <h5 class="fw-bold text-dark"><?= $row['Titulo'] ?></h5>
            <p class="small text-muted mb-3"><?= $row['Contexto'] ?></p>
        </div>

        <div class="d-flex justify-content-between align-items-center border-top pt-2 mt-2">
            
            <input type="checkbox">

            <div class="btn-group">
                <?= $row['Fecha'] ?>
                <a href="../Tabla/editar_tarea.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-light text-primary">
                    <i class="bi bi-pencil"></i>
                </a>
                <a href="../crud/DLT.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-light text-danger">
                    <i class="bi bi-trash"></i>
                </a>
            </div>

        </div>

    </div>

</div>

<?php endwhile; ?>

</div>
</div>