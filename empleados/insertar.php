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


$sql="INSERT INTO empleados VALUES('$idempleado','$nombres','$apellidos','$correo','$curp','$telefono','$fecha_reg')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>