 <?php
  /*   $nombre=$_GET['nombre'];
  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";

  if($nombre=="" && isset($_GET['nombre'])){
    echo "Esta vacio... ingrese algo";
  }else{
    echo"Hay algo en el texto: ". $nombre;
  } */
  ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php y html</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
 </head>

 <header>
   <?php require 'nav_bar.php'; ?>
 </header>

 <body>
    <?php echo "<br> a<br> a<br> "?>
	<div class="container mt-5">
	<?php require 'conexion.php';?>
   <ul class="nav nav-tabs " id="myTab" role="tablist">
	  <li class="nav-item" role="presentation">
		 <!--<a class="nav-link active" aria-current="page" href="#">Oradores</a> -->
		 <button class="nav-link active" id="oradores-tab" data-bs-toggle="tab" data-bs-target="#listaOradores" type="button" role="tab" aria-controls="listaOradores" aria-selected="true">Lista de Oradores</button>
	  </li>
	  <li class="nav-item" role="presentation">
		<!--<a class="nav-link" href="#">Tickets</a>-->
		<button class="nav-link" id="tickets-tab" data-bs-toggle="tab" data-bs-target="#listaTickets" type="button" role="tab" aria-controls="listaTickets" aria-selected="false">Lista de Tickets</button>
	  </li>
	  <li class="nav-item" role="presentation">
		<!--<a class="nav-link" href="#">Link</a>-->
		<button class="nav-link" id="otra-tab" data-bs-toggle="tab" data-bs-target="#otra" type="button" role="tab" aria-controls="otra" aria-selected="false">Otra</button>
	  </li>
	  <li class="nav-item">
		<!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
		<button class="nav-link disabled" id="otra2-tab" data-bs-toggle="tab" data-bs-target="#otra2" type="button" role="tab" aria-controls="otra2" aria-selected="false">Otra 2</button>
	  </li>
	</ul>
   <div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="listaOradores" role="tabpanel" aria-labelledby="oradores-tab">
		 
		 <h2>Registros de la tabla</h2>
		 
		
		
		 <table class="table">
		   <thead>
			 <tr>
			   <th>id_orador</th>
			   <th>Nombre</th>
			   <th>Apellido</th>
			   <th>Email</th>
			   <th>tema</th>
			   <th>fecha_alta</th>
			   <th>Acciones</th>
			 </tr>
		   </thead>
		   <tbody>
			 <?php
			  while ($fila = mysqli_fetch_assoc($consulta)) {
				echo "<tr id='orador-".$fila['id_orador']."'>";
				echo "<td>" . $fila['id_orador'] . "</td>";
				echo "<td>" . $fila['nombre'] . "</td>";
				echo "<td>" . $fila['apellido'] . "</td>";
				echo "<td>" . $fila['email'] . "</td>";
				echo "<td>" . $fila['tema'] . "</td>";
				echo "<td>" . $fila['fecha_alta'] . "</td>";
				echo "<td><a class='btn btn-danger' href='./acciones.php?borrar=orador&id=" . $fila['id_orador'] . "'>Borrar</a>  <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#editarModal\" onclick=\"editar(".$fila['id_orador'].",'orador')\">  Editar</button> </td>";
				echo "</tr>";
			  }
			  ?>
		   </tbody>
		 </table>
	   

	<!-- Modal -->
	<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title fs-5" id="editarModalLabel">Editar Orador</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form id="editarFormulario" name="editarFormulario" action="./acciones.php" method="POST">
			 <label for="id_orador" class="form-label">Id_orador</label>
			 <input type="text" name="id_orador" id="id_orador" class="form-control" readonly/>
			 <label for="nombre" class="form-label">Nombre</label>
			 <input type="text" name="nombre" id="nombre" class="form-control" />
			  <label for="apellido" class="form-label">Apellido</label>
			 <input type="text" name="apellido" id="apellido" class="form-control" />
			  <label for="email" class="form-label">Email</label>
			 <input type="text" name="email" id="email" class="form-control" />
			  <label for="tema" class="form-label">Tema</label>
			 <textarea name="tema" id="tema" class="form-control" /></textarea>
			  <label for="fecha_alta" class="form-label">Fecha</label>
			 <input type="date" name="fecha_alta" id="fecha_alta" class="form-control" />
			 </form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" form="editarFormulario">Guardar Cambios</button>
		  </div>
		</div>
	  </div>
	</div>
	<!--END Modal--->
  </div>
  <div class="tab-pane fade" id="listaTickets" role="tabpanel" aria-labelledby="profile-tab">
	 <h2>Registros de la tabla</h2>
		 <?php $consulta_tickets = mysqli_query($conexion, "SELECT * FROM tickets"); ?>
	
		 <table class="table">
		   <thead>
			 <tr>
			   <th>id_ticket</th>
			   <th>Nombre</th>
			   <th>Apellido</th>
			   <th>Email</th>
			   <th>Cantidad</th>
			   <th>Categoria</th>
			   <th>Total</th>
			   <th>Acciones</th>
			 </tr>
		   </thead>
		   <tbody>
			 <?php
			   while ($fila = mysqli_fetch_assoc($consulta_tickets)) {
				echo "<tr id='ticket-".$fila['id_ticket']."'>";
				echo "<td>" . $fila['id_ticket'] . "</td>";
				echo "<td>" . $fila['nombre'] . "</td>";
				echo "<td>" . $fila['apellido'] . "</td>";
				echo "<td>" . $fila['email'] . "</td>";
				echo "<td>" . $fila['cantidad'] . "</td>";
				echo "<td>" . $fila['categoria'] . "</td>";
				echo "<td>$" . $fila['total'] . "</td>";
				echo "<td><a class='btn btn-danger' href='./acciones.php?borrar=ticket&id=" . $fila['id_ticket'] . "'>Borrar</a>  <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#editarModalTickets\" onclick=\"editar(".$fila['id_ticket'].",'tickets')\">  Editar</button> </td>";
				echo "</tr>";
			  } 
			  ?>
		   </tbody>
		 </table>
		 	<!-- Modal Tickets -->
	<div class="modal fade" id="editarModalTickets" tabindex="-1" aria-labelledby="editarModalTicketsLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h1 class="modal-title fs-5" id="editarModalTicketsLabel">Editar Venta del Ticket</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form id="editarFormularioTickets" name="editarFormularioTickets" action="./acciones.php" method="POST">
			 <label for="id_ticket" class="form-label">id_ticket</label>
			 <input type="text" name="id_ticket" id="id_ticket" class="form-control" readonly/>
			 <label for="nombreTickets" class="form-label">Nombre</label>
			 <input type="text" name="nombreTickets" id="nombreTickets" class="form-control" />
			  <label for="apellidoTickets" class="form-label">Apellido</label>
			 <input type="text" name="apellidoTickets" id="apellidoTickets" class="form-control" />
			  <label for="emailTickets" class="form-label">Email</label>
			 <input type="email" name="emailTickets" id="emailTickets" class="form-control" />
			  <label for="cantidadTickets" class="form-label">Cantidad:</label>
			 <input type="number" name="cantidadTickets" id="cantidadTickets" class="form-control" />
			 <label for="categoriaTickets" class="form-label">Categoria</label>
			 <input type="text" name="categoriaTickets" id="categoriaTickets" class="form-control" />
			  <label for="totalTickets" class="form-label">Total: $</label>
			 <input type="number" step="0.01" min="0.00" name="totalTickets" id="totalTickets" class="form-control" />
			 </form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" form="editarFormularioTickets">Guardar Cambios</button>
		  </div>
		</div>
	  </div>
	</div>
	<!--END Modal--->
		 
  </div>
  <div class="tab-pane fade" id="otra" role="tabpanel" aria-labelledby="otra-tab"> Otra tabla...</div>
</div>
</div>
  
   <script src="./acciones.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   
 </body>

 </html>
