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

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style-tiendas.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logomax.png">
  <title>Tiendas</title>
</head>

<body>
  <table align="center" class="default" width="100%" border="0">
    <!--icono -->
    <tr align="center">


      <td width="33.33%">
        <a href="bienvenida.php" style="text-decoration: none; color: rgb(255, 255, 255);">
          <div width="100%" height="100%" style="background-color: #5800FF;">
            <h1>Inicio </h1>
          </div>
        </a>
      </td>
      <td width="33.33%">
        <a href="tiendas.php" style="text-decoration: none; color: rgb(255, 255, 255);">
          <div width="100%" height="100%" style="background-color: #5800FF;">
            <h1>Tiendas </h1>
          </div>
        </a>
      </td>
      <td width="33.34%">
        <a href="contactenos.php" style="text-decoration: none; color: aliceblue;">
          <div width="100%" height="100%" style="background-color: #0096FF;">
            <h1>Contactenos</h1>
          </div>
        </a>
      </td>
    </tr>
  </table>

  <div class="container cont-tiendas">


    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/1.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>Gran Via Pradera</h1>
        <br>
        <ul>
          <li>23666631</li>
          <li><a href="assets/mapas/gvp.php">centro comercial gran via pradera <br> 18 Calle 27-74, Cdad. de Guatemala</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 7:00 am a 6:00 pm</li>
        </ul>
      </div>
    </div>

    <br>
    <br>

    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/3.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>Galerias la Pradera</h1>
        <br>
        <ul>
          <li>23634420</li>
          <li><a href="assets/mapas/glp.php">20 calle 26, Cdad. de Guatemala</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 10:00 am a 6:00 pm</li>
        </ul>
      </div>
    </div>

    <br>
    <br>

    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/2.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>Decima Plaza</h1>
        <br>
        <ul>
          <li>24230000</li>
          <li><a href="assets/mapas/dc.php">CC Décima Plaza <br> 10 Avenida 8, 68, Cdad. de Guatemala</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 8:00 am a 6:00 pm</li>
        </ul>
      </div>
    </div>

    <br>
    <br>

    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/4.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>Americas</h1>
        <br>
        <ul>
          <li>23670627</li>
          <li><a href="assets/mapas/am.php">Centro Comercial Parque Las 6-69,, Las Américas <br> Benemérito de las Américas</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 9:00 am a 6:00 pm</li>
        </ul>
      </div>
    </div>

    <br>
    <br>

    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/5.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>La Estacion</h1>
        <br>
        <ul>
          <li>54820218</li>
          <li><a href="assets/mapas/la.php">16 Calle 617, Cdad. de Guatemala<br> Benemérito de las Américas</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 10:00 am a 6:00 pm</li>
        </ul>
      </div>
    </div>

    <br>
    <br>

    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/6.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>Distelsa</h1>
        <br>
        <ul>
          <li>23366950</li>
          <li><a href="assets/mapas/dis.php">Diagonal 6, 13-01, Centro Comercial Oakland Mall <br> Planta Baja, Local, 132</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 10:00 am a 6:00 pm</li>
        </ul>
      </div>
    </div>

    <br>
    <br>

    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/7.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>Zona 9</h1>
        <br>
        <ul>
          <li>24230000</li>
          <li><a href="assets/mapas/z9.php">7A Avenida 12-72, Cdad. de Guatemala</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 10:00 am a 6:00 pm</li>
        </ul>
      </div>
    </div>

    <br>
    <br>

    <div class="row">
      <div class="col-6">
        <img src="assets/imgtd/8.png" alt="">
      </div>
      <div class="col-6 texto">
        <h1>Miraflores</h1>
        <br>
        <ul>
          <li>24748318</li>
          <li><a href="assets/mapas/mira.php">Cdad. de Guatemala</a></li>
          <li>info@distelsa.com.gt</li>
          <li>lunes a sabado de 10:00 am a 6:00 pm</li>
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

        <a href="assets/php/cer_se.php">
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