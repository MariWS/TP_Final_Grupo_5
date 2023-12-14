<?php 
$conexion = mysqli_connect("localhost", "root", "", "integrador_cac");

if(mysqli_connect_errno()){
    echo "No se conectó por un error: " . mysqli_connect_errno();
} else {
    echo "Se conectó con éxito";
}

$consulta = mysqli_query($conexion, "SELECT * FROM oradores");

/* echo "<pre>";
var_dump($consulta);
echo "</pre>"; */


/* $listado = mysqli_fetch_assoc($consulta); */
/* $listadoArray = mysqli_fetch_array($consulta); */

/* echo "<pre>";
var_dump($listadoArray);
echo "</pre>"; */

/* echo "<br>";
echo $listado ['nombre'];

foreach($listado as $valor){
    echo $valor;

} */
