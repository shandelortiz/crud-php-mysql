<?php
if (!empty($_POST["btncrear"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"])) {
        
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];

        $sql=$conexion->query("INSERT INTO Usuarios(nombres, apellidos, correo, telefono) VALUES('$nombres','$apellidos','$correo',$telefono)");

        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario creado con exito!</div>';
        } else {
            echo '<div class="alert alert-warning">Error al registrar el usuario!</div>';
        }
        
    } else {
        echo '<div class="alert alert-danger">Debe completar todos los campos solicitados!</div>';
    }
}
?>