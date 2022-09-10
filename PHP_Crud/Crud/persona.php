
<?php

    $conexion = mysqli_connect("localhost", "root", "", "persona");
    
    $registros = mysqli_query($conexion, "select Id,Nombre,Apellido,Direccion,Telefono from agenda")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-Agenda</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/0e551066ae.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Formulario</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" id="">
                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido" id="">
                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" id="">
                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" id="">

                    
                    <input type="submit" class="btn btn-primary" value="Agregar">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($registros)){
                        ?>
                            <tr>
                                <th><?php echo $row['Id'] ?></th>
                                <th><?php echo $row['Nombre'] ?></th>
                                <th><?php echo $row['Apellido'] ?></th>
                                <th><?php echo $row['Direccion'] ?></th>
                                <th><?php echo $row['Telefono'] ?></th>
                                <th>
                                    <a href="actualizar.php?Id=<?php echo $row['Id'] ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a> | 
                                    <a href="delete.php?Id=<?php echo $row['Id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </th>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>