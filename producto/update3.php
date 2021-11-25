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

$sql="UPDATE producto SET idproducto= '$idproducto', nombre='$nombre',observaciones='$observaciones',
caducidad='$caducidad',departamento='$departamento',fecha_entrega = '$fecha_entrega', costo_inicial = '$costo_inicial', costo_al_publico = '$costo_al_publico'
WHERE idproducto='$idproducto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto3.php");
    }
?>