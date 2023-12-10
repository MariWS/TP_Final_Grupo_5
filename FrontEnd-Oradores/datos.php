 <?php
/*   echo $_GET['nombre'];*/
  $nombre=$_GET['nombre'];
  $apellido=$_GET['apellido'];
  $email=$_GET['email'];
  $fecha=$_GET['fecha'];
  $comentarios=$_GET['comentarios'];

  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";

  echo "El nombre es: " .$_GET['nombre']."<br>";

  if($nombre=="" && isset($_GET['nombre'])){
    echo "Esta vacio... ingrese algo";
  }else{
    echo"Hay algo en el texto: ". $nombre;
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php y html</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <h1>Hola esto es HTML + PHP</h1>
  <h2>Hola mi nombres es: <?php echo $nombre  ?></h2>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $nombre?></h5>
      <p class="card-text"><?php echo $comentarios?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>


<!-- <script>

console.log("hola mundo js")

</script> -->
    
</body>
</html>