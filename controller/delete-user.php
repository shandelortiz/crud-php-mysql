<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];

    $sql=$conexion->query(" DELETE FROM Usuarios WHERE idUsuario=$id ");

    if ($sql==1) {
        echo '<div class="alert alert-success">El usuario ha sido eliminado correctamente!</div>';
    } else {
        echo '<div class="alert alert-danget">Ocurrio un error al eliminar el usuario!s</div>';
    }
}

?>