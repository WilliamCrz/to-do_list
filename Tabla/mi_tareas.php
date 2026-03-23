<?php 
    include_once("../crud/READ.php");
    include("navbar.php"); 
 ?>


<div class="container">

<a href="exportar_tareas.php" class="btn btn-success mb-3" style="background-color:#5dade2; color:white;">
    <i class="bi bi-download"></i> Exportar tareas </a>

<div class="row justify-content-center mb-4 mt-4">
    <div class="col-md-6">
      <form method="GET" action="mi_tareas.php">
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

<?php if(isset($_GET['q'])): ?>
    <?php if(mysqli_num_rows($query) > 0): ?>
        <div class="alert alert-success text-center">
            Se encontraron <?= mysqli_num_rows($query) ?> tarea(s)
        </div>
    <?php else: ?>
        <div class="alert alert-danger text-center">
            No se encontraron tareas
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php while($row = mysqli_fetch_array($query)): ?>

<?php 
    $clasePrioridad =
    $row['prioridad'] == 'alta' ? 'prioridad-alta' :
    ($row['prioridad'] == 'media' ? 'prioridad-media' : 'prioridad-baja');
?>

<div class="col-md-6 col-lg-4">

    <div class="tarjeta-custom p-3 h-100 d-flex flex-column <?= $clasePrioridad ?>">
        
        <div class="flex-grow-1">
            <h5 class="fw-bold text-dark"><?= $row['titulo'] ?></h5>
            <p class="small text-muted mb-3"><?= $row['contexto'] ?></p>
        </div>

        <div class="d-flex justify-content-between align-items-center border-top pt-2 mt-2">
            
            <input type="checkbox">

            <div class="btn-group">
                <?= $row['fecha'] ?>
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