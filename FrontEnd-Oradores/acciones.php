<?php

if(isset($_POST) && !empty($_POST)){

 require 'conexion.php';
/*	echo "<pre>";
	print_r($_POST);
		echo "</pre>"; */
		
	
	 $consultaDeEdicion = "UPDATE oradores SET nombre = '".$_POST["nombre"]."', apellido = '".$_POST["apellido"]."', email = '".$_POST['email']."', tema = '".$_POST['tema']."', fecha_alta = '".$_POST['fecha_alta']."' WHERE id_orador =".$_POST['id_orador'];

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
		


		if((!isset($_GET['id']) || empty($_GET['id']) ) || (!isset($_GET['accion']) || empty($_GET['accion']) )){
				
			echo "Error: Faltan los datos para continuar la operación.";
		  }else{
			
			require 'conexion.php';
			
				$accion = $_GET['accion'];
				$id_orador = $_GET['id'];
	/* 		echo"Hay algo en el texto: ". $_GET['id'];
			echo"<br>Hay algo en el texto: ". $_GET['accion']; */
					
			$consulta = "DELETE FROM oradores WHERE id_orador = $id_orador";
			
			/* echo $consulta; */
			$eliminar = mysqli_query($conexion,	$consulta);
			if (!$eliminar) {
					echo "<br> No se pudo eleiminar el registro de la Base de Datos.<br>";
					 printf("Error: %s\n", mysqli_error($conexion));
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