<?php

    $conexion = mysqli_connect("localhost", "root", "", "persona");
    
    $registros = mysqli_query($conexion, "insert into agenda(Nombre,Apellido,Direccion,telefono)
    values ('$_REQUEST[Nombre]','$_REQUEST[Apellido]','$_REQUEST[Direccion]','$_REQUEST[Telefono]')");

    if($registros){
        header("Location: persona.php");
    }

    mysqli_close($conexion);
?>
