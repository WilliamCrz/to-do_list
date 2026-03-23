<?php 
    
    include("navbar.php"); 
    $id = $_GET['id'];
    
    $SLT = "SELECT * FROM tareas WHERE id = '$id' ";
    $query = mysqli_query($link, $SLT);
    $row = mysqli_fetch_array($query);

?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 col-lg-5">

<div class="tarjeta-custom p-4 border-top border-4 border-warning">

<h4 class="mb-4">Editar Tarea</h4>

<form action="../crud/UDT.php" method="POST">
    
    <!-- Input secreto de id !--> 
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <input type="text" name="titulo" class="form-control mb-3" value="<?= $row['Titulo'] ?>" required>
    <input type="date" name="fecha" class="form-control" required>
    <textarea name="descripcion" class="form-control mb-3" required><?= $row['Contexto'] ?></textarea>

    <select name="prioridad" class="form-select mb-3">
        <option value="1">Alta</option>
        <option value="2">Media</option>
        <option value="3">Baja</option>
    </select>

    <button class="btn btn-warning w-100">Guardar Cambios</button>
</form>

</div>
</div>
</div>
</div>