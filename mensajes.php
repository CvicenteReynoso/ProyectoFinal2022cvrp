<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sty-msj.css">
    
    <title>Hello, world!</title>
  </head>
  <body>




  <div style="background-color: #0096FF; color: rgb(255, 255, 255);" align="center">
        <div class="row" >
          <div class="col-4" width="50%" align="center" style="background-color: #5800FF;">
          <a href="prod.html" style="text-decoration: none; color: rgb(255, 255, 255);">
          <div>
                <h1>Inicio </h1>
              </div>
          </a>
          </div>
          <div class="col-4" width="25%" align="center" style="background-color: #0096FF;">

          <a href="tiendas.html" style="text-decoration: none; color: rgb(255, 255, 255);">
          <div>
                <h1> Tiendas </h1>
              </div>
          </a>


          </div>
          <div class="col-4" width="25%" align="center" style="background-color: #00D7FF;">


          <a href="contactenos.php" style="text-decoration: none; color: rgb(255, 255, 255);">
          <div>
                <h1> Contactenos </h1>
              </div>
          </a>

          </div>
        </div>
      </div>



      <table width="100%">
    <tr align="right">
        <td width="30%">
        <h1 style="color: white; margin-left: 5px;">Mensajes Recibidos</h1>
        </td>
        <td width="55%">
            
        </td>
        <td width="5%">
        
            <a href="pdf.php" >
<center><img width="80px"src="assets/images/pdf.ico" alt="10px"></center>
</a>
        </td>
        <td width="10%%">
            
        </td>
    </tr>
</table>


      <div class="col line" style="background-color: #1d373d; border-radius: 20px;">



<br>
    <table>
  <tr style="color: none;">
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Mensaje</th>
    <th>ACCIONES</th>
  </tr>

  <?php
     include('bd.php');
     $query="SELECT * FROM mensajes";
     $resultados=mysqli_query($conn, $query);
     while($row=mysqli_fetch_array($resultados)){ ?>
     
       <tr>
            <td style="color: rgb(153, 253, 161); font-size: 30px;"><?php echo $row['nombre']?> </td>
            <td style="color: rgb(153, 253, 161); font-size: 30px;"><?php echo $row['telefono']?> </td>
            <td style="color: rgb(153, 253, 161); font-size: 30px; "><?php echo $row['correo']?> </td>
            <td style="color: rgb(153, 253, 161); font-size: 15px;"><?php echo $row['mensaje']?> </td>

            <td>

              <script>
                function enviar() {
                let text = "¿Esta seguro de eliminar este dato?";
                if (confirm(text) == true) {
                  alert("Dato eliminado");
                  return true;
                } else {
                  return false
                }
                }
              </script>

              <a onclick="return enviar()" href="cli_eliminar.php?id=<?php echo $row['DPI_CLIENTE']; ?>">
              <img src="assets/images/eliminar1.ico" width="40px"></a>
            </td>
       </tr>
       <?php } ?>
     </table> 
     <br>

     
         </div>








    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
