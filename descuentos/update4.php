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

$sql="UPDATE descuentos SET iddescuento= '$iddescuento', porcentaje='$porcentaje',idproducto='$idproducto',duracion='$duracion',
fecha_de_inicio='$fecha_de_inicio',clientes_elegidos = '$clientes_elegidos', precio_final = '$precio_final'
WHERE iddescuento='$iddescuento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: descuentos4.php");
    }
?>