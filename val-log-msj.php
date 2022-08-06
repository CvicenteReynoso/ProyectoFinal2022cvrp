<?php
$num1=$_POST['usu'];
$num2=$_POST['contra'];


if ($num1 == "admin" && $num2=="admin") {
    echo '<script lenguage="javascript">';
    echo 'alert("¡ BIENVENIDO :) !")
    window.location = "mensajes.html";
    </script>';
} else {
    echo '<script lenguage="javascript">';
    echo 'alert("¡ Usuario o/y contraseña incorrecto :( !")
    window.location = "loginmsj.html";
    </script>';
}
?>