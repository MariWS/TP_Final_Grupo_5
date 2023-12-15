<?php
date_default_timezone_set('America/Argentina/Buenos_Aires'); // Ajusta la zona horaria para Argentina
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Grup 5 integrador</title>

</head>

<body>
    <header class="header">
        <?php include 'nav_bar.php'; ?>
    </header>

    <div class="text-center">
        <section class="imagen_grande">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/hawaii.jpg" class="d-block w-100" alt="...">
                        <div class="contenido_fijo">
                            <div class="col-6 fila2a"></div>
                            <div class="col-5 fila2b">
                                <div class="titulo_tarjeta">
                                    <a>Conf Bs As</a>
                                </div>
                                <p class="blankito">
                                    Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!
                                </p>
                                <div class="botones_tarjeta">
                                    <a href="#FormOradores">
                                        <button type="button" class="btn btn-outline-secondary blankito"> Quiero ser orador</button>
                                    </a>
                                    <div class="espacio-entre-botones">a</div>
                                    <a href="#Tipos">
                                        <button type="button" class="btn btn-success">Comprar tickets</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-1 fila2c"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/hawaii2.jpg" class="d-block w-100" alt="...">
                        <div class="contenido_fijo">
                            <div class="col-6 fila2a"></div>
                            <div class="col-5 fila2b">
                                <div class="titulo_tarjeta">
                                    <a>Conf Bs As</a>
                                </div>
                                <p class="blankito">
                                    Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!
                                </p>
                                <div class="botones_tarjeta">
                                    <a href="#FormOradores">
                                        <button type="button" class="btn btn-outline-secondary blankito"> Quiero ser orador</button>
                                    </a>
                                    <div class="espacio-entre-botones"></div>
                                    <a href="#Tipos">
                                        <button type="button" class="btn btn-success">Comprar tickets</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-1 fila2c"></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <p class="mb-0" id="Oradores">CONOCE A LOS</p>
                <h1>ORADORES</h1>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/steve.jpg" class="card-img-top" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Steve Jobs</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, amet
                            consequatur? Sed accusamus beatae, odit eveniet temporibus fugiat esse fugit saepe ratione
                            deleniti, consequuntur magni enim libero alias iusto officia?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/bill.jpg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Bill Gates</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias est
                            cumque animi perspiciatis numquam asperiores laudantium fugit, aspernatur, delectus
                            inventore quidem ipsam porro voluptas. Porro sunt blanditiis dolores illum voluptas!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/ada.jpeg" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Ada</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus,
                            voluptatibus quisquam odio perspiciatis maiores error ipsa assumenda cumque? Facilis
                            expedita mollitia incidunt inventore repellendus sunt nostrum sit similique repudiandae
                            quaerat?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de cards-->

    <div class="container-fluid p-0">
        <div class="row no-gutters" id="Banner2">
            <div class="col-md-6">
                <img src="images/honolulu.jpg" class="img-fluid" alt="Imagen">
            </div>
            <div class="col-md-6 bg-dark text-white">
                <div class="p-3">
                    <h2>Bs As - Octubre</h2>
                    <p>Buenos Aires es la provincia y localidad más grande del estado de Argentina, en
                        los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades
                        estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la
                        costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado
                        una ciudad- condado consolidada que cubre toda la ciudad (aproximadamente 600 km² de
                        superficie). </p>
                    <button class="btn btn-primary">Conocé más</button>
                </div>
            </div>
        </div>
    </div>
    <!--Fin de Banner-->
    <br>
    <!--FORMULARIO-->

    <div class="containerjs" id="FormOradores">
        <div class="titulojs">
            <p class="mb-0">CONVIERTETE EN UN </p>
            <h1>ORADOR</h1>
            <p class="textorador">Anotate como orador para dar una charla ignite. Cuentanos de que
                quieres hablar!</p>
        </div>
        <div class="contact-wrapper0">
            <div class="formulariojs">
                <form action="insert.php" method="post" id="miFormulario">
                    <p>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                    </p>
                    <p>
                        <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
                    </p>
                    <p>
                        <input type="email" class="form-control" id="email" placeholder="Email@asad.com" name="email">
                    </p>
                    <p>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>">
                    </p>

                    <p class="block">
                        <textarea class="form-control" id="charla" rows="4" placeholder="Sobre que quieres hablar?" name="comentarios"></textarea>
                    </p>
                    <p class="text2">
                        <small class="form-text text-muted texto">Recuerda incluir un título para tu charla.</small>
                    </p>
                    <p class="block">
                        <button type="submit" class="btn btn-success enviar" id="enviar">Enviar</button>
                    </p>
                </form>
            </div>
        </div>

    </div>
    <!--Fin de form-->

    <!-- JS -->

    <div id="Tipos">
        <div id="Azul">
            <h5><b>Estudiante</b></h5>
            <p>Tienen un descuento</p>
            <p><b>80%</b></p>
            <p>*Presentar documentación</p>
        </div>

        <div id="Verde">
            <h5><b>Trainee</b></h5>
            <p>Tienen un descuento</p>
            <p><b>50%</b></p>
            <p>*Presentar documentación</p>
        </div>

        <div id="Amarillo">
            <h5><b>Junior</b></h5>
            <p>Tienen un descuento</p>
            <p><b>15%</b></p>
            <p>*Presentar documentación</p>
        </div>
    </div>
    <br>

    <!--FORM JAVASCRIP-->
    <div class="containerjs">
        <div class="titulojs">
            <p>VENTA</p>
            <h1>VALOR DE TICKET $200</h1>
        </div>
        <div class="contact-wrapper0">
            <div class="formulariojs">
                <form action="" id="caja2">
                    <p>
                        <input type="text" name="nombrejv" placeholder="Nombre">
                    </p>
                    <p>
                        <input type="text" name="apellidojv" placeholder="Apellido">
                    </p>

                    <p class="block">
                        <input type="email" name="correojv" placeholder="Correo">
                    </p>
                    <p>
                        <label for="cantidadjs">Cantidad</label>
                        <input type="number" name="cantidadjs" id="cantidadjs" placeholder="cantidad">
                    </p>
                    <p>
                        <label for="categoriajs">Categoria</label><br>
                        <select name="categoriajs" id="categoriajs">
                            <option id="Estudiante" value="Estudiante">Estudiante</option>
                            <option id="Trainee" value="Trainee">Trainee</option>
                            <option id="Junior" value="Junior">Junior</option>
                        </select>

                    </p>
                    <p class="block">
                        <label for="" id="valorInput1">Total a pagar: $ -</label>
                    </p>
                    <p>
                        <button type="reset" id="Borrar">Borrar</button>
                    </p>
                    <p>
                        <button type="submit" id="Resumen">Resumen</button>
                    </p>
                </form>
            </div>
        </div>


    </div>
    <!--FIN FORMJS-->
    <!--FOOTER-->
    <br>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline custom-footer-menu">
                        <li class="list-inline-item"><a class="text-white" href="#">Preguntas frecuentes</a></li>
                        <li class="list-inline-item"><a class="text-white" href="#">Contáctanos</a></li>
                        <li class="list-inline-item"><a class="text-white" href="#">Prensa</a></li>
                        <li class="list-inline-item"><a class="text-white" href="#">Conferencias</a></li>
                        <li class="list-inline-item"><a class="text-white" href="#">Términos y condiciones</a></li>
                        <li class="list-inline-item"><a class="text-white" href="#">Privacidad</a></li>
                        <li class="list-inline-item"><a class="text-white" href="#">Estudiantes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="alert.js"></script>
</body>

</html>