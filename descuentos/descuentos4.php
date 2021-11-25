<?php 
    include("con_db4.php");
    $con=conectar();

    $sql="SELECT *  FROM descuentos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pagina descuentos</title>
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
                                <form action="insertar4.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="iddescuento" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="porcentaje" placeholder="Porcentaje">
                                    <input type="text" class="form-control mb-3" name="idproducto" placeholder="id del producto">
                                    <input type="text" class="form-control mb-3" name="duracion" placeholder="Duracion">
                                    <label for="">Fecha de inicio del descuento</label>
                                    <input type="date" class="form-control mb-3" name="fecha_de_inicio" placeholder="fecha de inicio">
                                    <input type="text" class="form-control mb-3" name="clientes_elegidos" placeholder="clientes elegidos (todos,suscritos,VIP)">
                                    <input type="text" class="form-control mb-3" name="precio_final" placeholder="Precio final del producto">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Porcentaje %</th>
                                        <th>id del producto</th>
                                        <th>Duracion</th>
                                        <th>Fecha de inicio</th>
                                        <th>Clientes elegidos</th>
                                        <th>Precio final del producto</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['iddescuento']?></th>
                                                <th><?php  echo $row['porcentaje']?></th>
                                                <th><?php  echo $row['idproducto']?></th>
                                                <th><?php  echo $row['duracion']?></th>
                                                <th><?php  echo $row['fecha_de_inicio']?></th> 
												<th><?php  echo $row['clientes_elegidos']?></th>    
												<th><?php  echo $row['precio_final']?></th>    
                                                <th><a href="actualizar4.php?id=<?php echo $row['iddescuento'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delate4.php?id=<?php echo $row['iddescuento'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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