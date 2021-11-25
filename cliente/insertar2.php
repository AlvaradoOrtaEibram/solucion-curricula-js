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

$sql="INSERT INTO cliente VALUES('$idcliente','$nombres','$apellidos','$correo','$contraseña','$telefono','$fecha_nac','$genero','$fecha_reg')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente2.php");
    
}else {
}
?>