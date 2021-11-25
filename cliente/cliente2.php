<?php 
    include("con_db2.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pagina cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar2.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="idcliente" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">
                                    <input type="email" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="password" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <leabel>Fecha de nacimiento</leabel><br>
                                    <input type="date" class="form-control mb-3" name="fecha_nac" placeholder="Fecha_nac">
                                    <input type="text" class="form-control mb-3" name="genero" placeholder="Genero (M-masculino,F-femeneino,O-otro)">
                                    <leabel>Fecha de registro</leabel><br>
                                    <input type="date" class="form-control mb-3" name="fecha_reg" placeholder="fecha">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Contraseña</th>
                                        <th>Telefono</th>
                                        <th>Fecha_nac</th>
                                        <th>Genero</th>
                                        <th>Fechareg</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idcliente']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['contraseña']?></th> 
												<th><?php  echo $row['telefono']?></th>    
												<th><?php  echo $row['fecha_nac']?></th>
                                                <th><?php  echo $row['genero']?></th>    
                                                <th><?php  echo $row['fecha_reg']?></th>        
                                                <th><a href="actualizar2.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delate2.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>