<?php
include("con_db4.php");
$con=conectar();

$iddescuento=$_POST['iddescuento'];
$porcentaje=$_POST['porcentaje'];
$idproducto=$_POST['idproducto'];
$duracion=$_POST['duracion'];
$fecha_de_inicio=$_POST['fecha_de_inicio'];
$clientes_elegidos=$_POST['clientes_elegidos'];
$precio_final=$_POST['precio_final'];


$sql="INSERT INTO descuentos VALUES('$iddescuento','$porcentaje','$idproducto','$duracion','$fecha_de_inicio','$clientes_elegidos','$precio_final')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: descuentos4.php");
    
}else {
}
?>