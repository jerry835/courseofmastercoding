<?php

session_start();
if(isset($_SESSION['usuario'])){
  header("location:indexOferta.php");
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="./estilos/principalSecion.css" rel="stylesheet" type="text/css">
        <title> Acceder </title>
    </head>

    <body>
        <div id = "iniciarSecion">
            <header>
                <h1> Courses of Master Coding </h1>
            </header>

            <div id = "cuerpo">
                <div id = "rectangulo">
                    <div id="logo" class="logo">

                    </div>
                    <form action="loginBD.php" method="post">
                        <h1> Acceder </h1>
                        <p> Correo: 
                            <input type="email" placeholder="example@example.com" name="emailUser">
                        </p>
                        <p> Contraseña: 
                            <input type="password" placeholder="contrasena" name="passwordUser">
                        </p>
                        <input type="submit" value="Ingresar">
                        <a href="indexRegistro.php" class="btnRegistrar">Crear Cuenta</a>
                        <p> ¿Olvidaste tu contraseña? </p>
                    </form>
                </div>
            </div>

            <footer>
                <pre>Derechos reservados</pre>
            </footer>
        </div>
    </body>
</html>
