<?php include("navbar.php"); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 col-lg-5">

<div class="tarjeta-custom p-4">
<h4 class="mb-4 text-center">Nueva Tarea</h4>

<form method="POST">
    <input type="text" name="titulo" class="form-control mb-3" placeholder="Título" required>
    <textarea name="descripcion" class="form-control mb-3" placeholder="Descripción" required></textarea>

    <select name="prioridad" class="form-select mb-3" required>
        <option disabled selected>Selecciona prioridad</option>
        <option value="1">Alta</option>
        <option value="2">Media</option>
        <option value="3">Baja</option>
    </select>

    <button class="btn btn-primary w-100">Guardar</button>
</form>

</div>
</div>
</div>
</div>