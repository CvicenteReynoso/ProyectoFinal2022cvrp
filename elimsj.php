<?php
include("bd.php");
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $query="DELETE FROM mensajes WHERE nomensaje='$id'";
    $resul=mysqli_query($conn, $query);
    if (!$resul){
        die("Error al eliminar");
    }
    header("location:mensajes.php");
}
?>