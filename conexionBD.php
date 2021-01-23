<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
$conexion=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
/*Codigo Para comprobar coneccion*/
/*
if($conexion){
    echo'conectado a la base de datos';
}else{
    echo 'no se ha podido conectar a la base de datos.';

}*/
?>