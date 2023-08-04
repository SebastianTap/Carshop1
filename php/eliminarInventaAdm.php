<?php
session_start();

include ('conexionMarcasAdm.php');
$con= connection();

$id_veh=$_GET['id_veh'];

$sql= "DELETE FROM inventario WHERE id_veh='$id_veh'";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: actualizarInventarioAdm.php");

};

?>