<?php
$usuario  = "root"; //  	id17525820_usuario
$password = "";     // BBTwYsjL8UT%+m%h
$servidor = "localhost";    //localhost
$basededatos = "practicas"; // id17525820_practicas
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

?>

