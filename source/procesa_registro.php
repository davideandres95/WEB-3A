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
                                    <h3>Resultado registro</h3>
                                    <p>Muchas gracias por unirte a la Asociación</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                    <?php
                                    require_once 'conectar.php';

                                    ini_set('display_errors', 'On');
                                    error_reporting(E_ALL);

                                    //var_dump($_POST);

                                    $sql_insert="INSERT INTO `socios` (NOMBRE, APELLIDOS, FEC_NAC, NIF, PASSWORD,
                                                             DIRECCION, LOCALIDAD, PROVINCIA, PAIS, COD_POSTAl, TELEFONO, EMAIL,
                                                             ANNO_PROM, OTROS_ESTUDIOS, ED_INFANTIL, ED_PRIMARIA, ED_SEC, BACH, BACH_INT,
                                                             TIPO_SOCIO, NOM_EMPRESA, CARGO_EMPRESA, PROV_EMPRESA, PAIS_EMPRESA, CV)"."
                                                             VALUES(:NOMBRE, :APELLIDOS, :FEC_NAC, :NIF, :PASSWORD, :DIRECCION,
                                                              :LOCALIDAD, :PROVINCIA, :PAIS, :COD_POSTAL, :TELEFONO, :EMAIL, :ANNO_PROM,
                                                              :OTROS_ESTUDIOS, :ED_INFANTIL, :ED_PRIMARIA, :ED_SEC, :BACH, :BACH_INT, :TIPO_SOCIO,
                                                              :NOM_EMPRESA, :CARGO_EMPRESA, :PROV_EMPRESA, :PAIS_EMPRESA, :CV)";

                                    $NOMBRE=isset($_REQUEST['form-first-name']) ? $_REQUEST['form-first-name']:'';
                                    $APELLIDOS=isset($_REQUEST['form-last-name']) ? $_REQUEST['form-last-name']:'';
                                    $FEC_NAC=isset($_REQUEST['form-birth-date']) ? $_REQUEST['form-birth-date']:'';
                                    $NIF=isset($_REQUEST['form-id']) ? $_REQUEST['form-id']:'';
                                    $PASSWORD=isset($_REQUEST['inputPassword']) ? $_REQUEST['inputPassword']:'123456';
                                    $DIRECCION=isset($_REQUEST['form-street']) ? $_REQUEST['form-street']:'';
                                    $LOCALIDAD=isset($_REQUEST['form-localidad']) ? $_REQUEST['form-localidad']:'';
                                    $PROVINCIA=isset($_REQUEST['form-provincia']) ? $_REQUEST['form-provincia']:'';
                                    $PAIS=isset($_REQUEST['form-country']) ? $_REQUEST['form-country']:'';
                                    $COD_POSTAL=isset($_REQUEST['form-postal-code']) ? $_REQUEST['form-postal-code']:'';
                                    $TELEFONO=isset($_REQUEST['form-telephone']) ? $_REQUEST['form-telephone']:'';
                                    $EMAIL=isset($_REQUEST['form-email']) ? $_REQUEST['form-email']:'';
                                    $ANNO_PROM=isset($_REQUEST['form-prom-year']) ? $_REQUEST['form-prom-year']:'';
                                    $OTROS_ESTUDIOS=isset($_REQUEST['form-other-studies']) ? $_REQUEST['form-other-studies']:'';
                                    $ED_INFANTIL=isset($_REQUEST['form-ed-infantil']) ? $_REQUEST['form-ed-infantil']:'';
                                    $ED_PRIMARIA=isset($_REQUEST['form-ed-primaria']) ? $_REQUEST['form-ed-primaria']:'';
                                    $ED_SEC=isset($_REQUEST['form-ed-sec']) ? $_REQUEST['form-ed-sec']:'';
                                    $BACH=isset($_REQUEST['form-ed-bach']) ? $_REQUEST['form-ed-bach']:'';
                                    $BACH_INT=isset($_REQUEST['form-ed-bach-int']) ? $_REQUEST['form-ed-bach-int']:'';
                                    $NOM_EMPRESA=isset($_REQUEST['form-company']) ? $_REQUEST['form-company']:'';
                                    $CARGO_EMPRESA=isset($_REQUEST['form-position']) ? $_REQUEST['form-position']:'';
                                    $PROV_EMPRESA=isset($_REQUEST['form-job-region']) ? $_REQUEST['form-job-region']:'';
                                    $PAIS_EMPRESA=isset($_REQUEST['form-job-country']) ? $_REQUEST['form-job-country']:'';
                                    $CV=isset($_REQUEST['form-cv']) ? $_REQUEST['form-cv']:'';
                                    var_dump($_REQUEST);
                                    try{
                                        $sentencia=$db->prepare($sql_insert);
                                        $sentencia->execute(array(
                                                'NOMBRE'=>$NOMBRE,
                                                'APELLIDOS'=>$APELLIDOS,
                                                'FEC_NAC'=>$FEC_NAC,
                                                'NIF'=>$NIF,
                                                'PASSWORD'=>$PASSWORD,
                                                'DIRECCION'=>$DIRECCION,
                                                'LOCALIDAD'=>$LOCALIDAD,
                                                'PROVINCIA'=>$PROVINCIA,
                                                'PAIS'=>$PAIS,
                                                'COD_POSTAL'=>$COD_POSTAL,
                                                'TELEFONO'=>$TELEFONO,
                                                'EMAIL'=>$EMAIL,
                                                'ANNO_PROM'=>$ANNO_PROM,
                                                'OTROS_ESTUDIOS'=>$OTROS_ESTUDIOS,
                                                'ED_INFANTIL'=>$ED_INFANTIL,
                                                'ED_PRIMARIA'=>$ED_PRIMARIA,
                                                'ED_SEC'=>$ED_SEC,
                                                'BACH'=>$BACH,
                                                'BACH_INT'=>$BACH_INT,
                                                'TIPO_SOCIO'=>1,
                                                'NOM_EMPRESA'=>$NOM_EMPRESA,
                                                'CARGO_EMPRESA'=>$CARGO_EMPRESA,
                                                'PROV_EMPRESA'=>$PROV_EMPRESA,
                                                'PAIS_EMPRESA'=>$PAIS_EMPRESA,
                                                'CV'=>$CV,
                                            )
                                        );
                                    }
                                    catch(PDOException $error) {
                                        print "ERROR";
                                    }
                                    ?>
                                    <p>Haz<a href="log_reg.php" class="text-center">login</a> para acceder.</p>
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
    <!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
    <![endif]-->

    </body>

</html>

