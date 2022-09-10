<?php

    $conexion = mysqli_connect("localhost", "root", "", "persona");
    
    $registros = mysqli_query($conexion, "delete from agenda where Id='$_REQUEST[Id]'");

    if($registros){
        header("Location: persona.php");
    }

    mysqli_close($conexion);
?>
