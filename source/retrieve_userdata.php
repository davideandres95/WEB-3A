<?php
    //var_dump($_SESSION);
    $username=$_SESSION['username'];
    $sql="SELECT *  FROM socios WHERE NIF='$username'";
    foreach ($db->query($sql) as $item) {
    //var_dump($item);
    $nombre=$item['NOMBRE'];
    $apellidos=$item['APELLIDOS'];
    $cargo=$item['CARGO_EMPRESA'];
    $empresa=$item['NOM_EMPRESA'];
    $prom=$item['ANNO_PROM'];
    print "<h4>$nombre $apellidos</h4>
    <p class=\"text-muted\">$cargo at $empresa</p>
    <p class=\"text-muted\">Promoción: $prom</p>";
    }
?>