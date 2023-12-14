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
   <meta charset="UTF-8">
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
     <h2>Registros de la tabla</h2>
     <?php require 'conexion.php'; ?>
     <table class="table">
       <thead>
         <tr>
           <th>id_orador</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Email</th>
           <th>tema</th>
           <th>fecha_alta</th>
         </tr>
       </thead>
       <tbody>
         <?php
          while ($fila = mysqli_fetch_assoc($consulta)) {
            echo "<tr>";
            echo "<td>" . $fila['id_orador'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['apellido'] . "</td>";
            echo "<td>" . $fila['email'] . "</td>";
            echo "<td>" . $fila['tema'] . "</td>";
            echo "<td>" . $fila['fecha_alta'] . "</td>";
            echo "</tr>";
          }
          ?>
       </tbody>
     </table>
   </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 </body>

 </html>


 <?php
 
  ?>