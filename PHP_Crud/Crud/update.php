<?php

    $conexion = mysqli_connect("localhost", "root", "", "persona");
    
    $registros = mysqli_query($conexion, "update agenda set Nombre='$_REQUEST[Nombre]',Apellido='$_REQUEST[Apellido]'
    ,Direccion='$_REQUEST[Direccion]',Telefono='$_REQUEST[Telefono]' where Id=$_REQUEST[Id]  ");

    if($registros){
        header("Location: persona.php");
    }
?>