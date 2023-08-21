<?php
include_once "encabezado.php";
$conn = include_once "conexion.php";
$id = $_GET["id"];
$state = $conn->prepare("SELECT id, nombre, correo FROM usuarios WHERE id = ?");
$state->bind_param("i", $id);
$state->execute();
$re = $state->get_result();
$usuarios = $re->fetch_assoc();
if (!$usuarios) {
    exit("No hay resultados");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar usuario</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $usuarios["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $usuarios["nombre"] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <textarea placeholder="Correo" class="form-control" name="correo" id="correo" cols="30" rows="10" required><?php echo $usuarios["correo"] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>