<?php 
    include("con_db3.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pagina producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese producto</h1>
                                <form action="insertar3.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="idempleado" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="observaciones" placeholder="Observaciones">
                                    <label for="">Caducidad</label>
                                    <input type="date" class="form-control mb-3" name="caducidad" placeholder="Caducidad">
                                    <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento">
                                    <label for="">Fecha de llegada del prducto</label>
                                    <input type="date" class="form-control mb-3" name="fecha_entrega" placeholder="Fecha de entrega">
                                    <input type="text" class="form-control mb-3" name="costo_inicial" placeholder="Costo inicial en pesos">
                                    <input type="text" class="form-control mb-3" name="costo_al_publico" placeholder="Costo al publico en pesos">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Observaciones</th>
                                        <th>Caducidad</th>
                                        <th>Departamento</th>
                                        <th>Fecha de llegada</th>
                                        <th>Costo inicial en pesos</th>
                                        <th>Costo al publico en pesos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idproducto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['observaciones']?></th>
                                                <th><?php  echo $row['caducidad']?></th>
                                                <th><?php  echo $row['departamento']?></th> 
												<th><?php  echo $row['fecha_entrega']?></th>
                                                <th><?php  echo $row['costo_inicial']?></th>    
												<th><?php  echo $row['costo_al_publico']?></th>    
                                                <th><a href="actualizar3.php?id=<?php echo $row['idproducto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delate3.php?id=<?php echo $row['idproducto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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