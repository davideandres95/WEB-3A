<?php
    //var_dump($_SESSION);
    $username=$_SESSION['username'];
    $sql="SELECT *  FROM socios WHERE NIF='$username'";
    foreach ($db->query($sql) as $item) {
        //var_dump($item);
        $mail = $item['EMAIL'];
        print "mailto:$mail?Subject=Contact: Asociación Antiguos Alumnos Colegio Brains%20again\" target=\"_top\"";
    }
?>
