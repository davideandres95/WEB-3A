<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "template/head.php"; ?>
    <link href="assets/css/front.css" rel="stylesheet" />
</head>

<body>

<!-- navigation panel -->
    <?php include "template/header.php"; ?>
<!-- /navigation panel  -->

<!-- Top content -->
<!-- first section - Home -->
<div id="home" class="home">
    <div class="text-vcenter">
        <h1>Bienvenido</h1>
        <h3><strong>3A/ A</strong>sociación de <strong>A</strong>ntiguos <strong>A</strong>lumnos</h3>
        <h4>Colegio Brains</h4>
        <a href="log_reg.php" class="btn btn-default btn-lg">Inscríbete</a>
    </div>
</div>
<!-- /first section -->

<!-- second section - header About -->
<div id="Habout" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3> La Asociación de Antiguos Alumnos del Colegio Brains fué fundada en 2014 con mucha ilusión. </h3>
                <p><em>Nuestra asociación tiene como finalidad promover los vínculos de relación entre los antiguos alumnos y la institución a través de encuentros y actividades culturales,  recreativas y solidarias, contando con ellos como modelo para todos nuestros alumnos que aún tienen que completar su formación en nuestros centros.</em> </p>
            </div>
        </div>
    </div>
</div>
<!-- /second section -->

<!-- third section - About-->
<div id="about" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h3>Valores</h3>
                                        <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</em></p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h3>Misión</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h3>Ambiciones</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="assets/images/valores.png"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="assets/images/mision.png">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="assets/images/ambiciones.png">>
                        </li>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/third section -->

<!-- third section - Services -->
<div id="servicios" class="pad-section">
    <div class="container">
        <h2 class="text-center">Servicios</h2> <hr />
        <div class="row text-center">
            <div class="col-lg-2 col-lg-offset-1 col-md-4 col-sm-6 col-xs-12">
                <a href="construccion.php"><i class="glyphicon glyphicon-calendar hvr-glow"> </i></a>
                <h4>Agenda</h4>
                <p>Entérate de las próximas actividades de la Asocición</p>
            </div>
            <div class="col-lg-2  col-md-4 col-sm-6 col-xs-12">
                <a href="log_reg.php"> <i class="glyphicon glyphicon-pencil hvr-glow"></i></a>
                <h4>Inscríbete</h4>
                <p>Empieza a formar parte de la Asociación</p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <a href="construccion.php"><i class="glyphicon glyphicon-inbox hvr-glow"> </i></a>
                <h4>Contáctanos</h4>
                <p>Estaremos encantados de recibir vuestras noticias, actividades y comentarios</p>
            </div>
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
                <a href="construccion.php"><i class="glyphicon glyphicon-eye-open hvr-glow"> </i></a>
                <h4>Liga 3A</h4>
                <p>Entérate de cual es el estado de la Liga interna de Fútbol 7</p>
            </div>
            <div class="col-lg-2 col-md-4 col-md-offset-0 col-sm-6  col-sm-offset-3 col-xs-12">
                <a href="directory_private.php"><i class="glyphicon glyphicon-user hvr-glow"> </i></a>
                <h4>Zona Personal</h4>
                <p>Accede a tu perfil y tu zona personal</p>
            </div>
        </div>
    </div>
</div>
<!-- /third section -->

<!-- fourth section - Junta -->
<div id="Junta_Directiva" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" id="junta" >
                <h2>Junta Directiva</h2>
                <h3>La Asociación se rige por una Junta Directiva que anualmente rinde cuentas de su actuación a la Asamblea. Los miembros de la actual Junta Directiva son los siguientes:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 ">
                <div class="animation-element bounce-up cf panel panel-default ">
                    <div class="panel-heading text-center">
                        <h3>David de Andrés Hernandez</h3>
                        <h4>Presidente</h4>
                    </div>
                    <div class="panel-body lead">
                        <img src="assets/images/presidente.jpg" class="img-responsive img-circle center-block">
                        <p class="text-center">Antiguo Alumno de la XIII promoción y estudiante de Ingeniería de Telecomunicación. Su ilusión es conseguir que antiguos alumnos de distintas promociones creen lazos y se apoyen unos a otros.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>Arturo Poujade Guadalajara</h3>
                        <h4>Vicepresidente</h4>
                    </div>
                    <div class="panel-body lead">
                        <img src="assets/images/arturo.jpg" class="img-responsive img-circle center-block">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut esse ex exercitationem labore neque perspiciatis quam quibusdam similique. Animi at atque error magni mollitia nam officia rem sequi suscipit?</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>Alfonso Alcantara Montuenga</h3>
                        <h4>Tesorero</h4>
                    </div>
                    <div class="panel-body lead">
                        <img src="assets/images/tesorero.jpg" class="img-responsive img-circle center-block">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aperiam consequatur dolorem enim fugiat in incidunt minus modi neque obcaecati odit officia perspiciatis quidem quisquam, recusandae repellat soluta unde! </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>Cristina González Quebradas</h3>
                        <h4>Secretaria</h4>
                    </div>
                    <div class="panel-body lead">
                        <img src="assets/images/secretaria.jpg" class="img-responsive img-circle center-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque commodi consequuntur eligendi esse et incidunt libero magnam, mollitia nostrum officia quia sed tempore vero voluptatem. Aliquam officia sed sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3>Caridad Galindo</h3>
                        <h4>Representante Colegio Brains</h4>
                    </div>
                    <div class="panel-body lead">
                        <img src="assets/images/representante.jpg" class="img-responsive img-circle center-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, culpa cum cumque eveniet ex expedita maiores minima repudiandae, rerum sequi similique tempore voluptatibus. Autem consectetur dignissimos earum iusto mollitia nihil?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /fourth section -->

<!-- fifth section - Cabecera galleria -->
<div id="Hgallery" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Galeria</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam asperiores, assumenda autem, culpa
                    deleniti distinctio dolor dolorem ducimus eaque excepturi exercitationem explicabo facilis iusto odit quo recusandae suscipit ut?</p>
            </div>
        </div>
    </div>
</div>
<!-- /fifth section -->


<div id="gallery" class="pad-section">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="assets/images/fotos/colegio.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/fotos/piscina.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/fotos/football.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="item">
                <img src="assets/images/fotos/basket.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div> <!-- Carousel -->
</div>


<!-- fifth section -->
<div id="contact" class="pad-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>La Asociación desarrolla sus actividades en el Colegio de la Moraleja</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, error incidunt inventore maiores nisi odio sed tempora. Consectetur deleniti soluta suscipit! Ipsum neque omnis qui ratione sit? Esse, et, repellendus.</p>
            </div>
        </div>
    </div>
</div>
<!-- /fifth section -->

<!-- google map -->
<div id="google_map"></div>
<!-- /google map -->
<!-- /Top content -->

<!-- footer -->
    <?php include "template/footer.php"; ?>
<!-- /footer -->

<!-- Javascript -->
<!-- attach JavaScripts -->
<script src="assets/js/animations.js"></script>
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/main.js"></script>
</body>

</html>