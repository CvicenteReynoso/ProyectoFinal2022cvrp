<?php

session_start();

if(!isset($_SESSION['usuar'])){


  echo '<script lenguage="javascript">';
    echo 'alert("¡ Porfavor primero debes iniciar sesion !")
    window.location = "../../index.php";
    </script>';
  session_destroy();
  die();
}



?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sty-msj.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logomax.png">
    <title>La Estacion</title>
</head>

<body>

    <div>
        <div class="row">
            <div class="col-12 link" align="center">
                <a href="../../tiendas.php" style="text-decoration: none; color: rgb(255, 255, 255);">
                    <div>
                        <h1>Regresar </h1>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15444.3073883425!2d-90.52453551063589!3d14.594696824209834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3184557148b%3A0xd3dd52e65a8883d3!2sTIENDA%20MAX%20LA%20ESTACI%C3%93N!5e0!3m2!1ses-419!2sgt!4v1661961634916!5m2!1ses-419!2sgt" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>

</html>