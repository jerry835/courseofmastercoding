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
        <link href="./estilos/principalRegistro.css" rel="stylesheet" type="text/css">
        <title> Registro</title>
    </head>

    <body>
        <div id = "iniciarRegistro">
            <header>
                <div id="logo" class="logo">
                </div>
                <h1> Courses of Master Coding </h1>
            </header>

            <div id = "cuerpo">
                <div id = "rectangulo">
                    <h1> Registrarte </h1>
                    <p> Es rapido y facil</p>
                    <hr>

                    <form action="registroBD.php" method="post">
                        <p> Nombre: 
                            <input type="text" placeholder="Nombre" name="nombreUser">
                            <input type="text" placeholder="Apellido" name="apellidoUser">
                        </p>

                        <p> Correo electronico:
                            <input type="email" placeholder="ejemplo@ejemplo.com" name="emailUser">
                        </p>

                        <p> Contrasena: 
                            <input type="password" placeholder="Contrasena" name="passwordUser">
                        </p>

                        <p> Sexo: 
                            <select name="sexoUser" id="sexo" >
                                <option value="Hombre"> Hombre </option>
                                <option value="Mujer"> Mujer </option>
                            </select>
                        </p>

                        <p> Cumpleanos:
                            <input type="date" placeholder="Dia" name="cumpleUser">
                        </p>

                        <p id="p2"> Al hacer clic en "Registrarte", aceptas nuestras Condiciones, la Política de datos y la Política de cookies. </p>
                        <input type="submit" value="Registrarse">
                        <div >
                            <a  href="indexSesion.php" class="btnRegistrar">Ya tengo una Cuenta</a>
                        </div>
                    </form>
                </div>
            </div>

            <footer>
                <pre>Derechos reservados</pre>
            </footer>
        </div>
    </body>
</html>
