<?php

session_start();

if(!isset($_SESSION['usuar'])){


  echo '<script lenguage="javascript">';
    echo 'alert("¡ Porfavor primero debes iniciar sesion !")
    window.location = "index.php";
    </script>';
  session_destroy();
  die();
}



?>




<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sty-msj.css">
    <link rel="stylesheet" href="../css/sty-prods.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logomax.png">

    <title>Samsung AKG</title>
</head>

<body>




    <div style="background-color: #0096FF; color: rgb(255, 255, 255);" align="center">
        <div class="row">
            <div class="col-4" width="50%" align="center" style="background-color: #5800FF;">
                <a href="../../prod.php" style="text-decoration: none; color: rgb(255, 255, 255);">
                    <div>
                        <h1>Regresar</h1>
                    </div>
                </a>
            </div>
            <div class="col-4" width="25%" align="center" style="background-color: #0096FF;">

                <a href="../../tiendas.php" style="text-decoration: none; color: rgb(255, 255, 255);">
                    <div>
                        <h1> Tiendas </h1>
                    </div>
                </a>


            </div>
            <div class="col-4" width="25%" align="center" style="background-color: #00D7FF;">


                <a href="../../contactenos.php" style="text-decoration: none; color: rgb(255, 255, 255);">
                    <div>
                        <h1> Contactenos </h1>
                    </div>
                </a>

            </div>
        </div>
    </div>







    <div class="container cont-pro">

    <div class="row">
      <div class="col-6">
        <img src="../pro-images/4.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1 class="titulo">Samsung AKG</h1>
        <br>
        <ul>
            <li>Control de 3 botones</li>
            <li>Cable de tela.</li>
            <li>Altavoces de 2 vías.</li>
            <li>Calidad de sonido profesional por AKG.</li>
        </ul>
      </div>
    </div>
  
  </div>

  
















  <br>


<table width="100%">
    <tr align="right">
        <td width="30%">

        </td>
        <td width="52%">

        </td>
        <td width="15%">

            <a href="../php/cer_se.php">
                <button type="button" class="btn btn-danger">Cerrar Sesion</button>
            </a>
        </td>
        <td width="3%">

        </td>
    </tr>
</table>
<br>


<div style="background-color: #0096FF; color: rgb(255, 255, 255);" align="center">
    <div class="row">
        <div class="col-6" width="50%" align="left">
            <h6 style="margin-left: 20px; margin-top: 8px;">
                PBX:000000000000000000 - DIRECCION:000000000000
            </h6>
        </div>
        <div class="col-3" width="25%" align="right">
            <h6 style="margin-left: 20px; margin-top: 8px;">
                CARNÉ:2020-40116
            </h6>
        </div>
        <div class="col-3" width="25%" align="right">
            <h6 style="margin-left: 20px; margin-top: 8px;">
                NOMBRE: Carlos Vicente Reynoso Pú
            </h6>
        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>