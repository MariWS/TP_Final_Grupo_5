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

<h2>hola mi nombres es: <?php echo $nombreUsuario  ?></h2>
<h2>Edad: <?php echo $edad  ?></h2>

<?php
if($edad>18 && $nombreUsuario==="Martin" && $membresia==="gold"){
?>

<div class="alert alert-primary" role="alert">
  Es mayor!!!!
</div>

<?php
}else{
?>
    <div class="alert alert-success" role="alert">
    Es menor!!!!
    </div>

<?php
}

?>

<form action="datos.php" method="get">


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="nombre">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="password">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentarios"></textarea>
</div>

<input type="submit" value="Enviar">
<input type="reset" value="Borrar">

</form>



<!-- <script>

console.log("hola mundo js")

</script> -->
    
</body>
</html>