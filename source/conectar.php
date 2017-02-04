<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass="dahdah95";
$dbname="3acolegiobrains";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $errror) {
    die("Error conexion BBDD" . $errror->getMessage());
}
?>