<?php
include('bd.php');

if(isset($_POST['enviar'])){


$name=$_POST['nom'];
$celu=$_POST['tel'];
$email=$_POST['ema'];
$msj=$_POST['men'];


$query="INSERT INTO mensajes(nombre, telefono, correo, mensaje) VALUES ('$name','$celu','$email','$msj')";

$resultado=mysqli_query($conn, $query);

if ($resultado) {
    echo '<script lenguage="javascript">';
    echo 'alert("¡ Mensaje enviado exitosamente :) !")
    window.location = "contactenos.php";
    </script>';
    }
}
mysqli_close($conn);
?>