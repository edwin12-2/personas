<?php include_once "encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar usuario</h1>
        <form action="agregar.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <textarea placeholder="Correo" class="form-control" name="correo" id="correo" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group"><button class="btn btn-primary">Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>