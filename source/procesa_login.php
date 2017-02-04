<?php
    require_once 'conectar.php';
    $sql="SELECT NIF, PASSWORD FROM socios";
    $logins=array();
    foreach ($db->query($sql) as $item) {
        $logins[$item[0]]=$item[1];
    }
    var_dump($logins);
    function checkLogin($username, $password, $logins){
        if (!isset($username)|| !isset($password)) {
            return false;
        }
        return(array_key_exists($username, $logins)
                &&(strcmp($logins[$username], $password)==0));
    }

    $user=$_POST['form-username'];
    $pass=$_POST['form-password'];

    //VALIDACIÓN
    if(!checkLogin($user,$pass, $logins)) {
        session_destroy();
        $errorLogin = "El usuario o la contraseña son Incorrectos";
        header("Location: log_reg.php?errorLogin=$errorLogin"); //Vuelve a log_reg.php con error
    }
    else{
        //print "el login es correcto";
        session_start(); //comienza sesion
        $_SESSION['username']=$user; //guardamos datos en la sesion
        header("Location: directory_private.php"); //Redirigimos a la pagina privada
    }
?>