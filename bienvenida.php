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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/efectimg.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logomax.png">

    <title>Bienvenida</title>
  </head>
  <body>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img_bie/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img_bie/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img_bie/3.png" class="d-block w-100" alt="...">
          </div>
        </div>
       <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>



      <table align="center" class="default" width="100%"  border="0" ><!--icono -->
        <tr align="center">


          <td width="33.33%">
          <a href="prod.php" style="text-decoration: none; color: rgb(255, 255, 255);">
              <div width="100%" height="100%" style="background-color: #D90000">
                <h1>Productos / Servicios </h1>
              </div>
          </a>
          </td>
          <td width="33.33%">
            <a href="tiendas.php" style="text-decoration: none; color: aliceblue;">
                <div width="100%" height="100%" style="background-color: #0096FF;">
                  <h1>Tiendas</h1>
                </div>
            </a>
            </td>
            <td width="33.33%">
              <a href="contactenos.php" style="text-decoration: none; color: aliceblue;">
                  <div width="100%" height="100%" style="background-color: #00D7FF;">
                    <h1>Contactenos</h1>
                  </div>
              </a>
              </td>
        </tr>
      </table>

      <br>
      <div class="ofertas">
        <h1>Ofertas del mes</h1>
          <div class="row">


            <div class="col-6" >
              <figure>
              <img width="100%" height="100%" src="assets/img_bie/grx4.png" alt="">
              <div class="capa capa1">
                <h3>Galaxy S22 5G 256GB</h3>
                <p>Lo mejor sucede después de que anochece. Captura la imagen con las épicas actualizaciones tecnológicas de nuestra cámara de nivel profesional. El sensor grande de píxeles amplía los píxeles para atraer la luz mientras que el cristal súper transparente reduce el resplandor de la lente, todo para que las fotos y los videos nocturnos salgan tan claros como el día.
                  01Sensor de píxeles grandes</p>
              </div>
            </figure>
            </div>

            <div class="col-6">
              <div class="row">
                <div class="col-6">
                  <figure>
                  <img width="100%" height="100%" src="assets/img_bie/gr1.png" alt="">
                  <div class="capa">
                    <h3>Galaxy Buds2</h3>
                    <p>- Calidad de sonido que enriquece cada viaje de audio. <br>
- Los dos micrófonos ayudan a bloquear el sonido no deseado. <br>
- Los auriculares más livianos que hemos creado.</p>
                  </div>
                </figure>
                </div>
                <div class="col-6">
                  <figure>
                  <img width="100%" height="100%" src="assets/img_bie/gr2.png" alt="">
                  <div class="capa">
                    <h3>Galaxy Z Fold4</h3>
                    <p>Desde adentro hacia afuera, el Galaxy Z Fold4 está
                       hecho con materiales que no solo son impresionantes, sino que también
                        resisten los golpes y los tropiezos de la vida.</p>
                  </div>
                  </figure>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-12">
                  <figure>
                  <img width="100%" height="100%" src="assets/img_bie/grx2.jpg" alt="">
                  <div class="capa capa1">
                    <h3>Neo QLED</h3>
                    <p>Los detalles más finos con tecnología Quantum Matrix Technology
                        Pro te permiten profundizar en la acción. El Neural Quantum Processor
                        8K también utiliza la IA para aumentar el nivel de contraste
</p>
                  </div>
                  </figure>
                </div>
              </div>
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
        <td width="3%%">
            
        </td>
    </tr>
</table>



      <br>

      <div style="background-color: #0096FF; color: rgb(255, 255, 255);" align="center">
        <div class="row">
          <div class="col-6" width="50%" align="left" >
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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>