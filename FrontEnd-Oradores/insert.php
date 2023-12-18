<?php

require 'conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formOradores'])) {
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
        echo "\n Error: No se se pudo insertar los datos del Orador en la BD";
    } else {
        echo "y se envio el Formulario con exito, puede verificarlo en \"Administrar\"";
    } 
	
} else {
    
		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formTickets'])) {
    $nombreTicket = isset($_POST['nombrejv']) ? $_POST['nombrejv'] : '';
    $apellidoTicket = isset($_POST['apellidojv']) ? $_POST['apellidojv'] : '';
    $correoTicket = isset($_POST['correojv']) ? $_POST['correojv'] : '';
    $cantidadTicket = isset($_POST['cantidadjs']) ? $_POST['cantidadjs'] : '';
    $categoriaTicket = isset($_POST['categoriajs']) ? $_POST['categoriajs'] : '';
	$totalTicketRaw = isset($_POST['valorInput1']) ? $_POST['valorInput1'] : '';
	$totalTicket = explode("$", $totalTicketRaw);
	
	 
	$insertarTicket = mysqli_query($conexion,"INSERT INTO tickets(
    nombre, apellido, email,cantidad,categoria,total) VALUES
    ('$nombreTicket', '$apellidoTicket', ' $correoTicket', '$cantidadTicket', 
    '$categoriaTicket', '$totalTicket[1]')");
	
		if (!$insertarTicket) {
			echo "\n Error: No se pudo insertar la venta de tickets  en la BD";
		} else {
			echo "y se envio el Formulario con exito, puede verificarlo en \"Administrar\"";
		}
			
	} else {
			echo "\n Error: No se pudo insertar los datos.";
			header('location: index.php');
	}
}
?>