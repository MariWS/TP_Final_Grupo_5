<?php

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreForm = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellidoForm = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $correoForm = isset($_POST['email']) ? $_POST['email'] : '';
    $temaForm = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';
    $fechaForm = isset($_POST['fecha']) ? $_POST['fecha'] : '';

    $insertar = mysqli_query($conexion, "INSERT INTO oradores(
    id_orador, nombre, apellido, email,tema,fecha_alta) VALUES
    (NULL,'$nombreForm', '$apellidoForm', '$correoForm', '$temaForm ', 
    '$fechaForm')");

    if (!$insertar) {
        echo "No se insertó con éxito en la BD";
    } else {
        echo "y se envio el Formulario con exito, puede verificarlo en \"Administrar\"";
    }
} else {
    echo "No se pudo insertar";
    header('location: index.php');
}
?>