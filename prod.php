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
  <link rel="stylesheet" href="assets/css/card.css">
  <link rel="stylesheet" href="assets/css/card-btn.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logomax.png">
  <title>Productos y servicios</title>
</head>

<body>
  <table align="center" class="default" width="100%" border="0">
    <!--icono -->
    <tr align="center">


      <td width="33.33%">
        <a href="prod.php" style="text-decoration: none; color: rgb(255, 255, 255);">
          <div width="100%" height="100%" style="background-color: #5800FF;">
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



  <h1 style="color: white; margin-left: 20px;">Productos / Servicios</h1>
  <br>



  <div class="container">
    <div class="row">

      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/1.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="assets/pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>


      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/2.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>


      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/3.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>



      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/4.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>

    </div>








    <br>
    <br>












    <div class="row">

      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/5.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>


      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/6.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>


      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/7.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>



      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/8.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>

    </div>









    <br>
    <br>




    <div class="row">

      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/9.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>


      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/10.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>


      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/11.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
        </div>

      </div>



      <div class="col-3">

        <div class="card">
          <div class="contenedor" align="center">
            <figure>
              <img src="assets/pro-images/12.png" alt="Denim Jeans" style="width:100%">
              <div class="capa">
                <h3>HUAWEI Buds</h3>
                <p>Sonido en Alta Resolución, Ultra Ligeros, Cómodos y con Cancelación Activa de Ruido, Open-Fit 2.0</p>
              </div>
            </figure>
          </div>
          <h3>HUAWEI Buds</h3>
          <p class="price">Q 999.99</p>
          <p>
            <a href="pag_prod/prod1.html"><button>Mas Informacion</button></a>
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