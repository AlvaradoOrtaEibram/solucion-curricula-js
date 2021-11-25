<?php
include("con_db3.php");
$con=conectar();

$idproducto=$_POST['idproducto'];
$nombre=$_POST['nombre'];
$observaciones=$_POST['observaciones'];
$caducidad=$_POST['caducidad'];
$departamento=$_POST['departamento'];
$fecha_entrega=$_POST['fecha_entrega'];
$costo_inicial=$_POST['costo_inicial'];
$costo_al_publico=$_POST['costo_al_publico'];


$sql="INSERT INTO producto VALUES('$idproducto','$nombre','$observaciones','$caducidad','$departamento','$fecha_entrega','$costo_inicial','$costo_al_publico')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto3.php");
    
}else {
}
?>