<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("por favor debes iniciar sesion");
    window.location="indexSesion.php";
    </script>
    ';
    //header("location: iniciosesion.php");
    session_destroy();
    die;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="./estilos/principalOferta.css" rel="stylesheet" type="text/css">
        <title> Mi escuelita </title>
    </head>

    <body>
        <div id = "oferta">
            <header>
                <h1> Courses of Master Coding </h1>
            </header>

            <div id = "cuerpo">
                
                    <div id="nombre">
                        <center>
                        <h1 style="color:rgb(13, 13, 14);">No solo son cursos, es tu plan de estudio personal</h1>
                        </center>
                        <center>
                        <h1 style="color:rgb(0, 0, 0);">¿Que tipo de cursos te interesan? </h1>
                        </center>
                        <a href="#">Hola,<b><?php echo htmlspecialchars($_SESSION["usuario"]); ?></b><span class="icon-cancel-circle"></span></a>
                        <a href="cambiarPassword.php">Cambia tu contraseña</a>
                        <a href="cerrarSesion.php" >Cierra la sesión</a>
                    </div>
                
                
                    <div id = "c++" class = "imagenc">
                        <a title="c" href="indexCurso_C.html"><p id="f"><u>CCC</u></p></a>  
                    </div>

                    <div id = "java" class="imagenjava">
                        <a title="c" href="indexCurso_Java.html"><p id="f"><u>CCC</u></p></a>
                    </div>

                    <div id = "python" class = "imagenpy">
                        <a title="c" href="indexCurso_Python.html"><p id="f"><u>CCC</u></p></a>        
                    </div>

                    <div id = "php" class = "imagenphp">
                        <a title="c" href="indexCurso_PHP.html"><p id="f"><u>CCC</u></p></a>
                    </div>

                    <div id = "sql" class = "imagensql">
                        <a title="c" href="indexCurso_C.html"><p id="f"><u>CCC</u></p></a>
                    </div>
                
                </div>
        </div>
    </body>
</html>