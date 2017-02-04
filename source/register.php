<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "template/head.php" ?>
    <link href="assets/css/form-elements.css" rel="stylesheet" />
    <link href="assets/css/log_reg.css" rel="stylesheet" />
</head>

<body>
<!-- navigation panel -->
    <?php include "template/header.php" ?>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
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
                        <div class="form-bottom">
                            <form role="form" data-toggle="validator" action="procesa_registro.php" method="post" class="registration-form" enctype="multipart/form-data">

                                <h4>Datos personales</h4>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-first-name">Nombre</label>
                                    <input type="text" name="form-first-name" placeholder="Nombre..." class="form-first-name form-control" id="form-first-name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-last-name">Apellidos</label>
                                    <input type="text" name="form-last-name" placeholder="Apellidos..." class="form-last-name form-control" id="form-last-name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-birth-date">Fecha de Nacimiento</label>
                                    <input type="date" name="form-birth-date" placeholder="Fecha de Nacimiento" class="select form-birth-date form-control" id="form-birth-date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-id">Documento de Identidad</label>
                                    <input type="text" name="form-id" placeholder="Documento de Identidad" class="form-id form-control" id="form-id" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group col-sm-6">
                                        <input type="password"  name="inputPassword" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                        <div class="help-block">Mínimo 6 caracteres</div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="password" name="inputPasswordConfirm" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div style="clear:both;">

                                <h4>Dirección Actual</h4>
                                <div class="form-group col-sm-12"">
                                    <label class="sr-only control-label" for="form-street">Calle</label>
                                    <input type="text" name="form-street" placeholder="Calle" class="form-street form-control" id="form-street" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12"">
                                    <label class="sr-only control-label" for="form-localidad">Localidad</label>
                                    <input type="text" name="form-localidad" placeholder="Localidad" class="form-localidad form-control" id="form-localidad" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-provincia">Provincia</label>
                                    <input type="text" name="form-provincia" placeholder="Provincia" class="form-provincia form-control" id="form-provincia" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-country">País</label>
                                    <select name="form-country" class="select form-control form-pais" id="form-pais" required>
                                        <?php
                                            require_once 'conectar.php';
                                            $sql="SELECT nombre, iso2 FROM paises";
                                            print"<option value='' disabled selected>Pais</option>";
                                            foreach ($db->query($sql) as $item) {
                                                $nombre=$item['nombre'];
                                                $iso2=$item['iso2'];
                                                print "<option value='$iso2'>$nombre</option>";
                                            }
                                        ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-postal-code">Código Postal</label>
                                    <input type="text" name="form-postal-code" placeholder="Código postal" class="form-postal-code form-control" id="form-postal-code" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-telephone">Teléfono</label>
                                    <input type="tel" name="form-telephone" placeholder="Teléfono" class="select form-telephonee form-control" id="form-telephone" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-email">Email</label>
                                    <input type="email" name="form-email" placeholder="Email..." class=" select form-email form-control form-control" id="form-email" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <h4>Datos Académicos</h4>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only" for="form-prom-year">Promoción Año</label>
                                    <input type="text" name="form-prom-year" placeholder="Promoción añó" class="form-prom-year form-control " id="form-prom-year" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <h5>Etapas realizadas en el colegio:</h5>
                                <div class="form-group col-sm-12">
                                    <div class=" select checkbox-inline form-control" >
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="form-ed-infantil">Ed. Infantil</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="form-ed-primaria">Ed. Primaria</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="form-ed-sec">ESO</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="form-ed-bach">Bachillerato</label>
                                        <label class="checkbox-inline"><input type="checkbox" value="" name="form-ed-bach-int">Bachillerato Internacional</label>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-other-studies">Estudios realizados fuera del colegio</label>
                                    <input type="text" name="form-other-studies" placeholder="Estudios realizados fuera del colegio" class="form-other-studies form-control" id="form-other-studies" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <h4>Datos Profesionales</h4>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-company">Empresa</label>
                                    <input type="text" name="form-company" placeholder="Empresa" class="form-company form-control" id="form-company" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-position">Cargo</label>
                                    <input type="text" name="form-position" placeholder="Cargo" class="form-position form-control" id="form-position" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-job-region">Provincia</label>
                                    <input type="text" name="form-job-region" placeholder="Provincia" class="form-job-region form-control" id="form-job-region" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only control-label" for="form-job-country">País</label>
                                    <select name="form-country" class="select form-control" id="form-job-country" placeholder="Pais" required>
                                        <?php
                                        require_once 'conectar.php';
                                        $sql="SELECT nombre, iso2 FROM paises";
                                        print"<option value='' disabled selected>Pais</option>";
                                        foreach ($db->query($sql) as $item) {
                                            $nombre=$item['nombre'];
                                            $iso2=$item['iso2'];
                                            print "<option value='$iso2'>$nombre</option>";
                                        }
                                        ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="sr-only " for="form-cv">Curriculum Vitae</label>
                                    <span class="file-input btn btn-primary btn-file col-sm-12">
                                        Browse&hellip; <input type="file" name="form-cv" id="form-cv">
                                    </span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <button type="submit" class="btn col-sm-12 ">Enviar</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
    <?php include "template/footer.php" ?>
<!-- /footer -->


<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/log_reg.js"></script>
<script src="assets/js/validator.js"></script>
<script>
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
</script>
</body>
</html>