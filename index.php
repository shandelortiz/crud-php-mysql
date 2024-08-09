<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ce989857e6.js" crossorigin="anonymous"></script>
</head>
<body>

    <script>
        function eliminar(){
            var respuesta=confirm("¿Está seguro de eliminar este registro?")ñ

            return respuesta;
        }
    </script>

    <h1 class="text-center">Hola Mundo</h1>

    <div clas="container-fluid row">
        <form class="col-4 p-3" method="POST">

            <h3>Crear Usuario</h3>

            <?php
            include "model/conection.php";
            include "controller/create-user.php";
            include "controller/delete-user.php";
            ?>

            <div class="mb-3">
                <label for="exampleInputNombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="exampleInputNombres" name="nombres">
            </div>

            <div class="mb-3">
                <label for="exampleInputApellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="exampleInputApellidos" name="apellidos">
            </div>

            <div class="mb-3">
                <label for="exampleInputCorreo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputCorreo" name="correo">
            </div>

            <div class="mb-3">
                <label for="exampleInputTelefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="exampleInputTelefono" name="telefono">
            </div>
            <button type="submit" class="btn btn-success" name="btncrear" value="ok">Crear Usuario</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">TELEFONO</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include "model/conection.php";
                    $sql=$conexion->query(" select * from Usuarios ");
                    while($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <th scope="row"><?= $datos->idUsuario?></th>
                            <td><?= $datos->nombres?></td>
                            <td><?= $datos->apellidos?></td>
                            <td><?= $datos->correo?></td>
                            <td><?= $datos->telefono?></td>
                            <td>
                                <a href="/crud-php/editar-usuario.php?id=<?=$datos->idUsuario?>" class="btn btn-medium btn-primary"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                <a onclick="return eliminar()" href="/crud-php/index.php?id=<?=$datos->idUsuario?>" class="btn btn-medium btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
                        </td>
                    </tr>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>