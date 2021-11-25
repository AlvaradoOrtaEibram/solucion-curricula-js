<?php 
    include("con_db3.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM producto WHERE idproducto='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update3.php" method="POST">
                    
                                <input type="hidden" name="idproducto" value="<?php echo $row['idproducto']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="Observaciones" value="<?php echo $row['observaciones']  ?>">
                                <label for="">Caducidad</label>
                                <input type="date" class="form-control mb-3" name="caducidad" placeholder="Caducidad" value="<?php echo $row['caducidad']  ?>">
                                <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento" value="<?php echo $row['departamento']  ?>">
                                <label for="">Fecha de llegada del pruducto</label>
                                <input type="date" class="form-control mb-3" name="fecha_entrega" placeholder="Fecha_entrega" value="<?php echo $row['fecha_entrega']  ?>">
                                <input type="text" class="form-control mb-3" name="costo_inicial" placeholder="Costo inicial en pesos" value="<?php echo $row['costo_inicial']  ?>">
                                <input type="text" class="form-control mb-3" name="costo_al_publico" placeholder="Costo al publico" value="<?php echo $row['costo_al_publico']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>