<?php

include("con_db2.php");
$con=conectar();

$idcliente=$_POST['idcliente'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];
$fecha_nac=$_POST['fecha_nac'];
$genero=$_POST['genero'];
$fecha_reg=$_POST['fecha_reg'];

$sql="UPDATE cliente SET idcliente= '$idcliente', nombre='$nombres',apellido='$apellidos'
,correo='$correo',contraseña='$contraseña',telefono = '$telefono', fecha_nac = '$fecha_nac', genero ='$genero', fecha_reg = '$fecha_reg'
WHERE idcliente='$idcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente2.php");
    }
?>