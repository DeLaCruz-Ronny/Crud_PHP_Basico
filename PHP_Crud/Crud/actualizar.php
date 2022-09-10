<?php

    $conexion = mysqli_connect("localhost", "root", "", "persona");
    
    $registros = mysqli_query($conexion, "select * from agenda where Id = '$_REQUEST[Id]'");

    $row = mysqli_fetch_array($registros);

    mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/0e551066ae.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
    <div class="col-md-3">
        <h1>Formulario</h1>
            <form action="update.php" method="POST">
                <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre'] ?>" id="">
                <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido" value="<?php echo $row['Apellido'] ?>" id="">
                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion'] ?>" id="">
                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono'] ?>" id="">
                <input type="submit" class="btn btn-primary" value="Actualizar">
            </form>
    </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>