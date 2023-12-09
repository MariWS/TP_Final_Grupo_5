 <?php
  echo"prueba php <br>";

/*   echo $_GET['nombre'];
  echo $_GET['apellido'];
  echo $_GET['email'];
  echo $_GET['fecha']; */
 
  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";

 echo "El nombre es: " .$_GET['nombre'];


 $nombre=$_GET['nombre'];

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

<h1>Hola esto es html + PHP</h1>
<h2>hola mi nombres es: <?php echo $nombre  ?></h2>
<h2>Edad: <?php/*  echo $edad   */?></h2>



<!-- <script>

console.log("hola mundo js")

</script> -->
    
</body>
</html>