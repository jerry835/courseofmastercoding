<?php
include 'conexionBD.php';

//guardamos el conteido recibico de indexRegistro.html en las variables//////////////////////////////////////////////// 
$nombreUser=$_POST['nombreUser'];
$apellidosUser=$_POST['apellidoUser'];
$emailUser=$_POST['emailUser'];
$pass=$_POST['passwordUser'];
$sexoUser=$_POST['sexoUser'];
$fechaCumple=$_POST['cumpleUser'];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//encriptamiento de contraseña/////////////////////////////////////////////////////////////////////////////////////////
$passwordUser=hash('sha512', $pass);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//evitar que se guarden registro en blanco/////////////////////////////////////////////////////////////////////////////
if($nombreUser == '' || $apellidosUser=='' || $emailUser==''|| $pass==''|| $sexoUser=='' || $fechaCumple=='')
{
    echo'
    <script>
    alert("Campos en blanco, introdusca informacion.");
    window.location="indexRegistro.html";
    </script>
    ';
    exit;
}else{
   
//verificar que el correo no se repita en la base de datos//////////////////////////////////////////////////////////////
$verificar_correo=mysqli_query($conexion,"SELECT * 
FROM usuario
WHERE emailUser='$emailUser'");

if(mysqli_num_rows($verificar_correo)>0){
    echo'
    <script>
    alert("Este correo ya esta Registrado, Intenta con otro diferente Por favor.");
    window.location="indexRegistro.html";
    </script>
    ';
    exit();
}
//////////////////insertar valores en la base de datos//////////////////////////////////////////////////////////////////
$query="INSERT INTO usuario(nombreUser,apellidosUser,sexoUser,emailUser,FechaCumpleUser,passwordUser)
VALUES ('$nombreUser','$apellidosUser','$sexoUser','$emailUser','$fechaCumple','$passwordUser')";
$ejecutar=mysqli_query($conexion,$query);

if($ejecutar){
    echo'
    <script>
    alert("Usuario almacenado Exitosamente");
    window.location="indexSesion.php";
    </script>
    ';
}else{
    echo'
    <script>
    alert("Intentalo de nuevo, usuario no Registrado");
    window.location="indexRegistro.html";
    </script>
    ';
}
/////////////////////////////


}

?>