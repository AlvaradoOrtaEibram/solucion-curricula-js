<?php

include("con_db4.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM descuentos  WHERE iddescuento='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: descuentos4.php");
    }
?>