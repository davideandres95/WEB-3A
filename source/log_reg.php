<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "template/head.php"; ?>
    <link href="assets/css/form-elements.css" rel="stylesheet" />
    <link href="assets/css/log_reg.css" rel="stylesheet" />
</head>

<body>

<!-- navigation panel -->
    <?php include "template/header.php"; ?>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>3A</strong> Login &amp; Formulario de Registro</h1>
                    <div class="description">
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi atque cum delectus ducimus eligendi explicabo facilis labore mollitia nam, nostrum perspiciatis possimus quia quos ratione, suscipit temporibus voluptatem voluptatum.</span><span>Alias aliquid, aut blanditiis consequatur dignissimos eaque error esse excepturi fuga ipsum laudantium magnam molestiae neque nihil nostrum odit officia perspiciatis quas quasi repudiandae saepe similique sunt totam velit voluptatibus!</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Iniciar Sesión</h3>
                                <p>Introduce nombre de usuario y contraseña para iniciar sesión</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="procesa_login.php" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="form-username" placeholder="Nombre de Usuario..." class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Sign in!</button>
                                <?php if(isset($_REQUEST['errorLogin'])): ?>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            Error
                                        </div>
                                        <div class="panel-body">
                                            <p><?php echo "Nombre o contraseña incorrectas"; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>

                    <div class="social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-google-plus"></i> Google Plus
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>

                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Regístrate</h3>
                                <p>Rellena el formulario para solicitar pertenecer a la asociación</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom text-center">

                            <button type="submit" class="btn"><a href="register.php">Registrarme</a></button>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- footer -->
    <?php include "template/footer.php"; ?>
<!-- /footer -->

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/log_reg.js"></script>

<!--[if lt IE 10]>
<script src="assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>