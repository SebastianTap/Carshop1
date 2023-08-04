<?php
session_start();

include ('conexionMarcasAdm.php');
$con= connection();

$id=$_GET['id'];

$sql= "DELETE FROM marca WHERE id='$id'";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: actualizarMarcasAdm.php");

};

?>