<?php

include "model/conection.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM Usuarios WHERE idUsuario=$id")

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Usuario</title>
</head>
<body>
    <form class="col-4 p-3" method="POST">

        <h3>EDITAR USUARIO</h3>

        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

        <?php
        
        include "controller/edit-user.php";

        while ($datos=$sql->fetch_object()) {?>
            <div class="mb-3">
                <label for="exampleInputNombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="exampleInputNombres" name="nombres" value="<?= $datos->nombres?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputApellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="exampleInputApellidos" name="apellidos" value="<?= $datos->apellidos?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputCorreo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputCorreo" name="correo" value="<?= $datos->correo?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputTelefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="exampleInputTelefono" name="telefono" value="<?= $datos->telefono?>">
            </div>
        <?php }

        ?>

        
        <button type="submit" class="btn btn-success" name="btneditar" value="ok">Guardar</button>

        <button type="submit" class="btn btn-danger" name="btneditar" value="ok" href="/index.php">Cancelar</button>
    </form>
</body>
</html>