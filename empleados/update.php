<?php

include("con_db.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$correo=$_POST['correo'];
$curp=$_POST['curp'];
$telefono=$_POST['telefono'];
$fecha_reg=$_POST['fecha_reg'];

$sql="UPDATE empleados SET idempleado= '$idempleado', nombre='$nombres',apellido='$apellidos',correo='$correo',curp='$curp',telefono = '$telefono', fecha_reg = '$fecha_reg'
WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>