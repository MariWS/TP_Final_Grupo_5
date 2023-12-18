<?php

if(isset($_POST) && !empty($_POST)){

 require 'conexion.php';
/*	echo "<pre>";
	print_r($_POST);
		echo "</pre>"; */
		
	if(isset($_POST["cantidadTickets"]) && !empty($_POST["cantidadTickets"])){
	
		$consultaDeEdicion = "UPDATE tickets SET nombre = '".$_POST["nombreTickets"]."', apellido = '".$_POST["apellidoTickets"]."', email = '".$_POST['emailTickets']."', cantidad = '".$_POST['cantidadTickets']."', categoria = '".$_POST['categoriaTickets']."', total = '".$_POST['totalTickets']."' WHERE id_ticket =".$_POST['id_ticket'];
	} else{	
		$consultaDeEdicion = "UPDATE oradores SET nombre = '".$_POST["nombre"]."', apellido = '".$_POST["apellido"]."', email = '".$_POST['email']."', tema = '".$_POST['tema']."', fecha_alta = '".$_POST['fecha_alta']."' WHERE id_orador =".$_POST['id_orador'];
	}
	$editar = mysqli_query($conexion,	$consultaDeEdicion);
	
	if (!$editar) {
        echo "<br> No se pudieron guardar los cambios en la Base de Datos.<br>";
		 printf("Error: %s\n", mysqli_error($conexion));
    } else {
        echo "<br> ¡Los cambios fueron guardados correctamente!";
    } 
?>	
	<script language="JavaScript">
      setTimeout("location.href='./datos.php'", 3000);
   </script>
<?php
} else {
		if((!isset($_GET['id']) || empty($_GET['id']) ) || (!isset($_GET['borrar']) || empty($_GET['borrar']) )){
				
			echo "Error: Faltan los datos para continuar la operación.";
		  }else{
			
			require 'conexion.php';
			
				$borrar = $_GET['borrar'];
				$id = $_GET['id'];
	
			$tabla = $borrar === "orador" ? "oradores" : "tickets";
			$idNombre = $borrar === "orador" ? "id_orador" : "id_ticket";
			
			$consultaEliminar = "DELETE FROM ".$tabla." WHERE ".$idNombre." = '$id'";
				
			$eliminar = mysqli_query($conexion,	$consultaEliminar);
			if (!$eliminar) {
					echo "<br> No se pudo eleiminar el registro de la Base de Datos.<br>";
					 /* printf("Error: %s\n", mysqli_error($conexion)); */
				} else {
					echo "<br> ¡Se elimnó el registro correctamente!";
				} 
?>	
				<script language="JavaScript">
			  setTimeout("location.href='datos.php'", 3000);
		   </script>
<?php
	
  } 
	

	}


?>