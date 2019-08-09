<?php
include('conect.php');
    
$query = "insert into datos(nombre, tel, email, hora) values('$nombre','$tel','$email','$hora')";
$insertar = mysqli_query($conexion, $query);
?>