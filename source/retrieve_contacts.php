<?php
//var_dump($_SESSION);
$sql="SELECT *  FROM socios ";
foreach ($db->query($sql) as $item) {
    //var_dump($item);
    $nombre=$item['NOMBRE'];
    $apellidos=$item['APELLIDOS'];
    $cargo=$item['CARGO_EMPRESA'];
    $empresa=$item['NOM_EMPRESA'];
    $prom=$item['ANNO_PROM'];
    $mail = $item['EMAIL'];
    $fotoNum=rand(1,3);
    print "<div class=\"col-sm-6\">
                            <div class=\"panel\">
                                <div class=\"panel-body p-t-10\">
                                    <div class=\"media-main\">
                                        <a class=\"pull-left\" href=\"#\">
                                            <img class=\"thumb-lg img-circle bx-s\" src=\"http://bootdey.com/img/Content/user_$fotoNum.jpg\" alt=\"\">
                                        </a>
                                        <div class=\"pull-right btn-group-sm\">
                                            <a href=\"#\" class=\"btn btn-success tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Edit\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </a>
                                            <a href=\"#\" class=\"btn btn-danger tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Delete\">
                                                <i class=\"fa fa-close\"></i>
                                            </a>
                                        </div>
                                        <div class=\"info\">
                                            <h4>$nombre $apellidos</h4>
                                            <p class='text - muted\\''>$cargo at $empresa</p>
                                            <p class='text - muted\\'>Promoción: $prom</p>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <hr>
                                    <ul class=\"social-links list-inline p-b-10\">
                                        <li>
                                            <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                                        </li>
                                        <li>
                                            <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                                        </li>
                                        <li>
                                            <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
                                        </li>
                                        <li>
                                            <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Skype\"><i class=\"fa fa-skype\"></i></a>
                                        </li>
                                        <li>
                                            <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"mailto:$mail?Subject=Contact: Asociación Antiguos Alumnos Colegio Brains%20again\" target = \"_top\"\";\" data-original-title=\"Message\"><i class=\"fa fa-envelope-o\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>";
}
?>