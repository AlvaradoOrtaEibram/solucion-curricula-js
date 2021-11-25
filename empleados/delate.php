<?php

include("con_db.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM empleados  WHERE idempleado='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>