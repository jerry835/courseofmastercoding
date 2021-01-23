<?php
session_start();
include 'conexionBD.php';
$emailUser=$_POST['emailUser'];
$password=$_POST['passwordUser'];
$password=hash('sha512',$password);
 
$validar_login=mysqli_query($conexion,"SELECT *
                                      FROM usuario
                                      WHERE emailUser='$emailUser' and passwordUser='$password'");
if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']=$emailUser;
    header("location: indexOferta.php");
    exit;
}else{
    echo'
    <script>
    alert("El usuario no existe, porfavor verifique los datos introducidos.");
    window.location="indexSesion.php";
    </script>
    ';
    exit;
}
?>