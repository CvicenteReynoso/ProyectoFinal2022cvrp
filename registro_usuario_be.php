<?php
include('bd.php');

if(isset($_POST['enviar'])){

    $no = $_POST['nom'];
    $ap = $_POST['ape'];
    $us = $_POST['usu'];
    $co = $_POST['con'];
    
    $query= "INSERT INTO usuario(nombre, apellido, usuario, contrasena) VALUES('$no','$ap','$us','$co')";



    $veri_cor = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario='$us'" );

    if(mysqli_num_rows($veri_cor) > 0){
        echo '<script lenguage="javascript">';
    echo 'alert("¡ este usuario ya esta registrado,intenta con otro :) !")
    window.location = "index.php";
    </script>';

    exit();
    mysqli_close($conn);
    }






$resultado=mysqli_query($conn, $query);

if ($resultado) {
    echo '<script lenguage="javascript">';
    echo 'alert("¡ Te has registrado exitosamente :) !")
    window.location = "bienvenida.php";
    </script>';
    }
}
mysqli_close($conn);
?>