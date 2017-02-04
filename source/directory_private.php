<?php
require_once ("restringido.php");
require_once ("conectar.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include "template/head.php"; ?>
        <link href="assets/css/contacts.css" rel="stylesheet">

    </head>

    <body>

        <!-- navigation panel -->
            <?php include "template/header.php"; ?>
        <!-- Top content -->
            <div class="top-content">
                <div class="container bootstrap snippet">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-body p-t-0 text-center">
                                    <div class="input-group">
                                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php include "retrieve_contacts.php"?>
                    </div>
                </div>
            </div>
        <!-- /Top content -->

        <!-- footer -->
            <?php include "template/footer.php"; ?>
        <!-- /footer -->

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/log_reg.js"></script>
        <script src="assets/js/contacts.js"></script>

        <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>