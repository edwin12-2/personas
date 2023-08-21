<?php
include_once "encabezado.php";

$conn = include_once "conexion.php";
$re = $conn->query("SELECT id, nombre, correo, fechaI FROM usuarios");
$usuarios = $re->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de usuarios</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success my-2" href="registrarF.php">Agregar nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $us) { ?>
                    <tr>
                        <td><?php echo $us["id"] ?></td>
                        <td><?php echo $us["nombre"] ?></td>
                        <td><?php echo $us["correo"] ?></td>
                        <td><?php echo $us["fechaI"] ?></td>
                        <td>
                            <a class="btn btn-success" href="editar.php?id=<?php echo $us["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="eliminar.php?id=<?php echo $us["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>