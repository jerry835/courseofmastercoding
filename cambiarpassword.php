<?php
// Initialize the session
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
 
// Include config file
include "conexionBD.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } else{
        $new_password = trim($_POST["new_password"]);
        $passwordUser=hash('sha512', $new_password);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor confirme la contraseña.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Las contraseñas no coinciden.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $correo=$_SESSION['usuario'];
                    $resultados=mysqli_query ($conexion,"SELECT * FROM usuario where emailUser='$correo'");
                    while($consulta=mysqli_fetch_array($resultados)){
                        $consultaid=$consulta['idUser'];
        }
        $query = "UPDATE usuario SET passwordUser = '$passwordUser' WHERE idUser = '$consultaid'";
        
        $ejecutar=mysqli_query($conexion,$query);

        if($ejecutar){
            session_destroy();
            echo'
            <script>
            alert("contraseña cambiada Exitosamente, Favor de iniciar Sesión con la Nueva Contraseña. ");
            window.location="indexSesion.php";
            </script>
            ';
        }else{
            echo'
            <script>
            alert("Intentalo de nuevo, error");
            window.location="indexOferta.php";
            </script>
            ';
        }
        

    }
    
    // Close connection
    mysqli_close($conexion);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="./estilos/principalSecion.css" rel="stylesheet" type="text/css">
        <title> Recupera tu contraseña </title>
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                            <h1> Recupera tu Contraseña </h1>
                        <p> Nueva Contraseña: 
                            <input type="password" placeholder="contrasena" name="new_password" value="<?php echo $new_password; ?>">
                            <span class="help-block"><?php echo $new_password_err; ?></span>
                        </p>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <p> Repetir Contraseña: 
                                <input type="password" placeholder="contrasena" name="confirm_password">
                                <span class="help-block"><?php echo $confirm_password_err; ?></span>
                            </p>
                            <input type="submit" value="Cambiar Contrasena">
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
