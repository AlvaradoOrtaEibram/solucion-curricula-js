<?php 
    include("con_db4.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM descuentos WHERE iddescuento='$id'";
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
                    <form action="update4.php" method="POST">
                    
                                <input type="hidden" name="iddescuento" value="<?php echo $row['iddescuento']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="porcentaje" placeholder="Porcentaje" value="<?php echo $row['porcentaje']  ?>">
                                <input type="text" class="form-control mb-3" name="idproducto" placeholder="Id del producto" value="<?php echo $row['idproducto']  ?>">
                                <input type="text" class="form-control mb-3" name="duracion" placeholder="duracion" value="<?php echo $row['duracion']  ?>">
                                <label for="">Fecha de inicio del descuento</label>
                                <input type="date" class="form-control mb-3" name="fecha_de_inicio" placeholder="fecha de inicio" value="<?php echo $row['fecha_de_inicio']  ?>">
                                <input type="text" class="form-control mb-3" name="clientes_elegidos" placeholder="clientes elegidos (todos,suscritos,VIP)" value="<?php echo $row['clientes_elegidos']  ?>">
                                <input type="text" class="form-control mb-3" name="precio_final" placeholder="Precio final" value="<?php echo $row['precio_final']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>