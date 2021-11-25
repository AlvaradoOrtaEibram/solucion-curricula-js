<?php

include("con_db2.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM cliente  WHERE idcliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente2.php");
    }
?>