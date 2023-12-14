<?php

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreForm = $_POST['nombre'];
    $apellidoForm = $_POST['apellido'];
    $correoForm = $_POST['email'];
    $temaForm = $_POST['comentarios'];
    $fechaForm = $_POST['fecha'];

    $insertar = mysqli_query($conexion, "INSERT INTO oradores(
    id_orador, nombre, apellido, email,tema,fecha_alta) VALUES
    (NULL,'$nombreForm', '$apellidoForm', '$correoForm', '$temaForm ', 
    '$fechaForm')");

    if (!$insertar) {
        echo "No se insertó con éxito en la BD";
    } else {
        echo "Se insertó con éxito en la BD";
    }
} else {
    echo "No se pudo insertar";
    header('location: index.php');
}
?>