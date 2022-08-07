<?php

session_start();

include ('bd.php');

$usua =$_POST['usuario'];
$cont =$_POST['contra'];

$val_log = mysqli_query ($conn, "SELECT * FROM usuario WHERE usuario='$usua' and contrasena='$cont'");


if (mysqli_num_rows($val_log) > 0) {
    $_SESSION['usuar'] = $usua;
    header("location: bienvenida.php");
    exit();
}else {
    echo '<script lenguage="javascript">';
    echo 'alert("¡ usuario y/o contraseña incorrectos verifique sus datos :( !")
    window.location = "index.php";
    </script>';
    exit();
}

?>