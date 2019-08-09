<?php

$server = "localhost";
$user = "root";
$pass = "racso";
$base = "proofs";

$nombre = $_POST["nombre"];
$tel   = $_POST["tel"];
$email  = $_POST["email"];
$hora = $_POST["hora"];

$conexion = mysqli_connect( $server, $user, $pass ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $base ) or die ( "Ups! no se ha podido conectar a la base de datos" );

/*
$destino="racsorednaxel@gmail.com, alex.sandoval@socialitsv.com";


$total =  "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTeléfono: " . $tel . "\nHora Seleccionada: " .$hora;
mail($destino,"Formulario prueba", $total);
*/

?> 

