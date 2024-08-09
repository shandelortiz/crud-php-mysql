<?php

if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"])) {
        $id=$_POST["id"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];

        $sql=$conexion->query(" UPDATE Usuarios SET nombres='$nombres', apellidos='$apellidos', correo='$correo', telefono=$telefono WHERE idUsuario=$id ");

        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Ocurrio un error al modificar el usuario!</div>";
        }
        
    } else {
        echo "<div class='alert alert-warning'>Hacen falta completar campos!</div>";
    }
    
}

?>