<?php 

echo "Probando funcion php <br>";

function test (){
    echo "Esto es una funcion <br>";
}

function test1 ($nombre,$apellido,$edad,$humano=true){
    if($edad>18 && $humano==true){
        echo "Esto es una funcion con parametros: ".$nombre. " y apellido: 
        ".$apellido." con ". $edad." anios. <br>";
    }else{
        echo "No es mayor de edad ".$edad;
    }
}

test();

test1("Chris","Avila",19);

function conRetorno(){
    return true;

}

conRetorno();
$resultadoRe= conRetorno();

if($resultadoRe){
    echo"Dio verdadero. <br>";
}

if(isset($resultadoRe)){
    echo "Existe la variable: ".isset($resultadoRe)." <br>";
}else{
    echo"No existe.".isset($resultadoRe)." <br>";
}
?>