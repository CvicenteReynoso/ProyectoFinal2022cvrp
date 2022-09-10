<?php

session_start();

if(isset($_SESSION['usuar'])){
    header("location: bienvenida.php");

}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/stilos.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logomax.png">
    <title>Login</title>
</head>
<body>
    <main>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta prueba?</h3>
                <p> inicia sesion para entrar en la pagina</p>
                <button id="btn__iniciar-sesion">Iniciar Sesion</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aun no tienes una cuenta?</h3>
                <p> Registrate para entrar en la pagina</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>
        <div class="contenedor__login-register">
            <form action="assets/php/val_usu_log.php" method="post" class="formulario__login">
                <h2>Iniciar Sesion</h2>
                <input type="text"  placeholder="Usuario" id="" name="usuario">
                <input type="password"  placeholder="Contraseña" id="" name="contra">
                <button>Entrar</button>
            </form>

            <form action="assets/php/registro_usuario_be.php" method="post" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text"  placeholder="Nombre" name="nom">
                <input type="text"  placeholder="Apellido" name="ape">
                <input type="text"  placeholder="Usuario" name="usu">
                <input type="password"  placeholder="Contraseña" name="con">
                <button name="enviar">Registrarse</button>
            </form>
        </div>
    </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>