<?php

include("con_db3.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM producto  WHERE idproducto='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto3.php");
    }
?>